<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FoodApp - @yield('title')</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" crossorigin="anonymous">

</head>
<body>

	<!--
	<div class="row">
	  	<div class="col-sm-1 sidenav">
	  		<br><br><br>
	    	<ul class="nav flex-column">
	    		<center>
		      		<li class="nav-item">
		    			<a class="nav-link active" href="#">Active</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Link</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Link</a>
		      		</li>
		      		<li classa="nav-item">
		        		<a class="nav-link disabled" href="#">Disabled</a>
		      		</li>
	      		</center>
	    	</ul>
	  	</div>

	  -->

		@yield('content')

	</div> <!-- Cierre del row -->

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
	
</body>
</html>