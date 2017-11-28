@extends('admin.layout')

@section('title','Orders List')

@section('content')

<div class="col-sm-11">
	<a href="#" class="btn  btn-primary pull-right">New Promotion</a>
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
				<td>{{$promotion->user_id}}</td>
				<td>{{$promotion->delivery_id}}</td>
				<td>{{$promotion->title}}</td>
				<td><img class="img-thumbnail" src="{{$promotion->photo}}" width="50px" alt=""></td>
				<td>{{$promotion->description}}</td>
				<td>${{$promotion->price}}</td>
				<td>
					<a href="{{ route('promotion.show', $promotion->id) }}" class="btn  btn-primary">View</a>
				</td>
				<td>
					<a href="{{ route('promotion.edit', $promotion->id) }}" class="btn  btn-warning">Edit</a>
				</td>
				<td>
					<a href="{{ route('promotion.destroy', $promotion->id) }}" class="btn  btn-danger">Delete</a>
				</td>
			</tr>		
			@endforeach
		</tbody>
	</table>
	{!! $promotions->render() !!}
</div>
@endsection

