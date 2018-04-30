@extends('layout')

@section('content')
@foreach ($products as $product)
<div><strong>{{$product->product_name}}</strong></div>
{{$product->product_description}}
{{$product->price}}
@endforeach
@endsection