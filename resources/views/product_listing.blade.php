@extends('layout')

@section('content')
@foreach ($products as $product)

<div class="items py-10">
	<div class="container">
		<h2 class="title"></h2>
		<div class="row">
			<div class="col-sm-3">
              <div class="card mb-4 box-shadow">
                <td>{{$product->images}}</td>
                <div class="card-body">
                  <strong class="card-text">ID</strong>
                   @foreach ($products as $product)
                        <tr>
                    <td>{{$product->id}}</td>
                        
                        </tr>
                    @endforeach
                  <strong class="card-text">Product Name</strong>
                  @foreach ($products as $product)
                        <tr>
                    <td>{{$product->product_name}}</td>
                        
                        </tr>
                    @endforeach
                  
                  <strong class="card-text">Description</strong>
                  <td>{{$product->product_description}}</td>
                  <strong class="card-text">Price</strong>
                   <td>{{$product->price}}</td> </td>
                  <br><br>
                  <tbody>
                    @foreach ($products as $product)
                        <tr>
                    
                    <td>{{$product->product_name}}</td>
                   
                        </tr>
                    @endforeach
                    </tbody>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn1 btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn2 btn-sm btn-outline-secondary">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>


 <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                	
                    <thead>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>{{$product->price}}</td> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endforeach
@endsection