<div class="col-sm-3">

	<div class="panel panel-default">
	  	<div class="panel-heading">
	    	<h3 class="panel-title">Categorias</h3>
	  	</div>
	  	<div class="panel-body">
	  	@foreach ($categories as $category)
	    	<a href="{{ route('guest.category.show', $category->id)}}">{{$category->name}}</a><br>
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