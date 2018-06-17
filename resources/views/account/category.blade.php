@extends('layout')

@section('name')
Pick Your categories @endsection
@section('css')
{!! Html::style(asset('assets/css/category.css')) !!}
@endsection
@section('content')
<div class="category">
	<h1>Pick Your Category</h1>
	{!! Form::open() !!}
	<ul class="category-list-wrap">
		
		@foreach($category as $cat)
		<li class="category-item">
			<span class="checkbox">
				{!! Form::checkbox('category[' .$cat->id .'][]',0) !!}
				<span class="count hide"></span>
			</span>
			<label for="">{{ $cat->category_name }}</label>
		</li>
		@endforeach
	</ul>	
	<div class="btn-wrap">
		{!! Form::submit('submit',['class'=>'btn btn-submit']) !!}
	</div>	
	{!! Form::close() !!}
	

</div>

@endsection

@section('footer')
{!! Html::script(asset('assets/js/category.min.js')) !!}

<script>
	$('.category-item').categorise();
</script>
@endsection