<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\OrderRequest;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ProductInventory;
use App\Models\Shipment;

class OrderController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth');
    }

    public function checkout()
    {
        if (\Cart::isEmpty()) {
            return redirect('carts');
        }

        \Cart::removeConditionsByType('shipping');
        $this->updateTax();

        $items = \Cart::getContent();
        $this->data['items'] = $items;
        $this->data['totalWeight'] = $this->getTotalWeight() / 1000;

        $this->data['provinces'] = $this->getProvinces();
        $this->data['cities'] = isset(\Auth::user()->province_id) ? $this->getCities(\Auth::user()->province_id) : [];
        $this->data['user'] = \Auth::user();

        return $this->load_theme('orders.checkout', $this->data);
    }

    public function cities(Request $request)
    {
        $cities = $this->getCities($request->query('province_id'));
        return response()->json(['cities' => $cities]);
    }

    public function shippingCost(Request $request)
    {
        $destination = $request->input('city_id');

        return $this->getShippingCost($destination, $this->getTotalWeight());
    }

    public function setShipping(Request $request)
    {
        \Cart::removeConditionsByType('shipping');

        $shippingService = $request->get('shipping_service');
		$destination = $request->get('city_id');

		$shippingOptions = $this->getShippingCost($destination, $this->getTotalWeight());

		$selectedShipping = null;
		if ($shippingOptions['results']) {
			foreach ($shippingOptions['results'] as $shippingOption) {
				if (str_replace(' ', '', $shippingOption['service']) == $shippingService) {
					$selectedShipping = $shippingOption;
					break;
				}
			}
		}

		$status = null;
		$message = null;
		$data = [];
		if ($selectedShipping) {
			$status = 200;
			$message = 'Success set shipping cost';

			$this->addShippingCostToCart($selectedShipping['service'], $selectedShipping['cost']);

			$data['total'] = number_format(\Cart::getTotal());

		} else {
			$status = 400;
			$message = 'Failed to set shipping cost';
		}

		$response = [
			'status' => $status,
			'message' => $message
		];

		if ($data) {
			$response['data'] = $data;
		}

		return $response;
    }

    private function getSelectedShipping($destination, $totalWeight, $shippingService)
    {
        $shippingOptions = $this->getShippingCost($destination, $totalWeight);

        $selectedShipping = null;
        if ($shippingOptions['results']) {
            foreach ($shippingOptions['results'] as $shippingOption) {
                if (str_replace(' ', '', $shippingOption['service']) == $shippingService) {
                    $selectedShipping = $shippingOption;
                    break;
                }
            }
        }

        return $selectedShipping;
    }

    private function addShippingCostToCart($serviceName, $cost)
    {
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $serviceName,
            'type' => 'shipping',
            'target' => 'total',
            'value' => '+' . $cost,
        ));

        \Cart::condition($condition);
    }

    private function getShippingCost($destination, $weight)
	{
		$params = [
			'origin' => env('RAJAONGKIR_ORIGIN'),
			'destination' => $destination,
			'weight' => $weight,
		];

		$results = [];
		foreach ($this->couriers as $code => $courier) {
			$params['courier'] = $code;

			$response = $this->rajaOngkirRequest('cost', $params, 'POST');

			if (!empty($response['rajaongkir']['results'])) {
				foreach ($response['rajaongkir']['results'] as $cost) {
					if (!empty($cost['costs'])) {
						foreach ($cost['costs'] as $costDetail) {
							$serviceName = strtoupper($cost['code']) .' - '. $costDetail['service'];
							$costAmount = $costDetail['cost'][0]['value'];
							$etd = $costDetail['cost'][0]['etd'];

							$result = [
								'service' => $serviceName,
								'cost' => $costAmount,
								'etd' => $etd,
                                'courier' => $code,
							];

							$results[] = $result;
						}
					}
				}
			}
		}

		$response = [
			'origin' => $params['origin'],
			'destination' => $destination,
			'weight' => $weight,
			'results' => $results,
		];

		return $response;
	}

    private function _getTotalWeight()
    {
        if (\Cart::isEmpty()) {
            return 0;
        }

        $totalWeight = 0;
        $items = \Cart::getContent();

        foreach ($items as $item) {
            $totalWeight += ($item->quantity * $item->associatedModel->weight);
        }

        return $totalWeight;
    }

    private function updateTax()
    {
        \Cart::removeConditionsByType('tax');

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'TAX 10%',
            'type' => 'tax',
            'target' => 'total',
            'value' => '10%',
        ));

        \Cart::condition($condition);
    }

    public function doCheckout(OrderRequest $request)
    {
        $params = $request->except('_token');

        $order = \DB::transaction(function () use ($params) {
            $destination = isset($params['ship_to']) ? $params['shipping_city_id'] : $params['city_id'];
            $selectedShipping = $this->getSelectedShipping($destination, $this->_getTotalWeight(), $params['shipping_service']);

            $baseTotalPrice = \Cart::getSubTotal();
            $taxAmount = \Cart::getCondition('TAX 10%')->getCalculatedValue(\Cart::getSubTotal());
            $taxPercent = (float)\Cart::getCondition('TAX 10%')->getValue();
            $shippingCost = $selectedShipping['cost'];
            $discountAmount = 0;
            $discountPercent = 0;
            $grandTotal = ($baseTotalPrice + $taxAmount + $shippingCost) - $discountAmount;

            $orderDate = date('Y-m-d H:i:s');
            $paymentDue = (new \DateTime($orderDate))->modify('+7 day')->format('Y-m-d H:i:s');

            $orderParams = [
                'user_id' => \Auth::user()->id,
                'code' => Order::generateCode(),
                'status' => Order::CREATED,
                'order_date' => $orderDate,
                'payment_due' => $paymentDue,
                'payment_status' => Order::UNPAID,
                'base_total_price' => $baseTotalPrice,
                'tax_amount' => $taxAmount,
                'tax_percent' => $taxPercent,
                'discount_amount' => $discountAmount,
                'discount_percent' => $discountPercent,
                'shipping_cost' => $shippingCost,
                'grand_total' => $grandTotal,
                'node' => $params['note'],
                'customer_first_name' => $params['first_name'],
                'customer_last_name' => $params['last_name'],
                'customer_company' => $params['company'],
                'customer_address1' => $params['address1'],
                'customer_address2' => $params['address2'],
                'customer_phone' => $params['phone'],
                'customer_email' => $params['email'],
                'customer_city_id' => $params['city_id'],
                'customer_province_id' => $params['province_id'],
                'customer_postcode' => $params['postcode'],
                'shipping_courier' => $selectedShipping['courier'],
                'shipping_service_name' => $selectedShipping['service'],
            ];

            $order = Order::create($orderParams);
            $cartItems = \Cart::getContent();

            if ($order && $cartItems) {
                foreach ($cartItems as $item) {
                    $itemTaxAmount = 0;
                    $itemTaxPercent = 0;
                    $itemDiscountAmount = 0;
                    $itemDiscountPercent = 0;
                    $itemBaseTotal = $item->quantity * $item->price;
                    $itemSubTotal = $itemBaseTotal + $itemTaxAmount - $itemDiscountAmount;

                    $product = isset($item->associatedModel->parent) ? $item->associatedModel->parent : $item->associatedModel;

                    $orderItemParams = [
                        'order_id' => $order->id,
                        'product_id' => $item->associatedModel->id,
                        'qty' => $item->quantity,
                        'base_price' => $item->price,
                        'base_total' => $itemBaseTotal,
                        'tax_amount' => $itemTaxAmount,
                        'tax_percent' => $itemTaxPercent,
                        'discount_amount' => $itemDiscountAmount,
                        'discount_percent' => $itemDiscountPercent,
                        'sub_total' => $itemSubTotal,
                        'sku' => $item->associatedModel->sku,
                        'type' => $product->type,
                        'name' => $item->name,
                        'weight' => $item->associatedModel->weight,
                        'attributes' => json_encode($item->attributes),
                    ];

                    $orderItem = OrderItem::create($orderItemParams);

                    if ($orderItem) {
                        ProductInventory::reduceStock($orderItem->product_id, $orderItem->qty);
                    }
                }
            }

            $shippingFirstName = isset($params['ship_to']) ? $params['shipping_first_name'] : $params['first_name'];
            $shippingLastName = isset($params['ship_to']) ? $params['shipping_last_name'] : $params['last_name'];
            $shippingCompany = isset($params['ship_to']) ? $params['shipping_company'] :$params['company'];
            $shippingAddress1 = isset($params['ship_to']) ? $params['shipping_address1'] : $params['address1'];
            $shippingAddress2 = isset($params['ship_to']) ? $params['shipping_address2'] : $params['address2'];
            $shippingPhone = isset($params['ship_to']) ? $params['shipping_phone'] : $params['phone'];
            $shippingEmail = isset($params['ship_to']) ? $params['shipping_email'] : $params['email'];
            $shippingCityId = isset($params['ship_to']) ? $params['shipping_city_id'] : $params['city_id'];
            $shippingProvinceId = isset($params['ship_to']) ? $params['shipping_province_id'] : $params['province_id'];
            $shippingPostcode = isset($params['ship_to']) ? $params['shipping_postcode'] : $params['postcode'];

            $shipmentParams = [
                'user_id' => \Auth::user()->id,
                'order_id' => $order->id,
                'status' => Shipment::PENDING,
                'total_qty' => \Cart::getTotalQuantity(),
                'total_weight' => $this->_getTotalWeight(),
                'first_name' => $shippingFirstName,
                'last_name' => $shippingLastName,
                'address1' => $shippingAddress1,
                'address2' => $shippingAddress2,
                'phone' => $shippingPhone,
                'email' => $shippingEmail,
                'city_id' => $shippingCityId,
                'province_id' => $shippingProvinceId,
                'postcode' => $shippingPostcode,
            ];

            Shipment::create($shipmentParams);

            return $order;
        });

        if ($order) {
            \Cart::clear();

            \Session::flash('success', 'Thank you. Your order has been received!');

            return redirect('orders/received/' . $order->id);
        }

        return redirect('orders/checkout');
    }

    public function received($orderId)
    {
        $this->data['order'] = Order::where('id', $orderId)
                                ->where('user_id', \Auth::user()->id)
                                ->firstOrFail();

        return $this->load_theme('orders/received', $this->data);
    }
}
