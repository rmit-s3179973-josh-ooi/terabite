@extends('layout')

@section('css')

<<<<<<< HEAD
	{!! Html::style(asset('css/website/nav.css')) !!}
	{!! Html::style(asset('css/website/register.css')) !!}
=======
	{!! Html::style(asset('css/website/form.css')) !!}
>>>>>>> 19034a4fbce8bcad27280968de71ce1ed0c78971

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
		<div class="main">
			<div id="content2">


				<div class="column content-info" id="border-one">
					<div ><h1 id="subheading"><strong>Already Have An Account?</strong></h1>
						<h6>Log in now to view products tailored for you!</h6></div>
					<a href="{{ route('website.get.login') }}" class="form-control btn btn-primary">Login Now</a>
				</div>


				<div class="column" id="border">
					<div class="heading">Register</div>
					{!! Form::open() !!}
					<div class="group field-sep">
						<label for="">
							Name</label>
						{!! Form::text('name',Input::old('name') !== null ? Input::old('name') : null,['class'=>'form-control name','placeholder'=>'Name']) !!}
					</div>
					<div class="group field-sep">
						<label for="txtUserEmail">
							Email</label>
						{!! Form::email('email',Input::old('email') !== null ? Input::old('email') : null,['class'=>'form-control email','placeholder'=>'Email']) !!}
					</div>
					<div class="group field-sep">
						<label for="txtUserEmail">
							Password</label>
						{!! Form::password('password',['class'=>'form-control password','placeholder'=>'Password']) !!}
					</div>
					<div class="group field-sep">
						<label for="txtUserEmail">
							Confirm Password</label>
						{!! Form::password('password_confirmation',['class'=>'form-control confirm','placeholder'=>'Confirm Password']) !!}
					</div>
					<div class="group field-sep">
						{!! form::submit('Submit',['class'=>'form-control btn btn-primary']) !!}
					</div>
					{!! Form::close() !!}
				</div>


			</div>
		</div>


		</body>
	</div>
@endsection