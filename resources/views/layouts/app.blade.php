<html>
<head>
	<title>Basic Laravel Website</title>
	<link rel="stylesheet" type="text/css" href="../public/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif	
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.message')
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>

	<footer id="footer" class="text-center">
		<p>Copyright 2018 &copy; Mohamed Emad</p>
	</footer>
	
</body>
</html>