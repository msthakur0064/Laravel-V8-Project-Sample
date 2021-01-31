<!DOCTYPE html>
<html>

<head>
	@hasSection('title')
	<title>Knowledge Share | @yield('title')</title>
	@else
	<title>Knowledge Share</title>
	@endif
	@include('layouts.default.head')
</head>

<body class="hold-transition skin-red layout-top-nav">
	<div class="wrapper">
		<header class="main-header">
			@include('layouts.default.header')
		</header>
		<div class="content-wrapper">
			<div class="container">
				@yield('content')
			</div>
		</div>
		<footer class="main-footer">
			@include('layouts.default.footer')
		</footer>
	</div>
</body>
@include('layouts.default.script')

</html>