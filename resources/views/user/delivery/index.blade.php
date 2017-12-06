@extends('layouts.app')

@section('title', 'delivery')


@section('content')

	<div class="container">

		<div class="row">

			<!-- div lateral Categorias -->
			@include('layouts._categoryNav')

			
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
			    		<span> 
			    			<i class="fa fa-truck" aria-hidden="true"></i>  {{ $delivery->sector }} <br> 
			    			<i class="fa fa-map-marker" aria-hidden="true"></i>  {{ $delivery->city }} <br> 
			    			<i class="fa fa-phone" aria-hidden="true"></i><small class="text-muted">  {{ $delivery->phone}}</small>
			    		</span>
			    			<a href="{{ route('guest.delivery.show', $delivery->id) }}" class="btn btn-sm btn-primary pull-right" >Ver Delivery</a>
			    		</div>			
				  	</div>			
				</div>
				@endforeach
				{!! $deliveries->render() !!}
	
			</div> <!-- col-sm-9 -->
		</div><!-- row -->
	</div>

@endsection



