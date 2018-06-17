(function( $ ){

$.fn.search = function() {

	$(this).submit(function(evt){
		evt.preventDefault();
		var data = $(evt.currentTarget).serialize();
		var url = $(evt.currentTarget).attr('action');
		
		window.location.href = url +'?'+ data;

	});
}
}( jQuery ))