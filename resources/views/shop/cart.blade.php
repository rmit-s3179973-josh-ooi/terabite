@extends('layout')
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
		<th>Product name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Total</th>
		<th></th>
	</tr>
	</thead>
	<tbody>
@foreach( $cart->items as $item)
	<tr>
	    <td class="table-image"><img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive"></td>
		<td>{{$item['item']->product_name}}</td>
		<td>{{$item['item']->price}}</td>
		<td>{{$item['qty']}}</td>
		<div><input type="text" name="cart_quantity[]" value="1" size="2" /><input type="hidden" name="products_id[]" value="170662" /><input type="hidden" name="old_qty[]" value="1" /></div>
		<td>{{$item['price']}}</td>
		<p>
            <form action="{{ route('laralum_public::shop.cart.remove', ['item' => $item['item']->id]) }}" method="POST">
                {{ csrf_field() }}
				 <input type="hidden" name="_method" value="DELETE">
                 <input type="submit" class="btn btn-danger btn-sm" value="Remove">
				 
            </form>
        </p>
	</tr>
     
@endforeach
<tr>
	<td></td>
	<td></td>
  
  </tr>
	<td>{{$cart->totalQty}}</td>
	<td>{{$cart->totalPrice}}</td>
</tr>
</table>
<div><input type="submit" alt="Update shopping cart" title="Update shopping cart" value="Update shopping cart" data-icon="refresh"></div>
@else
<h1>Cart is empty</h1>
@endif


@endsection
