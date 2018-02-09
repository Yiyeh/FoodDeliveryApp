@extends('layouts.app')

@section('title', 'Pedidos')


@section('content')

	<div class="container">

		<div class="row">

			
		<h1 class="page-header text-centered">Pedidos Registrados</h1>
			
			<div class="col-sm-12">
				<div class="well">
					@include('flash::message')
					<table class="table  table-responsive table-striped table-sm">
						<thead>
							<tr></tr>
								<th>Nombre</th>
								<th>Delivery</th>
								<th>Pedido</th>
								<th>Telefono</th>
								<th>Direccion</th>
								<th>Estado</th>
								<th colspan="3">Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($orders as $order)
							<tr>
								<td>{{$order->user->name }}</td>
								<td>{{$order->delivery->name}}</td>
								<td>{{$order->body}}</td>
								<td>{{$order->phone}}</td>
								<td>{{$order->address}}</td>
								@if ($order->ready == 0)
									<td>Sin Atender</td>
								@else
									<td>Atendido</td>
								@endif
								<td>
									<a href="#" class="btn  btn-primary">Ver</a>
								</td>
								<td>
									<a href="#" class="btn  btn-warning">Editar</a>
								</td>
								<td>
									<form action="#" method="POST">
										{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
										<button class="btn btn-danger">Eliminar</button>
									</form>
								</td>
							</tr>		
							@endforeach
						</tbody>
					</table>
					{!! $orders->render() !!}
				</div>
			</div>
		</div><!-- row -->
	</div>

@endsection



