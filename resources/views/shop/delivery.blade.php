@extends('layout')

@section('content')
{!! Form::open() !!}

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
	
	<div class="column" id="border">
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
	@endif
	<a class="btn" href="{{route('checkout.get.add.address') }}">Add New Address</a>
	</div>
	
	

<div class="column" id="border">
		<table>
			
		
		@foreach ($deliveryOptions as $delOpt)
		<tr>
		<td>
		{!! Form::radio('delivery_option', $delOpt->id, ['class'=>'form-control btn btn-primary']) !!}
		{{$delOpt->delivery_type}}
		</td>
		<td>{{$delOpt->cost}}</td>
		</tr>
		@endforeach
		</table>
	</div>
	{!! Form::submit('Submit',['class'=>'form-control btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection