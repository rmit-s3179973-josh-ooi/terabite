@extends('auth/auth')

@section('auth_right')
	<div class="login-wrap border">
	<h1>Register</h1>
	{!! Form::open() !!}
	<div class="input-wrap">
		<label class="fw-label" for="">Name</label>
		{!! Form::text('name', Input::old('name') !== null ? Input::old('name') : null,['class'=>'form-control','placeholder'=>'name']) !!}
	</div>
	<div class="input-wrap">
		<label class="fw-label" for="">Email</label>
		{!! Form::email('email', Input::old('email') !== null ? Input::old('email') : null,['class'=>'form-control','placeholder'=>'Email']) !!}
	</div>
	<div class="input-wrap">
		<label class="fw-label" for="">Password</label>
		{!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
	</div>	
	<div class="input-wrap">
		<label class="fw-label" for="">Re-enter Password</label>
		{!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Password']) !!}
	</div>
	<div class="input-wrap">
		{!! Form::submit('LOGIN',['class'=>'btn btn-primary','id'=>'sub-content']) !!}
		<a href="{{route('website.get.reset.password') }}"></a>
	</div>
	{!! Form::close() !!}
	</div>
@endsection

	



@section('auth_left')
	<div class="login-wrap text-center cta-wrap">
		<h1>Already Have<br/> An Account?</h1>
		<p>Log in now to view products tailored for you!</p>
		<a href="{{ route('website.get.login') }}">Login Now</a>
	</div>
@endsection