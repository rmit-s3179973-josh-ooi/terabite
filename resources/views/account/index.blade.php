@extends('layout')

@section('content')

<table>
	<tr>
		<th>Order No</th>
		<th>Date</th>
		<th>Qauntity</th>
		<th>Price</th>
	</tr>
	@foreach($orders as $order)
	
	<tr>
		<td>{{ $order->id}}</td>
		<td>{{ $order->date}}</td>
		<td>{{ $order->qty}}</td>
		<td>{{ $order->total }}</td>
	</tr>
	@endforeach
</table>

@endsection