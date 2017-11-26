<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FoodApp - @yield('title')</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap3.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" crossorigin="anonymous">

</head>
<body class="dashboard">

	<h1 class="page-header text-center">Admin Panel</h1>
	
	<div class="row">

	  	<div class="col-sm-1 sidenav">
	  		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Registros</h3>
				  	</div>
				  	<div class="panel-body">
				  	<ul class="nav navbar-nav">
				  		<li class="nav-item">
			    			<a class="nav-link" href="/">View Site</a>
			      		</li>
					  	<li class="nav-item">
			    			<a class="nav-link" href="{{ route('users.index') }}">Users</a>
			      		</li>
			      		<li class="nav-item">
			    			<a class="nav-link" href="{{ route('deliveries.index') }}">Deliveries</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('orders.index') }}">Orders</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('comments.index') }}">Comments</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('fanpages.index') }}">Fan Pages</a>
			      		</li>
		      		</ul>
				  	</div>
			</div>     		
	  	</div>

	  
		<center>
			
			@yield('content')
		</center>

	</div> <!-- Cierre del row -->

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap3.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
	
</body>
</html>