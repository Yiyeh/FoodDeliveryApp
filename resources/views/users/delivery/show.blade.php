@extends('layouts.app')

@section('title', 'delivery')


@section('content')

	<div class="container">

		<div class="row">

			<!-- div lateral Categorias -->
			<div class="col-sm-3">

				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Categorias</h3>
				  	</div>
				  	<div class="panel-body">
				  	@foreach ($categories as $category)
				    	<a href="{{$category->name}}">{{$category->name}}</a><br>
				    @endforeach
				  	</div>
				</div>

				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Ciudades</h3>
				  	</div>
				  	<div class="panel-body">
				  	@foreach ($cities as $city)
				    	<a href="l/{{$city->city}}">{{$city->city}}</a><br>
				    @endforeach
				  	</div>
				</div>		
				
			</div>

			<!-- div central -->


			
			<div class="col-sm-9">

				<div class="row">
					<div class="col-sm-12"><h1 class="page-header text-centered">{{$delivery->name}}</h1></div><br>
					<div class="col-sm-12">
						<center><img class="img-thumbnail" src="{{$delivery->logo}}" width="80%"></center><br>
					</div>
					<div class="col-sm-6"><p class="text-justify lead">{{$delivery->short}}</p></div>
					<div class="col-sm-6">
						<p class="text-right">Ciudad: {{$delivery->city}}</p>
						<p class="text-right">Comuna: {{$delivery->commune}}</p>
						<p class="text-right">Telefono: {{$delivery->phone}}</p>
						<p class="text-right">Sector de reparto: {{$delivery->sector}}</p>
					</div>
					<div class="col-sm-12">
						<p class="lead text-justify"><strong>{{$delivery->body}}</strong></p>
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
				    			<th>Imagen</th>
				    			<th>Descripción</th>
				    			<th>Precio</th>
				    		</thead>
				    		<tbody>
				    			@foreach ($promotions as $promotion)
				    			<tr>
				    				<td><center><img class="img-thumbnail" src="{{$promotion->photo}}" alt="{{$promotion->title}}" width="70%"></center></td>
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
  							{{$comment->comment}}
						</blockquote>
						<p class="text-right">Puntaje {{$comment->score}}/5</p>
						<hr>
				    @endforeach
				    
				  	</div>
				</div>
				@else

				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Recomentaciones</h3>
				  	</div>
				  	<div class="panel-body">
					
						<p>Este Delivery aun no tiene Recomendaciones</p>	
						<br>
										  	
				  	</div>
				</div>

				@endif

				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Dejar Recomendación</h3>
				  	</div>
					<div class="panel-body">
						<form action="">
							<div class="form-group">
								<p class="lead">Puntaje:</p>
								<div class="stars">
								    <input class="star star-5" id="star-5" type="radio" name="star"/>
								    <label class="star star-5" for="star-5"></label>
								    <input class="star star-4" id="star-4" type="radio" name="star"/>
								    <label class="star star-4" for="star-4"></label>
								    <input class="star star-3" id="star-3" type="radio" name="star"/>
								    <label class="star star-3" for="star-3"></label>
								    <input class="star star-2" id="star-2" type="radio" name="star"/>
								    <label class="star star-2" for="star-2"></label>
								    <input class="star star-1" id="star-1" type="radio" name="star"/>
								    <label class="star star-1" for="star-1"></label>
								</div>
								<span>
									<input class="form-control" type="area" width="100%" placeholder="Escriba su recomendación">
								</span><br>
								<input class="form-control" type="submit" name="">
							</div>	
						</form>	
					</div>
				</div>
				
			</div> <!-- col-sm-9 -->
		</div><!-- row -->
	</div>

@endsection



