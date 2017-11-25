@extends('.admin.adminlayout')

@section('title','FoodPlaces List')

@section('content')

<div class="col-sm-11">
	<a href="#" class="btn  btn-primary float-right">New Foodplace</a>
	<table class="table table-striped table-sm">
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
				<td>{{$delivery->user_id}}</td>
				<td>{{$delivery->category}}</td>
				<td>{{$delivery->name}}</td>
				<td>{{$delivery->phone}}</td>
				<td>{{$delivery->sector}}</td>
				<td><img class="img-thumbnail" src="{{$delivery->logo}}" width="50px" alt=""></td>
				<td>{{$delivery->commune}}</td>
				<td>{{$delivery->city}}</td>
				<td>{{$delivery->premium}}</td>
				<td>{{$delivery->published}}</td>
				<td>
					<a href="{{ route('delivery.show', $delivery->id) }}" class="btn  btn-primary">View</a>
				</td>
				<td>
					<a href="{{ route('delivery.edit', $delivery->id) }}" class="btn  btn-warning">Edit</a>
				</td>
				<td>
					<a href="{{ route('delivery.destroy', $delivery->id) }}" class="btn  btn-danger">Delete</a>
				</td>
			</tr>		
			@endforeach
		</tbody>
	</table>
	{!! $deliveries->render() !!}
</div>
@endsection
