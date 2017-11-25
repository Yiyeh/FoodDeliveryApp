@extends('.admin.adminlayout')

@section('title','User List')

@section('content')

<div class="col-sm-12">
	<a href="#" class="btn  btn-primary float-right">New User</a>
	<table class="table table-striped table-sm">
		<thead>
			<tr></tr>
				<th>ID</th>
				<th>Name</th>
				<th>E-Mail</th>
				<th>Premium</th>
				<th>Online</th>
				<th colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->premium}}</td>
					<td>{{$user->online}}</td>
					<td>
						<a href="{{ route('users.show', $user->id) }}" class="btn  btn-primary">View</a>
					</td>
					<td>
						<a href="{{ route('users.edit', $user->id) }}" class="btn  btn-warning">Edit</a>
					</td>
					<td>
						<a href="{{ route('users.destroy', $user->id) }}" class="btn  btn-danger">Delete</a>
					</td>
				</tr>
		
	@endforeach
		</tbody>
	</table>

	{!! $users->render() !!}
</div>
			
@endsection
			
		
