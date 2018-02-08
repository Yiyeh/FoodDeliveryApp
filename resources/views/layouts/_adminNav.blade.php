<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
		  		<li class="nav-item">
	    			<a class="nav-link" href="{{ url('/') }}">View Site</a>
	      		</li>
			  	<li class="nav-item">
	    			<a class="nav-link" href="{{ route('admin.user.index') }}">Users</a>
	      		</li>
	      		<li class="nav-item">
	    			<a class="nav-link" href="{{ route('admin.delivery.index') }}">Deliveries</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('admin.category.index') }}">Categories</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('admin.order.index') }}">Orders</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('admin.comment.index') }}">Comments</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('admin.fanpage.index') }}">Fan Pages</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="{{ route('admin.promotion.index') }}">Promotions</a>
	      		</li>
      		</ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Ingresar</a></li>
                    <li><a href="{{ route('register') }}">Registrar</a></li>
                @else
                    @if(Auth::user()->type == 'ADMIN')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.delivery.index') }}">Administración</a>
                        </li>
                    @endif
                    <li class="dropdown">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li> 
                                <a href="{{ Route('user.delivery.mydelivery') }}">Mis Deliveries</a> 
                            </li>
                            <li> 
                                <a href="{{ Route('user.promotion.index') }}">Mis Promociones</a> 
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>