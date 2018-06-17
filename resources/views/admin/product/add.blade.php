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
			{!! Form::text('name', Input::old('name') !== null ? Input::old('name') : null) !!}
		</div>
		<div class="form-group">
			{!! Form::label('brand','Brand') !!}
			{!! Form::text('brand', Input::old('brand') !== null ? Input::old('brand') : null) !!}
		</div>
		<div class="form-group">
			{!! Form::label('price','Price') !!}
			{!! Form::text('price', Input::old('price') !== null ? Input::old('price') : null) !!}
		</div>
		<div class="form-group">
			{!! Form::label('description','Product Description') !!}
			{!! Form::textarea('description', Input::old('description') !== null ? Input::old('description') : null,['rows'=>'5','cols'=>'250']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('category','Product Category') !!}
			{!! Form::select('category',$category) !!}
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