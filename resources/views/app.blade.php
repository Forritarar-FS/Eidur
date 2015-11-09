<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TopKek</title>

	<link href="{{ asset('/css/dark/bootstrap.css') }}" rel="stylesheet" title="dark">
	<link href="{{ asset('/css/dark/bootstrap.min.css') }}" rel="stylesheet" title="dark">
	<link href="{{ asset('/css/light/bootstrap.css') }}" rel="stylesheet" title="light">
	<link href="{{ asset('/css/light/bootstrap.min.css') }}" rel="stylesheet" title="light">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src='js/jquery.infinitescroll.min.js'></script>
	<script src='js/themes.js'></script>
	<script src='js/infinitescroll.js'></script>
	<script src="/ckeditor/ckeditor.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">TopKek</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>
				@if (!Auth::guest())

					<ul class="nav navbar-nav">
						<li><a href="{{ url('create') }}">Create Post</a></li>
					</ul>

				@endif


				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Swap Themes<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" onclick="setActiveStyleSheet('dark'); return false;"><img src="../../pictures/dark.png" width="27" height="26" alt="Dark Style Button" /><p style="display: inline;"> Dark Theme</p></a></li>
								<li><a href="#" onclick="setActiveStyleSheet('light'); return false;"><img src="../../pictures/light.png" width="27" height="26" alt="Light Style Button" /><p style="display: inline;"> Light Theme</p></a></li>
							</ul>
						</li>
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Swap Themes<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" onclick="setActiveStyleSheet('dark'); return false;"><img src="../../pictures/dark.png" width="27" height="26" alt="Dark Style Button" /><p style="display: inline;"> Dark Theme</p></a></li>
								<li><a href="#" onclick="setActiveStyleSheet('light'); return false;"><img src="../../pictures/light.png" width="27" height="26" alt="Light Style Button" /><p style="display: inline;"> Light Theme</p></a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
								<li><a href="{{ url('#') }}">Edit Profile</a></li>
							</ul>
						</li>
					@endif
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
