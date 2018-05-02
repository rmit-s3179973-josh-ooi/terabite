@extends('layout')

@section('css')
	{!! Html::style(asset('css/website/nav.css')) !!}
	{!! Html::style(asset('css/website/login.css')) !!}
@endsection
@section('content')

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

	{{--<div class="form-wrap">--}}
	{{--<div class="logincontent">--}}




	<div class="main">
		<div id="content1">
			<div class="column" id="border">
				<div class="heading">Login</div>
				{!! Form::open() !!}
				<div class="group field-sep">
					<div for="txtUserEmail">Email</div>
					{!! Form::email('email', Input::old('email') !== null ? Input::old('email') : null,['class'=>'form-control','placeholder'=>'Email']) !!}
				</div>
				<div class="group field-sep">
					<div for="txtPassword">Password</div>
					{!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
				</div>
				<div class="group field-sep">
					{!! Form::checkbox('remember',1) !!}
					<label class="check"
						   for="chbRemember">Remember me</label>
				</div>
				<div class="group content-info-check">
					<p><a class="content-info-check1" href="{{ route('website.get.reset-password')}}">Forgot password?</a></p>
				</div>
				<div class="group  field-sep">
					{!! Form::submit('LOGIN',['class'=>'form-control btn btn-primary','id'=>'sub-content']) !!}
				</div>
				{!! Form::close() !!}
			</div>

			<div id="content2">
				<div class="column content-info" id="border-one">
					<div><h1 id="subheading"><strong>Don't Have An Account yet?</strong></h1>
						<h6 id="sub-content">Register now to enjoy the best deals on the internet.</h6></div>
					<a  href="{{ route('website.get.register') }}" class="form-control btn btn-primary id="sub-content">Sign Up Now</a>
				</div>
			</div>

		</div>
	</div>

	{{--</div>--}}
	{{--</div>--}}
	</body>
	</div>
@endsection

@section('footer')
	<script>
        var nav = new Nav({el:'.header',breakpoint:500,deltaHeight:200});
	</script>
@endsection