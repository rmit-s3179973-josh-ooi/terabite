@extends('layout')

@section('content')

<div><strong>{{$product->product_name}}</strong></div>
{{$product->product_description}}
{{$product->price}}
@endsection