@extends('layout')

@section('css')
{!! Html::style(asset('assets/css/website/form.css')) !!}
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
	<div class="form-wrap">
		{!! Form::open() !!}
		<div class="form-group">	
		{!! Form::email('email',Input::old('email') !== null ? Input::old('email') : null,['class'=>'input','placeholder'=>'Email']) !!}				
		</div>		
		<div class="form-group">
			{!! Form::password('password',['class'=>'input','placeholder'=>'Password']) !!}						
		</div>
		<div class="form-group">
		{!! Form::checkbox('remember',1) !!}
		{!! Form::label('remember','Remember Me') !!}
		</div>
		<div class="form-group reset">
			<p>Can't remember your password? <a href="#">Click here</a>.</p>
		</div>
		<div class="form-group">
			{!! form::submit('Submit',['class'=>'btn btn-submit']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection

@section('footer')
<script>
	var nav = new Nav({el:'.header',breakpoint:500,deltaHeight:200});
</script>
@endsection