<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
        <title>SysMapp Management</title>
		
		<!-- Bootstrap -->
		{{ Html::style('css/bootstrap.min.css') }}
		
        <!-- Styles -->
		{{ Html::style('css/main.css') }}
		
		<!-- Javascript 
		{{ Html::script('js/jquery.js') }}
		
		{{ Html::script('js/bootstrap.min.js') }}-->
		
	</head>
    <body>
		
		<div class="site-header-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<a href="index.html">
						
							{{ Html::image('img/IC-Logo.png', 'a ic-logo') }}
						
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Navigation -->
		<nav class="navbar menu" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand" href="#">
						{{ Html::image('img/Uff_logo.png', 'a uff-logo', array('width' => '130px', 'height' => '30px')) }}
					</a>
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="{{ url('/mappings') }}">Mappings</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						  </ul>
						</li>
					</ul>
					
					<!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!--<li><a href="{{ route('register') }}">Register</a></li>-->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
									
									<li> 
										<a href="#">Profile</a>
									</li>
									
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
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
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

		<!-- Page Content -->
		<div class="container">
		
			<div class="col-lg-12 text-center">
					<h1>Welcome to the Systematic Mapping Management System</h1>
				</div>

			<div class="row row-centered">
				
				<div class="col-md-4 col-centered">
					<h2> <a href="http://example.com" id=""> Heading </a> </h2>
					<p> 
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
					</p>
				</div>
				
				<div class="col-md-4 col-centered">
					<h2> <a href="http://example.com" id=""> Heading </a> </h2>
					<p> 
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
					</p>
				</div>
				
				
				
			</div>
			<!-- /.row 1 -->
			
			<div class="row row-centered">
				
				<div class="col-md-4 col-centered">
					<h2> <a href="http://example.com" id=""> Heading </a> </h2>
					<p> 
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
					</p>
				</div>
				
				<div class="col-md-4 col-centered">
					<h2> <a href="http://example.com" id=""> Heading </a> </h2>
					<p> 
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
					</p>
				</div>
				
				
				
			</div>
			<!-- /.row 2-->

		</div>
		<!-- /.container -->
		
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}"></script>
		
    </body>
</html>
