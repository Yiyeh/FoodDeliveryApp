@extends('admin.layout')

@section('title','User List')

@section('content')

<div class="col-sm-12">
	<a href="{{ route('user.create') }}" class="btn  btn-primary pull-right">New User</a>
	@include('flash::message')
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
					<a href="{{ route('user.show', $user->id) }}" class="btn  btn-primary">View</a>
				</td>
				<td>
					<a href="{{ route('user.edit', $user->id) }}" class="btn  btn-warning">Edit</a>
				</td>
				<td width="50px">	
					<form action="{{ route('user.destroy', $user->id) }}" method="POST">
						{{csrf_field()}}
						<input type="hidden" name="_method" value="DELETE">
						<button class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
</div>			
@endsection
			
		

