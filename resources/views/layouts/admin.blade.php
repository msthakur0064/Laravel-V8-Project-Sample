<!DOCTYPE html>
<html>

<head>
	@hasSection('title')
	<title>Knowledge Share | @yield('title')</title>
	@else
	<title>Knowledge Share</title>
	@endif
	@include('layouts.admin.head')
</head>

<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			@include('layouts.admin.header')
		</header>
		<aside class="main-sidebar">
			@include('layouts.admin.sidebar')
		</aside>
		<div class="content-wrapper">
			@yield('content')
		</div>
		<footer class="main-footer">
			@include('layouts.admin.footer')
		</footer>
	</div>
</body>
@include('layouts.admin.script')

</html>