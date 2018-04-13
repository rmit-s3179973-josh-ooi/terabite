@extends('layout')

@section('head')

{!! Html::style(asset('assets/css/website/form.css'))!!}
@endsection

@section('content')
<div class="wrap">
	
	@if (count($errors) > 0)
	<div class="error-wrap">
		<div class="errors">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>			    
		</div>
	</div>
	@endif
	<div class="form-wrap">
		{!! Form::open() !!}
		<div class="form-group">	
		{!! Form::text('name',Input::old('name') !== null ? Input::old('name') : null,['class'=>'input newClass','placeholder'=>'Name']) !!}				
		</div>
		<div class="form-group">		
			{!! Form::email('email',Input::old('email') !== null ? Input::old('email') : null,['class'=>'input','placeholder'=>'Email']) !!}
		</div>
		<div class="form-group">
			{!! Form::password('password',['class'=>'input','placeholder'=>'Password']) !!}			
		</div>
		<div class="form-group">
			{!! Form::password('password_confirmation',['class'=>'input','placeholder'=>'Confirm Password']) !!}
		</div>
		<div class="form-group">
			{!! form::submit('Submit',['class'=>'btn btn-submit']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection