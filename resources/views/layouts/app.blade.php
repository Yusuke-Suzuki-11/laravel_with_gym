<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="stylesheet" href="/css/app.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
</head>
<body>
	@include('elements/header')
	@yield('content')
</body>
</html>
