
	@for($i= 1; $i <= 5; $i++)
	
		@if($i<= $rating)
			<i class="filled">							
		@else
			<i class="clear">
		@endif
		★</i>
	@endfor				
