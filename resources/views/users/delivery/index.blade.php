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
				
				@foreach ($deliveries as $delivery)
				<div class="panel panel-default">
				 
				  	<div class="panel-heading">
				    	<h3 class="panel-title">{{ $delivery->name }}</h3>
				  	</div>
				  	<div class="panel-body">
				    	<div class="col-sm-4">
			    			<img class="img-thumbnail" src="{{ $delivery->logo }}" width="95%">
			    		</div>
			    		<div class="col-sm-4">
			    			<span>{{ $delivery->short }} </span>
			    		</div>
						<div class="col-sm-4">
			    		<span> {{ $delivery->sector }} <br> {{ $delivery->city }} <br> 
			    			<small class="text-muted">{{ $delivery->phone}}</small>
			    		</span>
			    			<a href="delivery/{{$delivery->id}}" class="btn btn-sm btn-primary pull-right" >Ver Delivery</a>
			    		</div>			
				  	</div>			
				</div>
				@endforeach
				{!! $deliveries->render() !!}
	
			</div> <!-- col-sm-9 -->
		</div><!-- row -->
	</div>

@endsection



