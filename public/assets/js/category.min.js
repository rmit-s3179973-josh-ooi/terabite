(function( $ ){

$.fn.categorise = function() {
	this.input = $(this).find("input[type=checkbox]");
	var count = $(this).find(".count");
	this.count = 0;
	var self = this;

	$(this.input).click(function(evt) {		
		var c = $(evt.currentTarget).prop("checked");
		console.log(c);
		if($(evt.currentTarget).prop("checked")){
			$(evt.currentTarget).val(++self.count);			
			$(evt.currentTarget).parent().find(".count").html(self.count);
			
		}else{
			$(evt.currentTarget).val(0);
			self.count--;
					
		}	
		$(evt.currentTarget).toggleClass("hide");		
		$(evt.currentTarget).parent().find(".count").toggleClass("hide");
	});

	$(count).click(function(evt) {
		var input = $(evt.currentTarget).parent().find("input[type=checkbox]");
		self.validateInput(parseInt($(input).val()));
		$(evt.currentTarget).parent().find("input[type=checkbox]").click();
	});	

	this.validateInput = function(value){		
		for(var i = 0; i < self.input.length;i++)
		{			
			var val = $(self.input[i]).val();
			if(val > 0 && val > value)
			{								
				$(self.input[i]).val(--val);
				$(self.input[i]).parent().find('.count').html(val);
			}
		}
	}

}
}(jQuery))