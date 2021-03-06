@extends('layouts.admin')

@section('title','Orders List')

@section('content')

<div class="col-sm-12">
	<a href="#" class="btn  btn-primary pull-right">New FanPage</a><hr>
	<table class="table table-striped table-sm">
		<thead>
			<tr></tr>
				<th>ID</th>
				<th>User</th>
				<th>Delivery</th>
				<th>url</th>
				<th colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($fanpages as $fanpage)
			<tr>
				<td>{{$fanpage->id}}</td>
				<td>{{$fanpage->user_id}}</td>
				<td>{{$fanpage->delivery_id}}</td>
				<td>{{$fanpage->url}}</td>
				<td>
					<a href="{{ route('admin.fanpage.show', $fanpage->id) }}" class="btn  btn-primary">View</a>
				</td>
				<td>
					<a href="{{ route('admin.fanpage.edit', $fanpage->id) }}" class="btn  btn-warning">Edit</a>
				</td>
				<td>
					<a href="{{ route('admin.fanpage.destroy', $fanpage->id) }}" class="btn  btn-danger">Delete</a>
				</td>
			</tr>		
			@endforeach
		</tbody>
	</table>
	{!! $fanpages->render() !!}
</div>
@endsection