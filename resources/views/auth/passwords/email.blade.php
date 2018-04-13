@extends('layout')

@section('content')
<div class="wrap">
	
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
	<div class="form-wrap">
		{!! Form::open() !!}
		
		<div class="form-group">		
			{!! Form::email('email',Input::old('email') !== null ? Input::old('email') : null,['class'=>'input','placeholder'=>'Email']) !!}
		</div>
		<div class="form-group">
			{!! form::submit('Submit',['class'=>'btn btn-submit']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection