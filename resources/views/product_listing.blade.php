@extends('layout')

@section('css')
  {!! Html::style(asset('assets/css/product_listing.css')) !!}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection


@section('content')


<div class="crumbs">
  <a href="{{ route('website.get.home') }}"> Home </a>
  <span> > Search Result</span>
  <span>
    @if(Request::has("search"))
    > {{ Request::get("search") }}
    @endif
  </span>
</div>
<div class="product-container">
    <div class="title-wrap">
        <div class="title">
            <h1>Search: </h1>
        </div>
        <div class="filter">
            <div class="filter-text">Sort By:</div>
            <div class="dropdown">
            {!! Form::open(['id'=>'sort-form']) !!}
            {!! Form::select('sort',[''=>'','plh'=>'Lowest Price','phl'=>'Higest Price'],'',['id'=>'sort-select']) !!}
            {!! Form::close() !!}
            </div> 
        </div>
    </div>
    <div class="product-wrap">
        <div class="product-inner-wrap">
        <div class="sidebar">
            <h3><strong>Brand</strong></h3>
            {!! Form::open(array('route' =>'product.post.filter','id'=>"filter-form")) !!}
            <ul class="brand-list">
            @foreach($brands as $b )
                <li class="brand-list-item">
                    <span class="checkbox">
                    {!! Form::checkbox('brand[]',$b) !!}
                    </span>
                    <span class="label">{{$b}}</span>

                </li>
            @endforeach
            </span>
            </li>
            </ul>
            <h3><strong>Rating</strong></h3>
            <ul class="rating-list">

                @for($i = 1; $i <=5;$i++)
                <li class="rating-list-item">
                    <span class="checkbox">
                        {!! Form::radio('rating',$i, old('rating') == $i ? true : false) !!}
                    </span>
                    <label class="label rating" for="rating" >                        
                        @component('components/rating',['rating'=>$i])@endcomponent
                        <span>Up</span>
                    </label>
                </li>
                @endfor
            </ul>
            <div class="btn-wrap">
            {!! Form::submit("Filter",["class"=>"btn btn-filter"]) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="product-listing">
            @foreach($products as $prod)
            
                @component('components/product',['product'=>$prod])@endcomponent
            @endforeach
        </div>
        </div>
        <div class="pagination-wrap">
            {{ $products->links() }}
        </div>
    </div>
</div>


@endsection

@section('footer')

{!! Html::script(asset('assets/js/jquery.serializeObject.min.js')) !!}
{!! Html::script(asset('assets/js/filter.min.js')) !!}
{!! Html::script('assets/js/addToCart.min.js') !!}
<script>
    $("#filter-form").formSubmit("filter");
    $("#sort-form").formSubmit("sort");
    $("#sort-select").change(function(){
        $("#sort-form").submit();
    });
    $(".add-to-cart-link").addToCart();
</script>
@endsection