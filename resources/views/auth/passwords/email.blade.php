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
		<div class="main">
			<div id="content3">

				<div  id="border-two">
					<div class="heading">Reset Password</div>
			{!! Form::open() !!}

		<div class="group field-sep-one">
			<label for="">
				Email</label>
			{!! Form::email('email',Input::old('email') !== null ? Input::old('email') : null,['class'=>'form-control email','placeholder'=>'Email']) !!}
		</div>
		<div class="group field-sep-one">
			{!! form::submit('Submit',['class'=>'form-control btn btn-primary']) !!}
		</div>
		{!! Form::close() !!}
				</div>
	</div>
	</div>

</div>
@endsection