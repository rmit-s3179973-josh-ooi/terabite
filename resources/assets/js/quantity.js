(function( $ ){

	var quantity = function(opt) {
		var self = this;
		
		this.option = {
			increment 	: '.increase',
			decrement	: '.decrease',
			output		: '.display',
			input		: '.number'
		};
		this.option = $.extend({},this.option,opt);
		
		this.increment = $(this.option.increment);
		this.decrement = $(this.option.decrement);		
		
		if(this.increment.length == 0)
		{
			throw new Error("increment DOM not found");
		}
		if(this.decrement.length == 0)
		{
			throw new Error("decrement DOM not found");
		}		
		
		
		
		
		this.increment.click(function(evt){						
			var parent = $(evt.currentTarget).closest(".quantity");
			var input =$(parent).find(self.option.input);					
			var output = $(parent).find(self.option.output);
			var val =  parseInt($(input).val()) + 1;			
			$(input).val(val);	
			$(output).html(val);
			// $(self.input).val(self.currentVal);
			// $(self.output).html(self.currentVal);
		})

		$(this.decrement).click(function(evt){

			var parent = $(evt.currentTarget).closest(".quantity");
			var input =$(parent).find(self.option.input);					
			var output = $(parent).find(self.option.output);
			var val =  parseInt($(input).val()) - 1;			
			$(input).val(val);	
			$(output).html(val);
		})
	}

	window.Quantity = quantity;
}(jQuery))