<?php

use PHPMailer\PHPMailer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Route::get('/products', 'ProductController@index');
Route::get('/product/{slug}', 'ProductController@show');
Route::get('/products/quick-view/{slug}', 'ProductController@quickView');

Route::get('/carts', 'CartController@index');
Route::get('/carts/remove/{cartID}', 'CartController@destroy');
Route::post('/carts', 'CartController@store');
Route::post('/carts/update', 'CartController@update');

Route::get('orders/checkout', 'OrderController@checkout');
Route::post('orders/checkout', 'OrderController@doCheckout');
Route::post('orders/shipping-cost', 'OrderController@shippingCost');
Route::post('orders/set-shipping', 'OrderController@setShipping');
Route::get('orders/received/{orderID}', 'OrderController@received');
// Route::get('orders/invoice', 'OrderController@invoice');
Route::get('orders/cities', 'OrderController@cities');

Route::post('payments/notification', 'PaymentController@notification');
Route::get('payments/completed', 'PaymentController@completed');
Route::get('payments/failed', 'PaymentController@failed');
Route::get('payments/unfinish', 'PaymentController@unfinish');

Route::resource('favorites', 'FavoriteController');

Route::group(
    [
        'namespace' => 'Admin',
        'prefix' => 'admin',
        'middleware' => ['auth']
    ],
    function(){
        Route::get('dashboard', 'DashboardController@index');
        Route::resource('categories', 'CategoryController');

        Route::resource('products', 'ProductController');
        Route::get('products/{productID}/images', 'ProductController@images')->name('products.images');
        Route::get('products/{productID}/add-image', 'ProductController@addImage')->name('products.add_image');
        Route::post('products/images/{productID}', 'ProductController@uploadImage')->name('products.upload_image');
        Route::delete('products/images/{imageID}', 'ProductController@removeImage')->name('products.remove_image');

        Route::resource('attributes', 'AttributeController');
        Route::get('attributes/{attributeID}/options', 'AttributeController@options')->name('attributes.options');
        Route::get('attributes/{attributeID}/add-option', 'AttributeController@add_option')->name('attributes.add_option');
        Route::post('attributes/options/{attributeID}', 'AttributeController@store_option')->name('attributes.store_option');
        Route::delete('attributes/options/{optionID}', 'AttributeController@remove_option')->name('attributes.remove_option');
        Route::get('attributes/options/{optionID}/edit', 'AttributeController@edit_option')->name('attributes.edit_option');
        Route::put('attributes/options/{optionID}', 'AttributeController@update_option')->name('attributes.update_option');

        Route::resource('roles', 'RoleController');
        Route::resource('users', 'UserController');

        Route::get('orders/trashed', 'OrderController@trashed');
        Route::get('orders/restore/{orderID}', 'OrderController@restore');
        Route::resource('orders', 'OrderController');
        Route::get('orders/{orderID}/cancel', 'OrderController@cancel');
        Route::put('orders/cancel/{orderID}', 'OrderController@doCancel');
        Route::post('orders/complete/{orderID}', 'OrderController@doComplete');

        Route::resource('shipments', 'ShipmentController');

        Route::resource('slides', 'SlideController');
        Route::get('slides/{slideID}/up', 'SlideController@moveUp');
        Route::get('slides/{slideID}/down', 'SlideController@moveDown');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/tes-email', function () {
//     $text             = 'Hello Mail';
//     $mail             = new PHPMailer\PHPMailer();
//     $mail->IsSMTP();
//     $mail->SMTPDebug  = 1;
//     $mail->SMTPAuth   = true;
//     $mail->Host       = env('MAIL_HOST');
//     $mail->Port       = env('MAIL_PORT');
//     $mail->IsHTML(true);
//     $mail->Username = env('MAIL_USERNAME');
//     $mail->Password = env('MAIL_PASSWORD');
//     $mail->SetFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
//     $mail->Subject = "Test Subject";
//     $mail->Body    = $text;
//     $mail->AddAddress("willywin1999@gmail.com");
//     if ($mail->Send()) {
//         return 'Email Sended Successfully';
//     } else {
//         return 'Failed to Send Email';
//     }
// });
