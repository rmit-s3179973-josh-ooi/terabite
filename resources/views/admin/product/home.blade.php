@extends('admin/layout')

@section('css')
{!! Html::style(asset('assets/css/admin/admin.css')) !!}
@endsection

@section('body')
<div class="dashboard-content">
	<a href="{{ route('admin.product.get.add')}}" class="btn btn-add btn-primary">Create</a>				
</div>
<div class="dashboard-content">
	<table width="100%">
		<tr>
			<th class="wishlist-col">Product Name</th>
			<th class="wishlist-col">Brand</th>			
			<th class="wishlist-col">edit</th>
			<th class="wishlist-col">delete</th>
		</tr>
	@foreach ($products as $p)
	<tr>
		
		<td class="wishlist-col">{{ $p->product_name }}</td>
		<td class="wishlist-col">{{ $p->manufacturer }}</td>
		<td class="wishlist-col">{!! Html::linkRoute('admin.product.get.edit','edit',['id'=>$p->id]) !!}</td>
		<td class="wishlist-col">delete</td>
	</tr>
	@endforeach
	</table>
</div>
@endsection