@extends('layouts.app')

@section('title', 'delivery')


@section('content')

	<div class="container">

		<div class="row">

			
		<h1 class="page-header text-centered">Mis Deliveries Registrados</h1>
			
			<div class="col-sm-12">
				<a href="{{ route('user.delivery.create') }}" class="btn  btn-primary pull-right">Nuevo Delivery</a><hr>
				@include('flash::message')
				<table class="table  table-responsive table-striped table-sm">
					<thead>
						<tr></tr>
							<th>Categoria</th>
							<th>Nombre</th>
							<th>Teléfono</th>
							<th>Sector</th>
							<th>Comuna</th>
							<th>Ciudad</th>
							<th>Estado</th>
							<th colspan="3">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($deliveries as $delivery)
						<tr>
							<td>{{$delivery->category_id}}</td>
							<td>{{$delivery->name}}</td>
							<td>{{$delivery->phone}}</td>
							<td>{{$delivery->sector}}</td>
							<td>{{$delivery->commune}}</td>
							<td>{{$delivery->city}}</td>
							<td>{{$delivery->published}}</td>
							<td>
								<a href="{{ url('delivery', $delivery->id) }}" class="btn  btn-primary">Ver</a>
							</td>
							<td>
								<a href="{{ route('user.delivery.edit', $delivery->id) }}" class="btn  btn-warning">Editar</a>
							</td>
							<td>
								<form action="{{ route('user.delivery.destroy', $delivery->id) }}" method="POST">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Eliminar</button>
								</form>
							</td>
						</tr>		
						@endforeach
					</tbody>
				</table>
				{!! $deliveries->render() !!}
			</div>
		</div><!-- row -->
	</div>

@endsection



