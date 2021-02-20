<div class="row">
	@forelse ($products as $product)
		@include('themes.superb.products.list_box')
	@empty
		No product found!
	@endforelse
</div>
