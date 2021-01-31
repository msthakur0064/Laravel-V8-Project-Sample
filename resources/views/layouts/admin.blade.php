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

<body class="hold-transition skin-red layout-top-nav">
	<div class="wrapper">
		<header class="main-header">
			@include('layouts.admin.header')
		</header>
		<div class="content-wrapper">
			<div class="container">
				@yield('content')
			</div>
		</div>
		<footer class="main-footer">
			@include('layouts.admin.footer')
		</footer>
	</div>
</body>
@include('layouts.admin.script')

</html>