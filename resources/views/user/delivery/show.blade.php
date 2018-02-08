@extends('layouts.app')

@section('title', 'delivery')


@section('content')

	<div class="container">

		<div class="row">
			<ol class="breadcrumb">
			  <li><a href="{{url('/')}}">Inicio</a></li>
			  <li class="active"><a href="{{route('guest.delivery.list')}}">Deliveries</a></li>
			  <li class="active">Delivery</li>
			</ol>

			<!-- div lateral Categorias -->
			@include('layouts._categoryNav')

			<!-- div central -->


			
			<div class="col-sm-9">
				<div class="row">
					<div class="panel panel-default">
					  	<div class="panel-heading">
					    	<h1 class="panel-title">Información:
					    	
					    	@if(Auth::user())

						    	@if (Auth::user()->id == $delivery->user_id || Auth::user()->type == 'ADMIN')
									<a href="{{ route('user.delivery.edit', $delivery->id) }}" class="btn btn-xs btn-default pull-right" >Editar Delivery</a>
						    	@endif

					    	@endif
					    	</h1>

					  	</div>
					  	<div class="panel-body">
					  		<center><h2 class="page-header">{{$delivery->name}}</h2></center>
					  		<div class="col-sm-6">
							<center><img class="img-thumbnail" src="{{$delivery->logo}}" width="80%"></center><br>
						</div>
						<div class="col-sm-6">
							<div class="well">
								<p class="text-right"><i class="fa fa-map-marker" aria-hidden="true"></i>  Ciudad: {{$delivery->city}}</p>
								<p class="text-right"><i class="fa fa-map-signs" aria-hidden="true"></i>  Comuna: {{$delivery->commune}}</p>
								<p class="text-right"><i class="fa fa-phone" aria-hidden="true"></i>  Teléfono: {{$delivery->phone}}</p>
								<p class="text-right"><i class="fa fa-truck" aria-hidden="true"></i>  Sector de reparto: {{$delivery->sector}}</p>
							</div>
						</div>
						<div class="col-sm-12"><p class="text-justify lead">{{$delivery->short}}</p></div>
						
						<div class="col-sm-12">
							<p class="lead text-justify"><strong>{{$delivery->body}}</strong></p>
						</div>
					</div>	
				</div>

				@if (count($promotions) > 0)
				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Promociones</h3>
				  	</div>
				  	<div class="panel-body">

				    	<table class="table table-striped">
				    		<thead>
				    			<th width="200px">Imagen</th>
				    			<th>Descripción</th>
				    			<th>Precio</th>
				    		</thead>
				    		<tbody>
				    			@foreach ($promotions as $promotion)
				    			<tr>
				    				<td><center><img class="img-thumbnail" src="{{$promotion->photo}}" alt="{{$promotion->title}}" width="85%"></center></td>
				    				<td><p><strong>{{$promotion->title}}</strong>  <bR> {{$promotion->description}}</p></td>
				    				<td>${{$promotion->price}}</td>
				    			</tr>
				    			@endforeach
				    		</tbody>
				    	</table>
				    
				    
				  	</div>
				</div>
				@endif
				
				@if (count($comments) > 0)
				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Comentarios</h3>
				  	</div>
				  	<div class="panel-body">

				  	@foreach ($comments as $comment)
				    	<blockquote class="blockquote-reverse">
  							<p>"{{$comment->comment}}"</p>
  							<h6>- {{ $comment->user->name}}</h6>
  								<h6><p class="text-right">Puntaje {{$comment->score}}/5</p></h6>
						</blockquote>
				    @endforeach
				    
				  	</div>
				</div>
				@else

				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Recomendaciones</h3>
				  	</div>
				  	<div class="panel-body">
					
						<p>Este Delivery aun no tiene Recomendaciones</p>	
						<br>
										  	
				  	</div>
				</div>

				@endif


				@if (Auth::user()) <!-- Mostrar comentarios si el usuario esta logueado -->

				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Dejar Recomendación</h3>
				  	</div>
					<div class="panel-body">
						<form action="{{route('user.comment.store')}}" method="POST">
							{{csrf_field()}}
							<div class="form-group">
								<p class="lead">Puntaje:</p>
								<div class="stars">
								    <input class="star star-5" id="star-5" type="radio" name="score" value="5" />
								    <label class="star star-5" for="star-5"></label>
								    <input class="star star-4" id="star-4" type="radio" name="score" value="4" />
								    <label class="star star-4" for="star-4"></label>
								    <input class="star star-3" id="star-3" type="radio" name="score" value="3" />
								    <label class="star star-3" for="star-3"></label>
								    <input class="star star-2" id="star-2" type="radio" name="score" value="2" />
								    <label class="star star-2" for="star-2"></label>
								    <input class="star star-1" id="star-1" type="radio" name="score" value="1" />
								    <label class="star star-1" for="star-1"></label>
								</div>
								<span>
									<input class="form-control" type="area" name="comment" width="100%" placeholder="Escriba su recomendación">
									<input type="hidden" value="{{$delivery->id}}" name="delivery">
								</span><br>
								<input class="form-control" type="submit" name="">
							</div>	
						</form>	
					</div>
				</div>
				@else
					<div class="well">
						<p>Para dejar un comentario necesitas estar ingresado.</p>
					</div>

				@endif
				
			</div> <!-- col-sm-9 -->
		</div><!-- row -->
	</div>

@endsection



