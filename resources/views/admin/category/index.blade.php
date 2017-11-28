@extends('admin.layout')

@section('title','Categories List')

@section('action','- Category List')

@section('content')

<div class="col-sm-11">
	<a href="{{route('category.create')}}" class="btn  btn-primary pull-right">New Category</a>
	<table class="table table-striped table-sm">
		<thead>
			<tr></tr>
				<th>ID</th>
				<th>Name</th>
				<th>Slug</th>
				<th colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>{{$category->slug}}</td>
					<td>
						<a href="{{ route('category.show', $category->id) }}" class="btn  btn-info">View</a>
						<a href="{{ route('category.edit', $category->id) }}" class="btn  btn-warning">Edit</a>
						<a href="{{ route('category.destroy', $category->id) }}" class="btn  btn-danger">Delete</a>
					</td>
				</tr>
		
			@endforeach
		</tbody>
	</table>

	{!! $categories->render() !!}
</div>			
@endsection

