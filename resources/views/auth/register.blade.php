@extends('layout')

@section('css')

{!! Html::style(asset('css/website/form.css')) !!}

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

	<body>
	   
	<div class="wrapper">
	<div class="registercontent">	
	<div class="registerheading">
	Register
	</div>
		{!! Form::open() !!}
		<div class="group">	
		<label for="">
			Email:</label>
		{!! Form::text('name',Input::old('name') !== null ? Input::old('name') : null,['class'=>'name','placeholder'=>'Name']) !!}				
		</div>
		<div class="group">	
		<label for="txtUserEmail">
			Email:</label>
			{!! Form::email('email',Input::old('email') !== null ? Input::old('email') : null,['class'=>'email','placeholder'=>'Email']) !!}
		</div>
		<div class="group">
		<label for="txtUserEmail">
			Email:</label>
			{!! Form::password('password',['class'=>'password','placeholder'=>'Password']) !!}			
		</div>
		<div class="group">
		<label for="txtUserEmail">
			Email:</label>
			{!! Form::password('password_confirmation',['class'=>'confirm','placeholder'=>'Confirm Password']) !!}
		</div>
		<div class="group">
			{!! form::submit('Submit',['class'=>'registerbtn']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
	</body>
</div>
@endsection