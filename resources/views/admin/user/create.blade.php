@extends('layouts.admin')

@section('title','Create User')

@section('action','- Create User')

@section('content')

<div class="container">

	<div class="col-sm-11">
		<a href="{{route('admin.user.index')}}" class="btn  btn-info pull-right">Show List</a> <br><br><br>

		@include('layouts._errors')
	
		{!! Form::open(['route' => ['admin.user.store']]) !!}
	
		<div class="form-group">
			{!! Form::label('name', 'Nombre', ['class' => 'pull-left']) !!}
			{!! Form::text('name', null, [ 'class' => 'form-control', 'placeholder' => 'Nombre']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('email', 'E-mail', ['class' => 'pull-left']) !!}
			{!! Form::email('email', null, [ 'class' => 'form-control', 'placeholder' => 'Email@example.com']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña', ['class' => 'pull-left']) !!}
			{!! Form::password('password', [ 'class' => 'form-control', 'placeholder' => '*********']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('premium', 'Dias Premium', ['class' => 'pull-left']) !!}
			{!! Form::number('premium', null, [ 'class' => 'form-control', 'placeholder' => '0']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Acceso', ['class' => 'pull-left']) !!}
			{!! Form::select('type', ['MEMBER' => 'Miembro', 'ADMIN' => 'Administrador'], null, [ 'class' => 'form-control', 'placeholder' => 'Elija un tipo']) !!}	
		</div>
		
		<div class="form-group">
			{!! Form::submit('Enviar', [ 'class' => 'btn btn-primary']) !!}	
		</div>
	
		
		{!! Form::close() !!}
	</div>
</div>			
@endsection

