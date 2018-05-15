@extends('layout')

@section('content')

@if (!is_null($cart))
<h1>Shopping Cart</h1>
<table>
<thead>
	<tr>
		<th>Product name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Total</th>
	</tr>
	</thead>
	<tbody>
@foreach( $cart->items as $item)
	<tr>
		<td>{{$item['item']->product_name}}</td>
		<td>{{$item['qty']}}</td>
		<td><span class="money">{{$item['item']->price}}</span></td>
		<td>{{$item['price']}}</td>
		<p>
            <form action="{{ route('laralum_public::shop.cart.remove', ['item' => $item['item']->id]) }}" method="POST">
                {{ csrf_field() }}
				 {{ method_field('DELETE') }}
                <input type="submit" value="Remove from cart"/>
            </form>
        </p>
	</tr>

@endforeach
<tr>
	<td></td>
	<td></td>
	<td>{{$cart->totalQty}}</td>
	<td>{{$cart->totalPrice}}</td>
</tr>
</table>

@else
<h1>Cart is empty</h1>
@endif
@endsection
