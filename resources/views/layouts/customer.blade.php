<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@yield('title')


	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>
	{{-- Default Laravel Style --}}
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">


	{{-- Custom Style Sheet --}}
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom1.css') }}">
</head>
<body>

	<div class="" id="app">

		<div class="container" >
			@yield('content')

		</div>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/parallax.js') }}"></script>
</body>
</html>