@extends('layout')
@inject('Hashids','Vinkla\Hashids\Facades\Hashids')
@section('content')

@if (!is_null($cart))

<table>
	<tr>
		<th>Product name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Total</th>
	</tr>
@foreach( $cart->items as $item)
	<tr>
		<td>{{$item['item']->product_name}}</td>
		<td>{{$item['qty']}}</td>
		<td>{{$item['item']->price}}</td>
		<td>{{$item['price']}}</td>
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
