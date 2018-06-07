@extends('auth/auth')

@section('auth_left')
	<div class="login-wrap border">
	<h1>Login</h1>
	{!! Form::open() !!}
	<div class="input-wrap">
		<label class="fw-label" for="">Email</label>
		{!! Form::email('email', Input::old('email') !== null ? Input::old('email') : null,['class'=>'form-control','placeholder'=>'Email']) !!}
	</div>
	<div class="input-wrap">
		<label class="fw-label" for="">Password</label>
		{!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
	</div>
	<div class="input-wrap no-margin">
		{!! Form::checkbox('remember',1) !!}
		<label class="checkbox" for="">Remember me</label>		
	</div>
	<div class="input-wrap">
		{!! Form::submit('LOGIN',['class'=>'btn btn-primary','id'=>'sub-content']) !!}
		<a href="{{route('website.get.reset.password') }}"></a>
	</div>
	{!! Form::close() !!}
	</div>
@endsection

	



@section('auth_right')
	<div class="login-wrap text-center cta-wrap">
		<h1>Don't Have<br/> An Account Yet?</h1>
		<p>Register now to enjoy the best deals on the internet.</p>
		<a href="{{ route('website.get.register') }}">Sign Up Now</a>
	</div>
@endsection