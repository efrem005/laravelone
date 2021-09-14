<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title>@section('title')@show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">
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
{{--                <img src="assets/images/logo-dark.png" height="24" alt="">--}}
            </a>
        </div>
        <div class="buy-button">
{{--            <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Buy Now</a>--}}
        </div><!--end login button-->
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
                                        <a href="{{route('category.item', ['item' => $item->slag])}}">{{$item->title}}</a>
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
<section class="bg-half bg-light d-table w-100">
    @yield('header_title')
</section><!--end section-->
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- Blog Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- BLog Start -->
            <div class="col-lg-8 col-md-6">
                <div class="row">
                    @yield('content')
                </div><!--end row-->
            </div><!--end col-->
            <!-- BLog End -->

            <!-- START SIDEBAR -->
            <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 sidebar sticky-bar rounded shadow">
                    <div class="card-body">
                        <!-- SEARCH -->
                        <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Поиск</h4>
                            <div id="search2" class="widget-search mt-4 mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="border rounded" name="s" id="s" placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- SEARCH -->

                        <!-- CATAGORIES -->
                        <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Категории</h4>
                            <ul class="list-unstyled mt-4 mb-0 blog-catagories">
                                @foreach($category as $item)
                                    <li>
                                        <a href="{{route('category.item', ['item' => $item->slag])}}">{{$item->title}}</a> <span class="float-right">{{$item->count}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- CATAGORIES -->

                        <!-- RECENT POST -->
                        <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Свежие новости</h4>
                            <div class="mt-4">
                                @foreach($news as $key => $value)
                                    @continue($key > 3)
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-left"> <a href="{{route('news.show', ['id' => $value->id])}}"> <img alt="img" src="/assets/images/blog/07.jpg" class="img-fluid rounded"></a></div>
                                        <div class="post-recent-content float-left"><a href="{{route('news.show', ['id' => $value->id])}}"><p>{{$value->title}}</p></a><span class="text-muted mt-2">{{$value->created_at}}</span></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- RECENT POST -->

                        <!-- TAG CLOUDS -->
                        <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Теги</h4>
                            <div class="tagcloud mt-4">
                                @foreach($category as $item)
                                <a href="{{route('category.item', ['item' => $item->slag])}}" class="rounded">{{$item->slag}}</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- TAG CLOUDS -->

                        <!-- SOCIAL -->
                        <div class="widget">
                            <h4 class="widget-title">Follow us</h4>
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
                        <!-- SOCIAL -->
                    </div>
                </div>
            </div><!--end col-->
            <!-- END SIDEBAR -->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Blog End -->

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
<a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

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
</body>
</html>
