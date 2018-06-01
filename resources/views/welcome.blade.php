@extends('layout')

@section('css')
	{!! Html::style(asset('assets/css/home.css')) !!}
@endsection

@section('content')
<div class="home-container">
    <div class="hero-wrap">
      <img src="http://via.placeholder.com/1280x300" alt=""/>
    </div>
    <div class="recommanded-wrap">
      @component('components/home_product',['products' => $recommended])
      Recommended For You
      @endcomponent
    </div>
    <div class="dotd-wrap">
      @component('components/home_product',['products' => $recommended])
      Deal of The Day
      @endcomponent
    </div>


</div>
@endsection





