<!doctype html>
<html>
	<head>
		@extends('layout')
		@include('head')
	</head>
	<body>
		<div class="container">
			<header class="row">
				@include('header')
				@section('header')
			</header>

			<div id="main" class="row">
				@section('content')
			</div>

			<footer class="row">
				@include('footer')
			</footer>
			
			@endsection
			@endsection

		</div>
	</body>
</html>
