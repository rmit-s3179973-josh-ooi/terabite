(function( $ ){

	$.fn.quantity = function(opt) {
		var self = this;
		
		this.option = {
			increment 	: '.increase',
			decrement	: '.decrease',
			output		: '.display',
			input		: '.number'
		};
		this.option = $.extend({},this.option,opt);

		this.input = $(this).find(this.option.input);
		this.increment = $(this).find(this.option.increment);
		this.decrement = $(this).find(this.option.decrement);
		this.output = $(this).find(this.option.output);
		if(this.input.length == 0)
		{
			throw new Error("input DOM not found");
		}
		if(this.increment.length == 0)
		{
			throw new Error("increment DOM not found");
		}
		if(this.decrement.length == 0)
		{
			throw new Error("decrement DOM not found");
		}
		if(this.output.length == 0)
		{
			throw new Error("output DOM not found");
		}
		
		this.currentVal = parseInt($(this.input).val());
		
		
		$(this.increment).click(function(evt){			
			self.currentVal += 1;
			$(self.input).val(self.currentVal);
			$(self.output).html(self.currentVal);
		})

		$(this.decrement).click(function(evt){

			if(self.currentVal > 1)
				self.currentVal -= 1;
			$(self.input).val(self.currentVal);
			$(self.output).html(self.currentVal);
		})
	}
}(jQuery))