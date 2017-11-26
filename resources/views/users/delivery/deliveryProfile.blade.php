@extends('users.layout')

@section('title', 'delivery')


@section('content')

	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<ul>
					@extends('users.partials.nav')
				</ul>
			</div>

			

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
				    	<h3 class="panel-title">Comentarios</h3>
				  	</div>
				  	<div class="panel-body">
					
					<p>Este Delivery aun no tiene Recomendaciones</p>	
				  	
				  	</div>
				</div>

				@endif

			
			</div> <!-- col-sm-9 -->
		</div><!-- row -->
	</div>

@endsection



