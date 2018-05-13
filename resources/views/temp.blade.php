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
	<div class="group field-sep">
		<div for="txtUserEmail">Address line 1</div>
		{!! Form::text('address_line_one', Input::old('address_line_one') !== null ? Input::old('address_line_one') : null,['class'=>'form-control','placeholder'=>'address line 1']) !!}
	</div>
	<div class="group field-sep">
		<div for="txtUserEmail">Address line 2</div>
		{!! Form::email('address_line_two', Input::old('address_line_two') !== null ? Input::old('address_line_two') : null,['class'=>'form-control','placeholder'=>'address line 2']) !!}
	</div>
	<div class="group field-sep">
		<div for="txtPassword">Postcode</div>
		{!! Form::text('postcode', Input::old('postcode') !== null ? Input::old('postcode') : null,['class'=>'form-control','placeholder'=>'Postcode']) !!}
	</div>
	<div class="group field-sep">
		<div for="txtUserEmail">Suburb</div>
		{!! Form::text('suburb', Input::old('suburb') !== null ? Input::old('suburb') : null,['class'=>'form-control','placeholder'=>'suburb']) !!}
	</div>
	<div class="group field-sep">
		<div for="txtUserEmail">State</div>
		{!! Form::text('state', Input::old('state') !== null ? Input::old('state') : null,['class'=>'form-control','placeholder'=>'State']) !!}
	</div>
	<div class="group field-sep">
		<div for="txtUserEmail">Country</div>
		{!! Form::text('country',"Australia",['class'=>'form-control','hidden']) !!}
		{!! Form::label('country',"Australia",['class'=>'form-control',]) !!}
	</div>	
	<div class="group content-info field-sep">
		{!! Form::submit('Submit',['class'=>'form-control btn btn-primary']) !!}
	</div>
	</div>
	{!! Form::close() !!}
@endsection