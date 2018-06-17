(function( $, Handlebars ){

$.fn.addToCart = function(options) {
	var self = this;
	self.option = options;
	self.inst = $('[data-remodal-id=modal]').remodal();
	self.source   = document.getElementById("entry-template").innerHTML;
	self.template = Handlebars.compile(self.source);
	self.xhr = new XMLHttpRequest();

	$(this).click(function(evt) {
		evt.preventDefault();
		
		var url = $(evt.currentTarget).attr("href");

		if(typeof self.option.hasQty != 'undefined')
		{
			url += "?qty="+$(self.option.input).val();
		}
		console.log(url);
		self.xhr.open("GET",url, true);
		self.xhr.onload = function() {
			if(self.xhr.status == 200)
			{
				var resp = JSON.parse(self.xhr.response);
				console.log(resp.product);
				var html = self.template(resp.product);
				$('[data-remodal-id=modal]').html(html);
				self.inst.open();
				$(".cart-amount").html(resp.cart);
			}
		}	
		
		self.xhr.send();
		

	});
}
}(jQuery, Handlebars))