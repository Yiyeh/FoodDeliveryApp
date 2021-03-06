@extends('layouts.admin')

@section('title','Edit Comment')

@section('action','- Edit Comment')

@section('content')

<div class="container">

	<div class="col-sm-11">
		<a href="{{route('admin.comment.index')}}" class="btn  btn-info pull-right">Show List</a> <br><br><br>

		@include('layouts._errors')
	
		{!! Form::model($comment, ['route' => ['admin.comment.update', $comment->id], 'method' => 'PUT']) !!}
	
		<div class="form-group">
			{!! Form::label('delivery', 'Delivery', ['class' => 'pull-left']) !!}
			{!! Form::select('delivery', $deliveries, null, [ 'class' => 'form-control', 'placeholder' => 'Elija un delivery']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('comment', 'Comentario', ['class' => 'pull-left']) !!}
			{!! Form::textarea('comment', null, [ 'class' => 'form-control', 'placeholder' => 'Deje su comentario']) !!}	
		</div>

		
		<div class="form-group">
			{!! Form::label('score','Puntos', ['class' => 'pull-left']) !!}
			{!! Form::number('score', null, ['class' => 'form-control', 'placeholder' => 'Max: 5']) !!}
		</div>

		
		<div class="form-group">
			{!! Form::submit('Enviar', [ 'class' => 'btn btn-primary']) !!}	
		</div>
		
		{!! Form::close() !!}
	</div>
</div>			
@endsection

