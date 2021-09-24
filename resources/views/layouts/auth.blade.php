<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title>Новостной блог | @section('title')@show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons -->
    <link href="{{asset('/assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- Main Css -->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css" id="theme-opt"/>
    <link href="{{asset('/assets/css/colors/default.css')}}" rel="stylesheet" id="color-opt">
</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<div class="back-to-home rounded d-none d-sm-block">
    <a href="{{route('home')}}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
</div>

<!-- Hero Start -->
@yield('content')
<!-- Hero End -->

<!-- javascript -->
<script src="{{asset('/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('/assets/js/scrollspy.min.js')}}"></script>
<!-- Icons -->
<script src="{{asset('/assets/js/feather.min.js')}}"></script>
<script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
<!-- Main Js -->
<script src="{{asset('/assets/js/app.js')}}"></script>
@stack('js')
</body>
</html>
