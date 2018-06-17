<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ env("APP_NAME") }} - @yield('name')</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/website/nav.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	{!! Html::style(asset('assets/ext/remodal/remodal.css')) !!}
	{!! Html::style(asset('assets/ext/remodal/remodal-default-theme.css')) !!}
	@show

	@yield('css')
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  
	@yield('js')
</head>
<body>		
	@if(session('error'))
		<div class="flash flash-error">
			{{ session('error')}}
		</div>
	@endif
	
	@include('inc.navbar')	
	<div class="content">
		<div class="container">
			
			@yield('content')
			
		</div>
	</div>	
	<div class="remodal-bg">
	</div>	
	<div class="remodal" data-remodal-id="modal">
	  </div>
	@include('footer')	
	{!! Html::script(asset('assets/ext/handlebarsjs/handlebars-v4.0.11.js')) !!}
  	{!! Html::script(asset('assets/ext/remodal/remodal.min.js')) !!}
  	{!! Html::script(asset('assets/js/search.min.js')) !!}
	<script id="entry-template" type="text/x-handlebars-template">
	  
	  	<button data-remodal-action="close" class="remodal-close"></button>
	  	<div class="wrap">
			<h2>Product Added To Cart</h2>
			<div class="img-wrap">
				<img src="@{{image}}" alt="">
			</div>
			<div class="text">
				@{{product_name}}
			</div>
	  	</div>	    
	    <div class="body">
	    	<a class="btn-checkout" href="{{ route('cart.get.view') }}">Checkout</a>
	    	<a data-remodal-action="cancel" class="remodal-cancel">Continue Shopping</a>
	      
	    </div>	  
	</script>
	<script>
		$('#search-form').search();
	</script>
	@yield('footer')
</body>
</html>