@extends('admin.layout')

@section('title','Edit Delivery')

@section('action','- Edit Delivery')

@section('content')

<div class="container">

	<div class="col-sm-11">
		<a href="{{route('delivery.index')}}" class="btn  btn-info pull-right">Show List</a> <br><br><br>

		@include('admin.partials.errors')
	
		{!! Form::model($delivery, ['route' => ['delivery.update', $delivery->id], 'method' => 'PUT' ]) !!}
	
		<div class="form-group">
			{!! Form::label('category', 'Categoria', ['class' => 'pull-left']) !!}
			{!! Form::select('category', $categories, null, [ 'class' => 'form-control', 'placeholder' => 'Elija una categoria']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('name', 'Nombre del Delivery', ['class' => 'pull-left']) !!}
			{!! Form::text('name', null, [ 'class' => 'form-control', 'placeholder' => 'Nombre']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('short', 'Descripción Breve', ['class' => 'pull-left']) !!}
			{!! Form::textarea('short', null,[ 'class' => 'form-control', 'placeholder' => 'Descripción Breve....']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('body', 'Descripción Detallada', ['class' => 'pull-left']) !!}
			{!! Form::textarea('body', null,[ 'class' => 'form-control', 'placeholder' => 'Descripción Detallada....']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('sector','Zona de reparto', ['class' => 'pull-left']) !!}
			{!! Form::text('sector', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: "Todo Iquique"']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('phone', 'Teléfono', ['class' => 'pull-left']) !!}
			{!! Form::text('phone', null, [ 'class' => 'form-control', 'placeholder' => 'Teléfono']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('logo', 'Logo', ['class' => 'pull-left']) !!}
			{!! Form::file('logo', null, [ 'class' => 'form-control']) !!}	
		</div><br>
		
		<div class="form-group">
			{!! Form::label('fbPage','Facebook Fanpage',['class' => 'pull-left']) !!}
			{!! Form::url('fbPage', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: http://facebook.com/mideliveryoficial']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('commune','Comuna', ['class' => 'pull-left']) !!}
			{!! Form::text('commune', null, ['class' => 'form-control', 'placeholder' => 'Comuna ( si pertenece a alguna )']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('city','Ciudad', ['class' => 'pull-left']) !!}
			{!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Ciudad']) !!}
		</div>

		<div class="form-group">
				{!! Form::label('premium','Premium', ['class' => 'pull-left']) !!}
				{!! Form::select('premium', ['TRUE' => 'Si','FALSE' =>'No'],null, ['class' => 'form-control', 'placeholder' => 'Seleccione un tipo']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('published','Tipo', ['class' => 'pull-left']) !!}
				{!! Form::select('published', ['DRAFT' => 'Oculto','PUBLISHED' =>'Publicado'],null, ['class' => 'form-control', 'placeholder' => 'Seleccione un tipo']) !!}
			</div>
	
		<div class="form-group">
			{!! Form::submit('Enviar', [ 'class' => 'btn btn-primary']) !!}	
		</div>
		
		{!! Form::close() !!}
	</div>
</div>			
@endsection

