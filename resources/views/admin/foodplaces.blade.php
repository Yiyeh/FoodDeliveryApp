@extends('.admin.adminlayout')

@section('content')

<div class="container">

			<div class="row">
				<div class="col-sm-12">
					<h1 class="display-4 text-center">Admin Panel</h1>
				</div>
			</div>

	<div class="row">
		<div class="col-sm-12">
			<a href="#" class="btn  btn-primary float-right">Crear</a>
		</div>
	</div>


		<div class="col-sm-12">
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
						</tr>
				
			@endforeach
				</tbody>
			</table>
	@endsection
			
		</div>
	</div>
</div>
