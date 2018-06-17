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
			{!! Form::label('category_name','Category Name') !!}
			{!! Form::text('category_name', Input::old('category_name') !== null ? Input::old('category_name') : null) !!}
		</div>		
		<div class="form-group">
			{!! form::submit('Create',['class'=>'btn btn-submit']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection