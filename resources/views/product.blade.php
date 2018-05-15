@extends('layout')

@section('css')

{!! Html::style(asset('/css/website/productpage.css')) !!}	
{!! Html::style(asset('/css/website/jquery.mobile.stepper.css')) !!}
@endsection

@section('js')
{!! Html::script(asset('/js/jquery.mobile.stepper.js')) !!}
{!! Html::script(asset('/js/slides.js')) !!}

@endsection


@section('content')
 
    <br>
    <p>
	<span><a href="http://terabite.test/welcome" >Home</a></span>
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
	        <img id="Slides" src="{{$img->url}}">
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	@endforeach
	
	</div>

           
		
            <p class="product-price">AU: $ {{ $product->price }}</p>
        
		
		<h6 class="deli">Delivery Option:</h6>
		<h5>Standard Delivery</h5>
		<h4>Free</h4>
		<p class="time">Get By: 17 Apr - 20 Apr</p>
		<h6 class="qua">Quantity</h6>
			
			
	<div class = "quantity">
	<div id="app">
	 <button class="inc" @click="{counter > 0 ? counter -= 1 : 0">-</button>
	 
 <input type="number" min="1" max="50" step="1" value="1">
  
   <button class="inc" @click="{counter += 1">+</button>
   
  </div>
</div>


<div class="product-but">        	
          <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->product_id }}">
                    <input type="hidden" name="name" value="{{ $product->product_name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">      
        <button class="btn btn-primary" type="submit">Add to Cart</button>
            
	</div>
	</div>
	
	<div class="rate">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

						<div class="rating">
							
					 <h1 class= "star">★★★★★</h1>
									
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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <div class="rating">
                        
                   <h2 class= "star">★★★★★</h2>
								
																		</div>
																	</div>
		  	<p class="date"> Nov 13 18</p>
I like this poduct very much and I will buy it much more in the future.
</div>
<br/>
<div class="r2">
<p class="name2">John Doe</p><div class="product-reviews">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <div class="rating">
                        
                    
								<h2 class= "star">★★★★★</h2>
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
 <br/>          
    




 @endsection
