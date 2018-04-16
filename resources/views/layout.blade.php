<!DOCTYPE html>
<html lang="en">
<head>
	@section('header')
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	@show

	@yield('css')
	{!! Html::script(asset('assets/js/jquery.min.js')) !!}	
	@yield('js')
</head>
<body>
	<div class="container">		
		@yield('content')
	</div>
	@yield('footer')
</body>
</html>