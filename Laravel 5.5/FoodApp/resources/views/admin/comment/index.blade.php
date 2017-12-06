@extends('admin.layout')

@section('title','Orders List')

@section('content')

<div class="col-sm-11">
	<a href="{{ route('admin.comment.create') }}" class="btn  btn-primary pull-right">New Comment</a><hr>
	@include('flash::message')
	<table class="table table-striped table-sm">
		<thead>
			<tr></tr>
				<th>ID</th>
				<th>User</th>
				<th>Delivery</th>
				<th>Comment</th>
				<th>Score</th>
				<th colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($comments as $comment)
			<tr>
				<td>{{$comment->id}}</td>
				<td>{{$comment->user->name}}</td>
				<td>{{$comment->delivery_id}}</td>
				<td>{{$comment->comment}}</td>
				<td>{{$comment->score}}</td>
				<td>
					<a href="{{ route('admin.comment.show', $comment->id) }}" class="btn  btn-primary">View</a>
				</td>
				<td>
					<a href="{{ route('admin.comment.edit', $comment->id) }}" class="btn  btn-warning">Edit</a>
				</td>
				<td width="50px">	
						<form action="{{ route('admin.comment.destroy', $comment->id) }}" method="POST">
							{{csrf_field()}}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
			</tr>		
			@endforeach
		</tbody>
	</table>
	{!! $comments->render() !!}
</div>
@endsection

