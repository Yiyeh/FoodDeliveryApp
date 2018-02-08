@extends('layouts.app')

@section('title', 'delivery')


@section('content')

	<div class="container">

		<div class="row">

			<!-- div lateral Categorias -->
			@include('layouts._categoryNav')

			<!-- div central -->


			
			<div class="col-sm-9">
				
				@if(count($deliveries))
				@foreach ($deliveries as $delivery)
				<div class="panel panel-default">
				 
				  	<div class="panel-heading">
				    	<h3 class="panel-title">
				    		{{ $delivery->name }}
				    		<a href="{{ route('guest.delivery.show', $delivery->id) }}" class="btn btn-xs btn-default pull-right" >Ver Delivery</a>
				    	</h3>

				  	</div>
				  	<div class="panel-body">
				    	<div class="col-sm-2">
			    			<img class="img-thumbnail" src="{{ $delivery->logo }}" width="95%">
			    		</div>
			    		<div class="col-sm-7">
			    			<span>{{ $delivery->short }} </span>
			    		</div>
						<div class="col-sm-3">
			    		<span class="pull-right"> 	
			    			<i class="fa fa-truck" aria-hidden="true"></i>  {{ $delivery->sector }} <br> 
			    			<i class="fa fa-map-marker" aria-hidden="true"></i>  {{ $delivery->city }} <br> 
			    			<i class="fa fa-phone" aria-hidden="true"></i><small class="text-muted">  {{ $delivery->phone}}</small>
			    		</span>
			    			
			    		</div>			
				  	</div>			
				</div>
				@endforeach
				{!! $deliveries->render() !!}
				@else
					<div class="well"><h1>No tenemos ningún delivery registrado en esta categoría :c </h1></div>
				@endif
	
			</div> <!-- col-sm-9 -->
		</div><!-- row -->
	</div>

@endsection



