@extends('admin/layout')

@section('css')
{!! Html::style(asset('assets/css/admin/admin.css')) !!}
@endsection

@section('body')
@if (count($errors) > 0)
	<div class="dashboard-content">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    </div>
@endif


<div class="dashboard-content">
	<div class="form">
		{!! Form::open(["enctype"=>"multipart/form-data"]) !!}
		<div class="form-group">
			{!! Form::label('name','Product Name') !!}
			{!! Form::text('name', $product->product_name) !!}
		</div>
		<div class="form-group">
			{!! Form::label('brand','Brand') !!}
			{!! Form::text('brand', $product->manufacturer) !!}
		</div>
		<div class="form-group">
			{!! Form::label('price','Price') !!}
			{!! Form::text('price', sprintf("%.2f",$product->price/100)) !!}
		</div>
		<div class="form-group">
			{!! Form::label('description','Product Description') !!}
			{!! Form::textarea('description', $product->product_description, ['rows'=>'5','cols'=>'250']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('category','Product Category') !!}
			{!! Form::select('category',$category, $product->category_id) !!}
		</div>
		<div class="form-group">
			{!! Form::label('image','Upload Image') !!}
			{!! Form::file('image') !!}
		</div>
		<div class="form-group">
			{!! form::submit('Create',['class'=>'btn btn-submit']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection