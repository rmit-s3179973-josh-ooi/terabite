@extends('layout')

@section('content')
@if (!is_null($cart))
{{ $cart->totalQty }}
@else
<h1>Cart is empty</h1>
@endif
@endsection