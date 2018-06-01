(function( $ ){
	$.fn.formSubmit = function(kind) {
		
		$(this).submit(function( evt ){
			evt.preventDefault();
			var url = new URL(window.location.href);
			var data = $(this).serializeObject();
			delete data._token;
			var search = document.location.search.substring(1);
			var decode = '';
			

			if(search != '')
			{	
				var decode = JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}');
				
				if(kind == "filter")
				{
					delete decode["brand[]"];
					delete decode.rating;
				}
				delete decode.page;
				for(var key in data)
				{
					decode[key] = data[key];
				}
				url.search = $.param(decode);
			}else{
				url.search = $.param(data);
			}
			
			console.log(url.href);
			
			window.location.href = url.href;

			return false;
		});
	}
}(jQuery))