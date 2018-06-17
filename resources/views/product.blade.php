@extends('layout')

@section('css')

{!! Html::style(asset('assets/css/product.css')) !!}	
@endsection

@section('js')

@endsection


@section('content')
<div class="crumbs">
	<span>
		<a href="{{ route('website.get.home') }}"> Home </a>
	</span>
	<span class="arrow">
		>
	</span>
	<span>
		<a href=""> {{ $product->category->category_name }} </a>
	</span>
	<span class="arrow">
		>
	</span>
	<span>
		{{$product->product_name}}
	</span>
</div>
<div class="product-container">
	<h2>{{$product->product_name}}</h2>
	<div class="product-info-wrap">
		<div class="image-wrap">
			<div class="product-image" name ="img" >
			  @foreach ($product->images as $img)
			          <img class="Slides" src="{{$img->url}}">
			      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			  @endforeach
			  
			  </div>
		</div>
		<div class="product-info">
			<div class="product-price">
				AUD {{$product->price/100 }}
			</div>
			<div class="delivery">
				<div class="text1">Delivery Option:</div>
				<div class="text2-wrap">
					<div class="left-col">
						<div class="text2">Standard Delivery</div>
						<div class="subtext">Get By: {{now()->format('d M')}} - {{ now()->addDays(7)->format('d M') }}</div>
					</div>
					<div class="right-col">FREE</div>
				</div>
			</div>
			<div class="quantity">
				
				<input type="hidden" value="1" class="number" name="quantity">
				<div class="quantity-wrap">
					<div class="decrease">-</div>
					<div class="display">1</div>
					<div class="increase">+</div>
				</div>
			</div>
			<div class="rating">
				@component('components/rating',['rating'=>$product->rating])@endcomponent
			</div>
			<div class="btn-wrap">
				<a class="btn-add-to-cart" href="{{ route('cart.get.add',['id'=>$product->id]) }}">ADD TO CART</a>
			</div>
		</div>
	</div>
	<div class="product-desc-wrap">
		<h3>Product Description</h3>
		<p>
			{{ $product->product_description }}
		</p>
	</div>
	<div class="product-review-wrap">
		<h3>Product Review</h3>
		<div class="review-wrap">			
			@foreach($product->reviews as $review)
			<div class="review-item">
				<h4>{{ $review->user_name }}</h4>
				<div class="review-rating">
					<span class="rating">
						@component('components/rating',['rating'=>$review->rating])@endcomponent
					</span>
					<span class="review-date">
					{{ $review->date }}	
					</span>
				</div>
				<div class="review-desc">{{ $review->review }}</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

 @endsection


@section('footer')
{!! Html::script(asset('/js/counter.js')) !!}
{!! Html::script(asset('/js/slides.js')) !!}
{!! Html::script('assets/js/addToCart.min.js') !!}
{!! Html::script(asset('assets/js/quantity.min.js')) !!}
<script type="text/javascript">
 $(".btn-add-to-cart").addToCart({hasQty:true, input: ".number"});
 	var quantity = new Quantity();
</script>
@endsection