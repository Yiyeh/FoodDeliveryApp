@extends('admin.layout')

@section('title','Categories List')

@section('content')

<div class="col-sm-11">
	<a href="#" class="btn  btn-primary pull-right">New Category</a>
	<table class="table table-striped table-sm">
		<thead>
			<tr></tr>
				<th>ID</th>
				<th>Name</th>
				<th>Slug</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>{{$category->slug}}</td>
					<td>
						<a href="{{ route('category.edit', $category->id) }}" class="btn  btn-warning">Edit</a>
					</td>
					<td>
						<a href="{{ route('category.destroy', $category->id) }}" class="btn  btn-danger">Delete</a>
					</td>
				</tr>
		
			@endforeach
		</tbody>
	</table>

	{!! $categories->render() !!}
</div>			
@endsection
