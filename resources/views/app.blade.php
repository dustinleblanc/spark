<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Raleway:500,400,300,200,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,700' rel='stylesheet' type='text/css'>

	<!-- Styles -->
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	@yield('styles', '')

	<!-- Scripts -->
	@yield('scripts', '')

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Navigation -->
	@include('spark::nav')

	<!-- Main Content -->
	@yield('content')

	<div style="margin-top: 125px;">
		<!-- Push Footer -->
	</div>

	<footer class="footer">
		<div class="container" style="color: #777;">
			<div class="pull-left" style="padding-top: 28px;">
				Copyright © Your Company
			</div>

			<div class="pull-right" style="padding-top: 18px; font-size: 32px;">
				<i class="fa fa-btn fa-facebook-square"></i>
                <i class="fa fa-btn fa-twitter-square"></i>
                <i class="fa fa-github-square"></i>
			</div>

			<div class="clearfix"></div>
		</div>
	</footer>

	<!-- Footer Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	@yield('scripts.footer', '')
</body>
</html>
