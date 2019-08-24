<!doctype html>
<html lang="en">
<head>
@include('user.layout.header')
</head>
<body class="@yield('main-wrapper-class')">

@include('user.layout.nav')

<div class="introduction page-1">
	@section('content')
	@show
	@include('user.layout.footer')
</div>
@include('user.layout.script')
@yield('script')
</body>
</html>