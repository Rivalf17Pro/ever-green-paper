<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="{{ asset('/favicon.png') }}">
	<title>@yield('title') | Ever Green Paper</title>
	@vite('resources/css/app.css')
</head>
<body>
	@include('layouts._partials.nav')
	@yield('content')
	@include('layouts._partials.footer')
</body>
</html>