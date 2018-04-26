@extends('layout')

@section('content')

{{dd($product)}}

<div><strong>{{$product->product_name}}</strong></div>
{{$product->product_description}}
{{$product->price}}
{{$product->images[0]->url}}
@foreach ($product->images as $img)
    <img src="{{$img->url}}">
@endforeach

@endsection