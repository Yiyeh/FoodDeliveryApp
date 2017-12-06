@extends('layouts.app')

@section('title','Crear Promoción')

@section('action','- Crear Promoción')

@section('content')

<div class="container">

	<div class="col-sm-11">
		<a href="{{route('user.promotion.index')}}" class="btn  btn-info pull-right">Ver Promociones</a> <br><br><br>

		@include('admin.partials.errors')
	
		{!! Form::open(['route' => ['user.promotion.store']]) !!}
	
		<div class="form-group">
			{!! Form::label('delivery', 'Delivery', ['class' => 'pull-left']) !!}
			{!! Form::select('delivery', $deliveries, null, [ 'class' => 'form-control', 'placeholder' => 'Elija un delivery']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('title', 'Titulo', ['class' => 'pull-left']) !!}
			{!! Form::text('title', null, [ 'class' => 'form-control', 'placeholder' => 'Titulo']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('photo','Imagen', ['class' => 'pull-left']) !!}<br>
			{!! Form::file('photo', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('description', 'Descripción de la promoción', ['class' => 'pull-left']) !!}
			{!! Form::textarea('description', null, [ 'class' => 'form-control', 'placeholder' => 'escriba una breve descripción']) !!}	
		</div>
		
		<div class="form-group">
			{!! Form::label('price','Precio', ['class' => 'pull-left']) !!}
			{!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo 10000']) !!}
		</div>

		
		<div class="form-group">
			{!! Form::submit('Enviar', [ 'class' => 'btn btn-primary']) !!}	
		</div>
		
		{!! Form::close() !!}
	</div>
</div>			
@endsection

