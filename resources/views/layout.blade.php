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
		@include('inc.showcase') <!-- for something else -->
		@endif
		<div class="row">

			<!--  <div class="col-md-2 col-lg-2">
			@include('inc.sidebar')
			</div>
			-->
			<div class="col-md-10 col-lg-10">
				@yield('content')
			</div>
		</div>
	</div>

	@include('footer')
</body>
</html>