<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- login23:11-->
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
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    @yield('form')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('Preclinic/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('Preclinic/js/popper.min.js') }}"></script>
    <script src="{{ asset('Preclinic/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Preclinic/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('Preclinic/js/app.js') }}"></script>
</body>


<!-- login23:12-->
</html>