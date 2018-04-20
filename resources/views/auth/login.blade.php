@extends('layout')

@section('css')
{!! Html::style(asset('css/website/form.css')) !!}
@endsection
@section('content')
	
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
	<body>
	
	<div class="form-wrap">
	<div class="logincontent">
	<div class="loginheading">
		Login
	</div>

		{!! Form::open() !!}
		<div class="group">	
		<label for="txtUserEmail">
			Email:</label>
		{!! Form::email('email',Input::old('email') !== null ? Input::old('email') : null,['class'=>'','placeholder'=>'Email']) !!}				
		</div>		
		<div class="group">
		<label for="txtPassword">
			Password:</label>
			{!! Form::password('password',['class'=>'','placeholder'=>'Password']) !!}						
		</div>
		<div class="group">
		{!! Form::checkbox('remember',1) !!}
		<label class="check"
                for="chbRemember">Remember me next time</label>
		</div>
		<div class="group">
			<p>Can't remember your password? <a href="{{ route('website-reset-password')}}">Click here</a>.</p>
		</div>
		<div class="group">
			{!! form::submit('Submit',['class'=>'loginbtn']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
	</body>
</div>
@endsection

@section('footer')
<script>
	var nav = new Nav({el:'.header',breakpoint:500,deltaHeight:200});
</script>
@endsection