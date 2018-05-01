@extends('layout')

@section('css')

{!! Html::style(asset('/css/website/productpage.css')) !!}	
@endsection

@section('js')

@endsection


@section('content')
    <br/>
    <p>
	<span><a href="http://terabite.test/home" >Home</a></span>
	<span class="nowrap"> > </span>
	
	<span>{{$product->category->category_name}}</span>
	<span class="nowrap"> > </span>
	 <span class="nowrap">{{$product->product_name}}</span></p>
	<br/>
	<br/>
<h2><strong>{{$product->product_name}}</strong></h2>
   <div class="box">
	<div class="product-image" name ="img" >
	@foreach ($product->images as $img)
	        <img class="mySlides" src="{{$img->url}}">
	@endforeach
	
	</div>

              


     
		
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
<p class="name">John Doe</p><div class="product-reviews">
             <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

                    <div class="rating">
                        
                    
								<i class="material-icons">star</i>
	                          <i class="material-icons">star</i>
	                            <i class="material-icons">star</i>
	                              <i class="material-icons">star</i>
	                            <i class="material-icons">star</i>
																		</div>
																	</div>
			<p class="date"> Nov 13 18</p>
I like this poduct very much and I will buy it much more in the future.
</div>
<br/>
<div class="r2">
<p class="name2">John Doe</p><div class="product-reviews">
             <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

                    <div class="rating">
                        
                    
								<i class="material-icons">star</i>
	                          <i class="material-icons">star</i>
	                            <i class="material-icons">star</i>
	                              <i class="material-icons">star</i>
	                            <i class="material-icons">star</i>
																		</div>
																	</div>
	<p class="date2"> Nov 13 18</p>
I like this poduct very much and I will buy it much more in the future.
</div>

<div class="but2">        	
                
        <button class="btn btn-primary" type="submit">Load more</button>
            
	</div>
<br/>
<br/>
 

@endsection
