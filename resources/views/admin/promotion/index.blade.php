@extends('admin.layout')

@section('title','Orders List')

@section('content')

<div class="col-sm-12">
	<a href="{{ route('admin.promotion.create') }}" class="btn  btn-primary pull-right">New Promotion</a><hr>
	@include('flash::message')
	<table class="table table-striped table-sm">
		<thead>
			<tr></tr>
				<th>ID</th>
				<th>User</th>
				<th>Delivery</th>
				<th>Title</th>
				<th>Photo</th>
				<th>Description</th>
				<th>Price</th>
				<th colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($promotions as $promotion)
			<tr>
				<td>{{$promotion->id}}</td>
				<td>{{$promotion->user->name}}</td>
				<td>{{$promotion->delivery_id}}</td>
				<td>{{$promotion->title}}</td>
				<td><img class="img-thumbnail" src="{{$promotion->photo}}" width="50px" alt=""></td>
				<td>{{$promotion->description}}</td>
				<td>${{$promotion->price}}</td>
				<td>
					<a href="{{ route('admin.promotion.show', $promotion->id) }}" class="btn  btn-primary">View</a>
				</td>
				<td>
					<a href="{{ route('admin.promotion.edit', $promotion->id) }}" class="btn  btn-warning">Edit</a>
				</td>
				<td>
					<form action="{{ route('admin.promotion.destroy', $promotion->id) }}" method="POST">
						{{csrf_field()}}
						<input type="hidden" name="_method" value="DELETE">
						<button class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>		
			@endforeach
		</tbody>
	</table>
	{!! $promotions->render() !!}
</div>
@endsection

