@extends('layout')

@section('content')
{{$product->product_name}}

{!! Form::open() !!}
@for($i = 1; $i <= 5; $i++)
{!! Form::radio('rating', $i,['class'=>'form-control name']) !!} {{$i}}
@endfor
{!! Form::textarea('review', null,['class'=>'form-control name']) !!}
{!! Form::submit('Submit',['class'=>'form-control btn btn-primary']) !!}

{!! Form::close() !!}
@endsection