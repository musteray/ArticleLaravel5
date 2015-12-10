<!DOCTYPE html>
<html>
<head>
	@yield('title')
</head>
<link rel="stylesheet" href="{{ URL::asset('include/css/bootstrap/css/bootstrap.css') }}">
@yield('css')
<body>
	<div class = "container" style="margin-top: 50px;margin-bottom:100px;">
		@yield('content')
		@yield('footer')
	</div>
@yield('js')
</body>
</html>