@extends('layout')

@section('css')
  {!! Html::style(asset('css/website/product_listing.css')) !!}
@endsection


@section('content')

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="top-nav">
  <a href="/"> Home </a>
  <span> > Search Result</span>
</div>

<div class="sortBy">

<form class="sort" >
 <select name="sortForm">
  <option value="low">price: low to high</option>
  <option value="high">price: high to low</option>
</select>
</form>
<li>Sort by：</li>
</div>

<h3 class="title">Search: Search Query Text Here</h3>
<br><br>


<div class="items py-10">

  <div class="container">

		<div class="sidebar">

     <form class="side-nav" >
      <h6>Brand</h6>
      <li><input type="checkbox" id="brand1" />
       Brand One
      </li>
      <li><input type="checkbox" id="brand2" /> 
       Brand Two
      </li>
      <li><input type="checkbox" id="brand3" />
       Brand Three
      </li>
      <li><input type="checkbox" id="brand4" /> 
      Brand Four
      </li>
      <li><input type="checkbox" id="brand5" />
      Brand Five
      </li>

      </br>
      </br>
      </br>
      </br>
      </br>
      </br>

      <h6>Rating</h6>
      <li>★★★★★</li></br>
      <li>★★★★☆</li></br>
      <li>★★★☆☆</li></br>
      <li>★★☆☆☆</li></br>
      <li>★☆☆☆☆</li></br>

     </form>
    </div>

		<div class="row">
      @foreach ($products as $product)
			<div class="col-sm-3">

              <div class="card mb-4 box-shadow">
                <td><img class="card-img" src="{{$product->images[0]->url}}"></td>
                <div class="card-body">
                                    
                  <br>
                  <td>{{$product->product_name}}</td>                              
                  <br><strong class="card-text">$</strong>
                  <td>{{$product->price}}</td>
                  <br><br>
                  
                                       
                    
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn1 btn-sm btn-outline-secondary" >View</button>
                      <button type="button" class="btn2 btn-sm btn-outline-secondary"><i class ="fa fa-shopping-cart"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endforeach


@endsection