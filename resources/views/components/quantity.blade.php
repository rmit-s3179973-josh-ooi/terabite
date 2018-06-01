<input type="hidden" value="{{$item['item']->id}}" name="product[{{$item['item']->id}}][id]">
<input type="hidden" value="{{$item['qty']}}" class="number" name="product[{{$item['item']->id}}][quantity]">
<div class="quantity-wrap">
	<div class="decrease">-</div>
	<div class="display">{{$item['qty']}}</div>
	<div class="increase">+</div>
</div>