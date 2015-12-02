<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="pictures/fb.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:locale" content="en_GB"/>
	<meta property="og:url" content="http://suchdank.com/"/>
	<meta property="og:description" content="TheDankWeb - Your daily Dank memes. Join today!"/>
	<meta property="og:site_name" content="TheDankWeb"/>
	<meta property="og:title" content="TheDankWeb - Your daily Dank memes. Join today!"/>
	<meta property="fb:app_id" content="1621725061412866"/>
	<title>SuchDank</title>

	<link href="{{ asset('/css/dark/theme.css') }}" rel="stylesheet" title="dark">
	<link href="{{ asset('/css/light/theme.css') }}" rel="stylesheet" title="light">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="{{ asset('js/gifffer.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/themes.js') }}"></script>
	<style type="text/css">
		::-webkit-scrollbar {
			position: static;
	    width: 15px;
			background-color: #000;
	}

	::-webkit-scrollbar-track {
	    -webkit-box-shadow: outset 0 0 6px #110;
	    border-radius: 10px;
	}

	::-webkit-scrollbar-thumb {
	    border-radius: 10px;
			background-color: #505050;
	    -webkit-box-shadow: inset 0 0 6px #011;
	}

</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top device-fixed-heigh">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">SuchDank</a>
			</div>

			<div class="collapse navbar-collapse device-fixed-width" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav device-fixed-width">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>
				@if (!Auth::guest())

					<ul class="nav navbar-nav device-fixed-width">
						<li><a href="{{ url('create') }}">Create Post</a></li>
					</ul>

				@endif


				<ul class="nav navbar-nav navbar-right device-fixed-width">
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
								@if (!Auth::guest())
								<li><a href="{{ url('/profile') }}">My Profile</a></li>
								<li><a href="{{ url('/profile/edit') }}">Edit Profile</a></li>
								@endif
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
	<script language="javascript" type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
	/*(function($) {
	    var element = $('.follow-scroll');
	    console.log(element[0])
	    var originalY = element.offset().top;

	    // Space between element and top of screen (when scrolling)
	    var topMargin = 80;

	    // Should probably be set in CSS; but here just for emphasis
	    element.css('position', 'relative');

	    $(window).on('scroll', function(event) {
	        var scrollTop = $(window).scrollTop();

	        element.stop(false, false).animate({
	            top: scrollTop < originalY
	                    ? 0
	                    : scrollTop - originalY + topMargin
	        }, 300);
	    });
	})(jQuery);*/
	  window.onload = function() {
	    Gifffer();
	  }
		function submitForm(btn) {
			btn.disabled = true;
			btn.form.submit();
		}
		$('#childComment').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget)
			var url = button.data('url')
			console.log(button)
			var modal = $(this)
			modal.find('.modal-content form').attr('action', url)
		})
	</script>
</body>
</html>
