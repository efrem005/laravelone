<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Аккаунт | @section('title')@show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{asset('/assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- Slider -->
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}"/>
    <!-- Main Css -->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />
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

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{route('home')}}">
                <img src="{{asset('assets/images/logo-dark.png')}}" height="24" alt="">
            </a>
        </div>
        @guest
            @if (Route::has('login'))
                <div style="float: right; line-height: 22px; margin-top: 16px">
                    <a class="btn btn-pills btn-info" href="{{ route('login') }}">{{ __('Войти') }}</a>
                </div>
            @endif
        @else
            <div style="float: right; line-height: 22px; margin-top: 16px">
                <div class="btn-group dropdown-primary">
                    <button type="button" class="btn btn-pills @if(Auth::user()->is_admin) btn-secondary @else btn-info @endif dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item @if(request()->routeIs('home')) active @endif" href="{{route('home')}}">Главная</a>
                        @if(Auth::user()->is_admin)
                            <a class="dropdown-item" href="{{route('admin.')}}">Админинка</a>
                        @endif
                        <a class="dropdown-item @if(request()->routeIs('account.*')) active @endif" href="{{ route('account.settings') }}">Кабинет</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" style="color: red"
                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __('выход') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
    @endguest
    <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{route('home')}}">главная</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">категории</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                @foreach($category as $item)
                                    <li>
                                        <a href="{{route('category.item', ['item' => $item->id])}}">{{$item->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="/about">о нас</a></li>
            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Buy Now</a>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->

<!-- Hero Start -->
{{--<section class="bg-profile bg-light d-table w-100 bg-success">--}}
<section class="bg-profile d-table w-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3 text-md-left text-center">
                                <img src="@if(Auth::user()->avatar) {{Auth::user()->avatar}} @else /assets/images/users/avatar-7.jpg @endif" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                            </div><!--end col-->

                            <div class="col-lg-10 col-md-9">
                                <div class="row align-items-end">
                                    <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                        <h3 class="title mb-0">{{Auth::user()->name}}</h3>
                                        <small class="text-muted h6 mr-2">Web Developer</small>
                                        <ul class="list-inline mb-0 mt-3">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted" title="Instagram"><i data-feather="instagram" class="fea icon-sm mr-2"></i>krista_joseph</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted" title="Facebook"><i data-feather="facebook" class="fea icon-sm mr-2"></i>Krista Joseph</a></li>
                                        </ul>
                                    </div><!--end col-->
                                    <div class="col-md-5 text-md-right text-center">
                                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Add Friend"><i data-feather="user-plus" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Messages"><i data-feather="message-circle" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Notifications"><i data-feather="bell" class="fea icon-sm fea-social"></i></a></li>
                                            <li class="list-inline-item"><a href="{{route('account.settings')}}" class="rounded" data-toggle="tooltip" data-placement="bottom" title="Settings"><i data-feather="tool" class="fea icon-sm fea-social"></i></a></li>
                                        </ul><!--end icon-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--ed container-->
</section><!--end section-->
<!-- Hero End -->

<!-- Profile Start -->
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                <div class="sidebar sticky-bar p-4 rounded shadow">
                    <div class="widget">
                        <h5 class="widget-title">Followers :</h5>
                        <div class="row mt-4">
                            <div class="col-6 text-center">
                                <i data-feather="user-plus" class="fea icon-ex-md text-primary mb-1"></i>
                                <h5 class="mb-0">2588</h5>
                                <p class="text-muted mb-0">Followers</p>
                            </div><!--end col-->

                            <div class="col-6 text-center">
                                <i data-feather="users" class="fea icon-ex-md text-primary mb-1"></i>
                                <h5 class="mb-0">454</h5>
                                <p class="text-muted mb-0">Following</p>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>

                    <div class="widget mt-4 pt-2">
                        <h5 class="widget-title">Projects :</h5>
                        <div class="progress-box mt-4">
                            <h6 class="title text-muted">Progress</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:50%;">
                                    <div class="progress-value d-block text-muted h6">24 / 48</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                    </div>

                    <div class="widget">
                        <div class="row">
                            <div class="col-6 mt-4 pt-2">
                                <a href="{{route('account.profile')}}" class="accounts @if(request()->routeIs('account.profile')) active @endif rounded d-block shadow text-center py-3">
                                    <span class="pro-icons h3 text-muted"><i class="uil uil-dashboard"></i></span>
                                    <h6 class="title text-dark h6 my-0">Profile</h6>
                                </a>
                            </div><!--end col-->

                            <div class="col-6 mt-4 pt-2">
                                <a href="{{route('account.messages')}}" class="accounts @if(request()->routeIs('account.messages')) active @endif rounded d-block shadow text-center py-3">
                                    <span class="pro-icons h3 text-muted"><i class="uil uil-envelope-star"></i></span>
                                    <h6 class="title text-dark h6 my-0">Messages</h6>
                                </a>
                            </div><!--end col-->

                            <div class="col-6 mt-4 pt-2">
                                <a href="{{route('account.settings')}}" class="accounts @if(request()->routeIs('account.settings')) active @endif rounded d-block shadow text-center py-3">
                                    <span class="pro-icons h3 text-muted"><i class="uil uil-setting"></i></span>
                                    <h6 class="title text-dark h6 my-0">Settings</h6>
                                </a>
                            </div><!--end col-->

                            <div class="col-6 mt-4 pt-2">
                                <a href="{{route('logout')}}" class="accounts rounded d-block shadow text-center py-3"
                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    <span class="pro-icons h3 text-muted"><i class="uil uil-sign-out-alt text-danger"></i></span>
                                    <h6 class="title text-danger h6 my-0">Logout</h6>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>

                    <div class="widget mt-4 pt-2">
                        <h5 class="widget-title">Follow me :</h5>
                        <ul class="list-unstyled social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div>
            </div><!--end col-->

            @yield('content')
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Profile Setting End -->

<!-- Footer Start -->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-left">
                    © <script>document.write(new Date().getFullYear())</script> <span class="mb-0">News channel</span>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="{{route('home')}}" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

<!-- javascript -->
<script src="{{asset('/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('/assets/js/scrollspy.min.js')}}"></script>
<!-- SLIDER -->
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/owl.init.js')}}"></script>
<!-- Icons -->
<script src="{{asset('/assets/js/feather.min.js')}}"></script>
<script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
<!-- Main Js -->
<script src="{{asset('/assets/js/app.js')}}"></script>
@stack('js')
</body>
</html>
