<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ env("APP_NAME") }} - @yield('name')</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/website/nav.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	@show

	@yield('css')
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  
	@yield('js')
</head>
<body>			
	<div class="container">
		<div class="dashboard">
			<div class="dashboard-item sidebar">
				@include('admin.partials.sidebar')
			</div>
			<div class="dashboard-item body">
				<h1>@yield('dashboardtitle'){{ $title }}</h1>
				@yield('body')		
			</div>
		</div>
	</div>	
	@yield('footer')
</body>
</html>