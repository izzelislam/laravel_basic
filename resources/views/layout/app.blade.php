<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	@include('layout.navbar')
	<hr>
	@yield('content')
</body>
</html>