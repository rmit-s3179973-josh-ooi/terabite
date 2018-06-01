@extends('layout')

@section('css')
{!! Html::style(asset('assets/css/cart.css')) !!}
@endsection

@section('content')
<div class="heading-wrap">
	<h1>Shopping Cart</h1>	
</div>

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
		
<div class="cart-container">
@if (!is_null($cart))
<div class="cart-wrap">
	{!! Form::open(["id"=>"form"]) !!}
	@foreach( $cart->items as $key => $item)	
	<div class="cart-item">		
		<div class="cart-col product-name">{{$item['item']->product_name}}</div>
		<div class="cart-col product-price">AUD {{$item['item']->price}}</div>
		<div class="cart-col product-qty" id="quantity">		
			@component('components/quantity',['item'=>$item])@endcomponent
		</div>
		<div class="cart-col product-total">AUD {{$item['price']}}</div>
		<div class="cart-col product-remove">
			<a href="{{ route('cart.post.remove', $item['item']->id) }}"><img src="{{ asset('assets/images/icons/trash.png') }}" alt=""></a>
		</div>
	</div>	
	@endforeach
	
</div>
<div class="cart-summary">
	<span>Subtotal: </span><span> AUD {{$cart->totalPrice}}</span>
</div>
<div class="cart-btn-wrap">
	<a href="{{ route('website.get.home') }}" class="btn-item btn-contd">Continue Shopping</a>
	<a href="{{ route('checkout.get.view') }}" class="btn-item btn-checkout">Checkout</a>
	{!! Form::submit("Update",['class'=>'btn-item btn-update']) !!}
</div>

{!! Form::close() !!}
@else
<div class="empty-wrap">
	<h1>Your Cart is Empty</h1>	
	<a href="{{ route('website.get.home') }}">Shop Now</a>
</div>

@endif
</div>		

@endsection

@section('footer')

@if (!is_null($cart))
{!! Html::script(asset('assets/js/quantity.min.js')) !!}
<script>
	$("#quantity").quantity();
</script>
@endif
@endsection