@extends('layouts.app')

@section('title', 'Mis Promociones')


@section('content')

	<div class="container">

		<div class="row">

			
		<h1 class="page-header text-centered">Mis Promociones Registradas</h1>
			
			<div class="col-sm-12">
				<a href="{{ route('user.promotion.create') }}" class="btn  btn-primary pull-right">Nueva Promoción</a><hr>
				@include('flash::message')
				<table class="table  table-responsive table-striped table-sm">
					<thead>
						<tr></tr>
							<th>Delivery</th>
							<th>Título</th>
							<th>Descripción</th>
							<th>Precio</th>
							<th colspan="3">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($promotions as $promotion)
						<tr>
							<td>{{$promotion->delivery->name}}</td>
							<td>{{$promotion->title}}</td>
							<td>{{$promotion->description}}</td>
							<td>{{$promotion->price}}</td>
							<td>
								<a href="{{ route('user.delivery.show', $promotion->delivery->id) }}" class="btn  btn-primary">Ver</a>
							</td>
							<td>
								<a href="{{ route('user.promotion.edit', $promotion->id) }}" class="btn  btn-warning">Editar</a>
							</td>
							<td>
								<form action="{{ route('user.promotion.destroy', $promotion->id) }}" method="POST">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Eliminar</button>
								</form>
							</td>
						</tr>		
						@endforeach
					</tbody>
				</table>
				{!! $promotions->render() !!}
			</div>
		</div><!-- row -->
	</div>

@endsection



