<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<script src="https://use.fontawesome.com/7d41c26993.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;600&display=swap" rel="stylesheet">
    @yield('styles')
	<title>Hotel Ikram</title>

</head>
<body>
    @yield('header')
    <div class="containermain">
    	@yield('content')
    </div>
    @yield('footer')

@yield('scripts')
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/menu.js')}}" defer></script>


</body>
</html>