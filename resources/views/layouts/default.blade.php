<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="HandheldFriendly" content="true" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Shanice Ross - Official Site</title>
		<link rel="icon" href="/assets/img/content/icon.png">
		<!-- ========== CSS INCLUDES ========== -->
		<link rel="stylesheet" href="/assets/css/master.css">
	</head>

	<body>
		@include('includes.preload')

		@include('includes.player')

		@include('includes.playlist')

		@include('includes.menu')

		@yield('content')

		@include('includes.footer')

		@yield('scripts')
	</body>
</html>
