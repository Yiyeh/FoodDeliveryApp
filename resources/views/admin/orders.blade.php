@extends('.admin.adminlayout')

@section('title','Orders List')

@section('content')

<div class="col-sm-12">
	<a href="#" class="btn  btn-primary float-right">New Order</a>
	<table class="table table-striped table-sm">
		<thead>
			<tr></tr>
				<th>ID</th>
				<th>User</th>
				<th>FoodPlace</th>
				<th>Body</th>
				<th>Phone</th>
				<th>Address</th>
				<th colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orders as $order)
				<tr>
					<td>{{$order->id}}</td>
					<td>{{$order->user_id}}</td>
					<td>{{$order->foodplace_id}}</td>
					<td>{{$order->body}}</td>
					<td>{{$order->phone}}</td>
					<td>{{$order->address}}</td>
					<td>
						<a href="{{ route('orders.show', $order->id) }}" class="btn  btn-primary">View</a>
					</td>
					<td>
						<a href="{{ route('orders.edit', $order->id) }}" class="btn  btn-warning">Edit</a>
					</td>
					<td>
						<a href="{{ route('orders.destroy', $order->id) }}" class="btn  btn-danger">Delete</a>
					</td>
				</tr>
		
	@endforeach
		</tbody>
	</table>

	{!! $orders->render() !!}
</div>

@endsection

