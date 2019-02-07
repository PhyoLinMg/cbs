<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@yield('title')


	<meta name="csrf-token" content="{{ csrf_token() }}">
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>
	<link rel="stylesheet" href="{{ asset('css/custom1.css') }}">
</head>
<body>

	<div class="" id="app">
	@include('all.nav')
	<div class="container" >
		@yield('content')

	</div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>