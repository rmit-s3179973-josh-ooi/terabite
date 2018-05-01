@extends('layout')

@section('css')

{!! Html::style(asset('/css/website/productpage.css')) !!}	
@endsection

@section('js')
{!! Html::script(asset('/assets/js/quantity.js')) !!}

@endsection


@section('content')


	{{$product->category->category_name}}
	<br/>
	<br/>
<h2><strong>{{$product->product_name}}</strong></h2>

	<div class="product-image" name ="img" >
	@foreach ($product->images as $img)
	        <img src="{{$img->url}}">
	@endforeach
	</div>
	 

<div class="box">

         
		
            <p class="product-price">AU: $ {{ $product->price }}</p>
        
		
		<h6>Delivery Option:</h6>
		<h5>Standard Delivery</h5>
		<h4>Free</h4>
		<p class="time">Get By: 17 Apr - 20 Apr</p>
		<h6 class="qua">Quantity</h6>
		
	<div class = "quantity">
  <input type="number" min="1" max="50" step="1" value="1">
</div>
   


<div class="product-but">        	
                
        <button class="btn btn-primary" type="submit">Add to Cart</button>
            
	</div>
	</div>
	
	
	<br/>
	
	<h4 class="des">Product Description</h4>
	<br/>

    <p>{{$product->product_description}}</p>

  <br/>
 
  <h4 class="rev">Product Review</h4>
<br/>

<div class="r1">
<p class="name">John Doe</p><p class="date"> Nov 13 18</p>
The width of this div remains at 300px, 
in spite of the 50px of total left and right padding, 
because of the box-sizing: border-box property.
</div>
<br/>
<div class="r2">
<p class="name2">John Doe</p><p class="date2"> Nov 13 18</p>
The width of this div remains at 300px, 
in spite of the 50px of total left and right padding, 
because of the box-sizing: border-box property.
</div>




@endsection
