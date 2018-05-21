@extends('layout')
@section('css')

{!! Html::style(asset('/css/website/cart.css')) !!}	
@endsection
@inject('Hashids','Vinkla\Hashids\Facades\Hashids')
@section('content')
<h1>Shopping Cart</h1>

<hr>

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
		
		
@if (!is_null($cart))

<table>
<thead>
	<tr>
	    <th class="table-image"></th>
		<th class="image">Product name</th>
		<th></th>
		<th></th>
		<th class="price">Price</th>
		<th></th>
		<th class="quantity">Quantity</th>
		
		<th></th>
		<th class="total">Total</th>
		<th></th>
	</tr>
	</thead>
	<tbody>
@foreach( $cart->items as $item)

	<tr>
	    <th class="table-image"><img src="{{ asset('img/' . $item['item']->image) }}" alt="product" class="img-responsive"></th>
		
		<th>{{$item['item']->product_name}}</th>	
		<th></th>
		<th class="product">AU${{$item['item']->price}}.00</th>
		<th></th>
		<th class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</th>
							<th></th>
		<th class="product_price">AU${{$item['price']}}.00</th>
		<th class="delete"><form action="{{ route('cart.post.remove', ['item' => $item['item']->id]) }}" method="POST">
                {{ csrf_field() }}
				 <input type="hidden" name="_method" value="DELETE">
                 <input type="submit" class="btn btn-danger btn-sm" value="Remove">
				 
            </form></th>
		<p>
            
        </p>
	</tr>
     
@endforeach
<tr>
	<td></td>
	
    <div class="sub">
	<th >Subtotal: AU${{$cart->totalPrice}}.00</th></div>
 </tr>
</table>
</br>
<div class="shop"><input type="submit" alt="Continue shopping" title="Continue shopping" value="Continue shopping" data-icon="refresh"></div>
<div class="update"><input type="submit" alt="Update" title="Update" value="Update" data-icon="refresh"></div>
<div class="check"><input type="submit" alt="Checkout" title="Checkout" value="Checkout" data-icon="refresh"></div>
@else
<h1>Cart is empty</h1>
@endif


@endsection
