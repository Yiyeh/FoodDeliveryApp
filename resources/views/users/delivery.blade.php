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
				<div class="card">
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><h4>Categorias</h4></li>	
						@foreach ($categories as $category)
					    	<li class="list-group-item"> 
					    		<div class="col-sm-12">
					    			<a href="{{$category->name}}">{{$category->name}}</a>
					    		</div>	    		
					    	</li>	
						@endforeach
					</ul>
				</div>

				<br>

				<!-- div lateral Ciudades -->				
				<li class="list-group-item"><h4>Ciudades</h4></li>
				@foreach ($cities as $city)
			    	<li class="list-group-item"> 
			    		<div class="col-sm-12">
			    			<a href="l/{{$city->city}}">{{$city->city}}</a>
			    		</div>	    		
			    	</li>	
				@endforeach
			</div>


			<!-- div central -->


			
			<div class="col-sm-9">
				
				


				<div class="card" >
				  <ul class="list-group list-group-flush">
				    @foreach ($deliveries as $delivery)
				    
				    	<li class="list-group-item">	
				    		<div class="col-sm-4">
				    		<img class="img-thumbnail" src="{{ $delivery->logo }}" width="95%"></div>
				    		<div class="col-sm-4">
				    		<span><h5>{{ $delivery->name }}</h5> {{ $delivery->short }} </span></div>
							<div class="col-sm-4">
				    		<span> {{ $delivery->sector }} <br> {{ $delivery->city }} <br> 
				    			<small class="text-muted">{{ $delivery->phone}}</small></span></div>
							<div class="col-sm-12">
								<br>
								<center><a href="delivery/{{$delivery->id}}" class="btn btn-sm btn-primary float-right" >Ver Delivery</a></center>
							</div>	
					    </li>
					@endforeach
				  </ul>
				  <div class="pagination pagination-lg">{!! $deliveries->render() !!}</div>
				</div>


			</div> <!-- col-sm-9 -->
		</div><!-- row -->
	</div>

@endsection



