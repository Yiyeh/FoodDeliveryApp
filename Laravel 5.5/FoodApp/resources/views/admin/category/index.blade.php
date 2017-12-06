@extends('admin.layout')

@section('title','Categories List')

@section('action','- Category List')

@section('content')

<div class="col-sm-11">
	<a href="{{route('admin.category.create')}}" class="btn  btn-primary pull-right">New Category</a><hr>
	@include('flash::message')
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
					<td width="50px">	
						<a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
					</td>	
					<td width="50px">	
						<form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
							{{csrf_field()}}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
		
			@endforeach
		</tbody>
	</table>

	{!! $categories->render() !!}
</div>			
@endsection

