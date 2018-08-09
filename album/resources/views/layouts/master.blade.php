<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
	@yield('styles')
</head>
<body>
<header>@include('header')</header>
@yield('content')
<footer>
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	@yield('scripts')
</footer>
</body>
</html>