<!DOCTYPE html>
<html>
<head>
	<title>
		Acme
	</title>
	<link rel="stylesheet"  href="css/app.css">
</head>
<body>
	@include('include.navbar')
	<div class="container">
		@if(Request::is('home'))
		@include('include.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('include.messages')
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('include.sidebar')
			</div>
		</div>
	</div>


	<footer id="footer" class="text-center">
		<p>Copyright 2017 &copy; </p>
	</footer>

</body>
</html>