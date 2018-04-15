@extends('layout')

@section('css')

{!! Html::style(asset('css/website/form.css')) !!}

@endsection

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
	<div class="wrapper">
	<div class="emailcontent">
		{!! Form::open() !!}
		<label for="">
			Email:</label>
		<div class="group">		
			{!! Form::email('email',Input::old('email') !== null ? Input::old('email') : null,['class'=>'email','placeholder'=>'Email']) !!}
		</div>
		<div class="group">
			{!! form::submit('Submit',['class'=>'emailbtn']) !!}
		</div>
		{!! Form::close() !!}
	</div>
	</div>

</div>
@endsection