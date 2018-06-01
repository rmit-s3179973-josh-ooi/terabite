<h2>{{ $slot }}</h2>
  <div class="products-wrap">
    @foreach($products as $product)    	
		@component('components/product',['product'=>$product])@endcomponent
    @endforeach
  </div>