@extends('layout')

@section('css')
  {!! Html::style(asset('css/website/product_listing.css')) !!}
@endsection

@section('content')
@foreach ($products as $product)

<div class="items py-10">
	<div class="container">
		<h2 class="title"></h2>
		<div class="row">
			<div class="col-sm-3">
              <div class="card mb-4 box-shadow">
                <td><img src="{{$product->images[0]->url}}"></td>
                <div class="card-body">
                                    
                  <br><strong class="card-text">Product Name</strong></br>
                   <td>{{$product->product_name}}</td>                                 
                  <br><strong class="card-text">Description</strong></br>
                  <td>{{$product->product_description}}</td>

                  <strong class="card-text">Price: $</strong>
                  <td>{{$product->price}}</td>
                  <br><br>
                  
                                       
                    </tbody>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn1 btn-sm btn-outline-secondary" >View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endforeach


@endsection