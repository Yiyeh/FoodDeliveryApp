@extends('layouts.admin')

@section('title','Create Category')

@section('action','- Create Category')

@section('content')

<div class="container">

	<div class="col-sm-11">
		<a href="{{route('admin.category.index')}}" class="btn  btn-info pull-right">Show List</a> <br><br><br>

		@include('layouts._errors')
	
		{!! Form::open(['route' => ['admin.category.store']]) !!}
	
		<div class="form-group">
			{!! Form::label('name', 'Nombre', ['class' => 'pull-left']) !!}
			{!! Form::text('name', null, [ 'class' => 'form-control']) !!}	
		</div>

		
	
		<div class="form-group">
			{!! Form::submit('Enviar', [ 'class' => 'btn btn-primary']) !!}	
		</div>
	
	
		{!! Form::close() !!}
	</div>
</div>			
@endsection

