<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- blank-page24:04-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Preclinic/img/favicon.ico') }}">
    <title>{{ $page_title or config('app.name') }} | {{ $page_description or config('app.desc') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('Preclinic/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Preclinic/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Preclinic/css/style.css') }}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="{{ asset('Preclinic/img/logo.png') }}" width="35" height="35" alt=""> <span>
                    {{ config('app.name') }}               
                    </span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            @include('layouts.Preclinic.navbar.notification')
            @include('layouts.Preclinic.navbar.dropdown_mobile')
        </div>
        @include('layouts.Preclinic.sidebar.leftsidebar')
        <div class="page-wrapper">
            @yield('content')
            @include('layouts.Preclinic.navbar.notification_message')
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('Preclinic/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('Preclinic/js/popper.min.js') }}"></script>
    <script src="{{ asset('Preclinic/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Preclinic/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('Preclinic/js/app.js') }}"></script>
</body>


<!-- blank-page24:04-->
</html>