@extends('admin/layout')

@section('css')
{!! Html::style(asset('assets/css/admin/admin.css')) !!}
@endsection

@section('body')
<div class="dashboard-content">
	<a href="{{ route('admin.category.get.add')}}" class="btn btn-add btn-primary">Create</a>				
</div>
<div class="dashboard-content">
	<table width="100%">
		<tr>
			<th class="wishlist-col">Category Name</th>			
			<th class="wishlist-col">edit</th>
			<th class="wishlist-col">delete</th>
		</tr>
	@foreach ($categories as $c)
	<tr>
		
		<td class="wishlist-col">{{ $c->category_name }}</td>		
		<td class="wishlist-col">{!! Html::linkRoute('admin.category.get.edit','edit',['id'=>$c->id]) !!}</td>
		<td class="wishlist-col">{!! Html::linkRoute('admin.category.get.delete','delete',['id'=>$c->id]) !!}</td>
	</tr>
	@endforeach
	</table>
</div>
@endsection