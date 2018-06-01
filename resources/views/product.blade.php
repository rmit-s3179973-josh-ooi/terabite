@extends('layout')

@section('css')

{!! Html::style(asset('assets/css/product.css')) !!}	
{!! Html::style(asset('assets/ext/jquery-slideshow/slider.min.css')) !!}
@endsection

@section('js')
{!! Html::script(asset('/js/counter.js')) !!}
{!! Html::script(asset('assets/ext/jquery-slideshow/slider.min.js')) !!}
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
			          <img id="Slides" src="{{$img->url}}">
			      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			  @endforeach
			  
			  </div>
		</div>
		<div class="product-info">
			<div class="product-price">
				AUD {{$product->price }}
			</div>
			<div class="delivery"></div>
			<div class="quantity">
				
			</div>
			<div class="rating">
				@component('components/rating',['rating'=>$product->rating])@endcomponent
			</div>
			<div class="btn-wrap">
				<button type="submit" class="btn-add-to-cart">ADD TO CART</button>
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
<script type="text/javascript">
 
</script>
@endsection