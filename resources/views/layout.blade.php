<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/website/form.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	@show

	@yield('css')
	{!! Html::script(asset('assets/js/jquery.min.js')) !!}	
	@yield('js')
</head>
<body>		
	@include('inc.navbar')

	<div class="container">
		@if(Request::is('/'))
		@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
			@include('inc.sidebar')
			</div>
		</div>
	</div>

	<footer id="footer" class="text-center">
		<p>copyright 2018 &copy; Terabite</p>
	</footer>
</body>
</html>