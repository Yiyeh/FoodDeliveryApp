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

		
		<div class="jumbotron text-center">
			<br><br>
			
			  <h1 class="display-1 ">Bienvenidos a FoodApp</h1>
			  <p class="lead">Busca rapidamente deliveries en tu sector.</p>
			  <hr class="my-4">
			  <p class="lead">
			    <a class="btn btn-primary btn-lg" href="#" role="button">Leer Mas</a>
			  </p>
		
		</div>
		@yield('content')



	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
	
</body>
</html>