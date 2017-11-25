@extends('admin.adminlayout')

@section('title','Categories List')




@section('nav')
	<div class="row">
	  <div class="col-sm-1">
	    <ul class="nav flex-column">
	      <li class="nav-item">
	        <a class="nav-link active" href="#">Active</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Link</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Link</a>
	      </li>
	      <li classa="nav-item">
	        <a class="nav-link disabled" href="#">Disabled</a>
	      </li>
	    </ul>
	  </div>
@endsection


@section('content')

<div class="col-sm-11">
	<a href="#" class="btn  btn-primary float-right">New Category</a>
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
						<a href="{{ route('categories.edit', $category->id) }}" class="btn  btn-warning">Edit</a>
					</td>
					<td>
						<a href="{{ route('categories.destroy', $category->id) }}" class="btn  btn-danger">Delete</a>
					</td>
				</tr>
		
			@endforeach
		</tbody>
	</table>

	{!! $categories->render() !!}
</div>			
@endsection


</div>