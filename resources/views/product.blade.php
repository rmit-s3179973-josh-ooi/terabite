@extends('layout')

@section('css')

{!! Html::style(asset('/css/website/productpage.css')) !!}	
@endsection

@section('js')

@endsection


@section('content')

{{ dd($product)}}
	{{$product->product_category_id}}
<h2><strong>{{$product->product_name}}</strong></h2>

	<div class="product-image" name ="img" >
	@foreach ($product->images as $img)
	        <img src="{{$img->url}}">
	@endforeach
	</div>
	 


<div class="product-price">
         <a class="qty"> QTY: <input type="text" class="qty" name="qty" value="1"></a>
		<span class="separator">|</span>
            <a>You pay: $ {{ $product->price }}</a>
        </div>
		
<div class="product-d">
      <p>Devlivery:<a>$9.99  <span class="separator">|</span> Rate: </a></p>
     </div>

<div class="product-but">
<form>
               
                	
                <button class="btn btn-second" type="submit">Buy now</button>
                <button class="btn btn-primary" type="submit">Add to Cart</button>
            </form>
	</div>
	<br/>
	<br/>

	<div class="nav">
	<ul>
	<li class="active"><a href="#1" data-toggle="tab">Overview</a></li>
	<li><a href="#2" data-toggle="tab">Reviews</a></li>
	<li><a href="#3" data-toggle="tab">Q&A</a></li>
	<li><a href="#4" data-toggle="tab">Specs</a></li>
	</ul>
     <br/>
     </div>
	 
	<div id="1" class="tab-pane">
	<br/>
  <br/>
  <br/>
  <br/>
<p>{{$product->product_description}}</p>


</div>



@endsection
