<!DOCTYPE html>
<html lang="en">
<head>
@yield('title')
@include('HomePage.insideHeadElement')


</head>

<body class="home">
	
		@include('HomePage.header')
		@include('HomePage.headerBottom')

			@yield('content')

		@include('HomePage.footer')
		@include('HomePage.BottomStyle')
</body>
</html>