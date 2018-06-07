@extends('layout')

@section('css')
	{!! Html::style(asset('assets/css/auth.css')) !!}
	
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
	
	<div class="auth-wrap">
		<div class="left">
			<div class="form-wrap">
			@yield('auth_left')
			</div>
		</div>
		<div class="right">
			<div class="form-wrap">
			@yield('auth_right')
			</div>
		</div>
	</div>


@endsection
