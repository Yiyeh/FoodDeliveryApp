@extends('admin.layout')

@section('title','Orders List')

@section('content')

<div class="col-sm-11">
	<a href="#" class="btn  btn-primary pull-right">New Comment</a>
	<table class="table table-striped table-sm">
		<thead>
			<tr></tr>
				<th>ID</th>
				<th>User</th>
				<th>FoodPlace</th>
				<th>Comment</th>
				<th>Score</th>
				<th colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($comments as $comment)
			<tr>
				<td>{{$comment->id}}</td>
				<td>{{$comment->user_id}}</td>
				<td>{{$comment->foodplace_id}}</td>
				<td>{{$comment->comment}}</td>
				<td>{{$comment->score}}</td>
				<td>
					<a href="{{ route('comment.show', $comment->id) }}" class="btn  btn-primary">View</a>
				</td>
				<td>
					<a href="{{ route('comment.edit', $comment->id) }}" class="btn  btn-warning">Edit</a>
				</td>
				<td>
					<a href="{{ route('comment.destroy', $comment->id) }}" class="btn  btn-danger">Delete</a>
				</td>
			</tr>		
			@endforeach
		</tbody>
	</table>
	{!! $comments->render() !!}
</div>
@endsection

