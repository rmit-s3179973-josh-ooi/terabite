@extends('layout')

@section('content')
@foreach ($products as $product)



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