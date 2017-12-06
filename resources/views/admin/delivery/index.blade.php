@extends('layouts.admin')

@section('title','FoodPlaces List')

@section('content')

<div class="col-sm-12">
	<a href="{{ route('admin.delivery.create') }}" class="btn  btn-primary pull-right">New Delivery</a><hr>
	@include('flash::message')
	<table class="table  table-responsive table-striped table-sm">
		<thead>
			<tr></tr>
				<th>ID</th>
				<th>User</th>
				<th>Category</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Sector</th>
				<th>Logo</th>
				<th>Commune</th>
				<th>City</th>
				<th>Premium</th>
				<th>Published</th>
				<th colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($deliveries as $delivery)
			<tr>
				<td>{{$delivery->id}}</td>
				<td>{{$delivery->user->name}}</td>
				<td>{{$delivery->category_id}}</td>
				<td>{{$delivery->name}}</td>
				<td>{{$delivery->phone}}</td>
				<td>{{$delivery->sector}}</td>
				<td><img class="img-thumbnail" src="{{$delivery->logo}}" width="50px" alt=""></td>
				<td>{{$delivery->commune}}</td>
				<td>{{$delivery->city}}</td>
				<td>{{$delivery->premium}}</td>
				<td>{{$delivery->published}}</td>
				<td>
					<a href="{{ route('admin.delivery.show', $delivery->id) }}" class="btn  btn-primary">View</a>
				</td>
				<td>
					<a href="{{ route('admin.delivery.edit', $delivery->id) }}" class="btn  btn-warning">Edit</a>
				</td>
				<td>
					<form action="{{ route('admin.delivery.destroy', $delivery->id) }}" method="POST">
						{{csrf_field()}}
						<input type="hidden" name="_method" value="DELETE">
						<button class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>		
			@endforeach
		</tbody>
	</table>
	{!! $deliveries->render() !!}
</div>
@endsection
