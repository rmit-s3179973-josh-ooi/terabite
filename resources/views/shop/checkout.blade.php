@extends('layout')

@section('css')
{!! Html::style(asset('assets/css/checkout.css')) !!}
@endsection
@section('content')
<div class="heading-wrap">
	<h1>Checkout</h1>	
</div>
@if (count($errors) > 0)
		<div class="error-wrap">
			<div class="errors">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	@endif
{!! Form::open() !!}
<div class="checkout-wrap">
	<div class="left">
		<div class="address-wrap">
			<h3>Shipping Address</h3>
			@if($user->address->count() != 0)	
			<table>
				@foreach ($user->address as $address)
				<tr>
				<td>
				{!! Form::radio('address_option', $address->id, ['class'=>'form-control btn btn-primary']) !!}		
				</td>
				<td>{{$address->address_line_one}} {{$address->address_line_two}} {{$address->postcode}}</td>
				</tr>
				@endforeach
			</table>
			@else
			<div class="box empty">
				Address not found
			</div>
			@endif
			<div class="btn-wrap">
			<a class="btn" href="{{route('checkout.get.add.address') }}">Add New Address</a>
			</div>
		</div>
		<div class="shipping-wrap">
			<h3>Shipping Method</h3>
			
				@foreach ($deliveryOptions as $delOpt)
				<div class="box shipping-item">
					<span>
						{!! Form::radio('delivery_option', $delOpt->id, $loop->last ? true: false, ['class'=>'form-control delivery-input','data-amount'=>'$delOpt->cost']) !!}
					</span>
					<span>
					{{$delOpt->delivery_type}} Delivery
					</span>
					<span>
						AUD {{$delOpt->cost}}
					</span>
				</div>
				@endforeach
			</table>
		</div>
		<div class="payment-wrap">
			<h3>Payment Details</h3>
			<div class="box">
				<div class="input-wrap">
					<label for="">Credit Cart Number</label>
					{!! Form::text('payment.number', null,['class'=>'form-control name']) !!}
				</div>
				<div class="input-wrap">
					<label for="">Cardholder Name</label>
					{!! Form::text('payment.name', null, ['class'=>'form-control']) !!}
				</div>
				<div class="input-wrap half">
					<label for="">Expiry Date</label>
					{!! Form::text('payment.expiry', null, ['class'=>'form-control']) !!}
				</div>
				<div class="input-wrap half">
					<label for="">CVC</label>
					{!! Form::password('payment.cvc', null, ['class'=>'form-control']) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="right">
		<div class="box">
			<div class="cart-detail-wrap">
				@foreach($cart->items as $c)
					<div class="cart-item">
						<span class="left-col">
							{{$c['qty']}} X {{$c['item']->product_name}}
						</span>
						<span class="right-col">
							AUD {{$c['price']/100 }}
						</span>
					</div>
				@endforeach				
			</div>
			<div class="cart-summary-wrap">
				<div class="cart-item">
					<span class="left-col">
						Subtotal
					</span>
					<span class="right-col">
						AUD {{$cart->totalPrice/100 }}
					</span>
				</div>
				<div class="cart-item">
					<span class="left-col">
						Delivery Fee
					</span>
					<span class="right-col" id="delivery-display">
						AUD {{$cart->totalPrice/100 }}
					</span>
				</div>
			</div>
			<div class="total-wrap">
				<div class="cart-item">
					<span class="left-col">
						Total
					</span>
					<span class="right-col" id="total">
						AUD {{$cart->totalPrice/100 }}
					</span>
				</div>
			</div>
			<div class="btn-wrap">
				{!! Form::submit('Complete Purchase',['class'=>'form-control btn btn-checkout']) !!}
			</div>
		</div>
	</div>
</div>
	{!! Form::close() !!}
@endsection


@section('footer')
<script>
	var delivery_cost = {
		@foreach ($deliveryOptions as $delOpt)

		{{$delOpt->id}} : {{$delOpt->cost}}@if(!$loop->last),@endif
		

		@endforeach
	};
	var total = {{$cart->totalPrice}};

	$(document).ready(function(){
		var val = $('input[type=radio][name=delivery_option][checked]').val();
		$('#delivery-display').html("AUD" + delivery_cost[val] + ".00");
		var output = (delivery_cost[val]* 100 + total)/100;
		$("#total").html("AUD" +output);
	});
	$('input[type=radio][name=delivery_option]').change(function(evt){
		var val = $(this).val();		
		$('#delivery-display').html("AUD" + delivery_cost[val] + ".00");		
		var output = (delivery_cost[val]* 100 + total)/100;
		$("#total").html("AUD" +output);

	})
</script>
@endsection