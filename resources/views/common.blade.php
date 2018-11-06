<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!--====== USEFULL META ======-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="mca, lead" />

        <!--====== TITLE TAG ======-->
        <title>{{ config('app.name', '') }}</title>
        <link href="{{ asset('images/favicon.png') }}" rel="icon">
        <link href="{{ asset('images/favicon.png') }}" rel="apple-touch-icon">

        <!--====== FAVICON ICON =======-->
        <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/ico">

        <!--====== STYLESHEETS ======-->
        <link rel="stylesheet" href="{{ asset('az/style.css') }}">

        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <body>

        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-circle"></div>
            <div class="preloader-img">
                <img src="{{ asset('az/img/core-img/leaf.png') }}" alt="">
            </div>
        </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
            <!-- ***** Top Header Area ***** -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="top-header-content d-flex align-items-center justify-content-between">
                                <!-- Top Header Content -->
                                <div class="top-header-meta">
                                </div>
                                <!-- Top Header Content -->
                                <div class="top-header-meta d-flex">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: <?=$business_mail?> </span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: <?=$business_phone?></span></a>
                                    <!-- Login -->
                                    <!-- <div class="login">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ***** Navbar Area ***** -->
            <div class="alazea-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="alazeaNav">
                            <!-- Nav Brand -->
                            <a href="index.html" class="nav-brand"><img src="{{ asset('images/small_h_logo.png') }}" alt=""></a>
                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>
                            <!-- Menu -->
                            <div class="classy-menu">
                                <!-- Close Button -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
                                <!-- Navbar Start -->
                                <div class="classynav">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/mca-lead') }}">MCA Leads</a></li>
                                        <li><a href="{{ url('/cash-discount-lead') }}">Cash Discount Leads</a></li>
                                        <li><a href="{{ url('/about') }}">About Us</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Navbar End -->
                            </div>
                        </nav>
                        <!-- Search Form -->
                        <div class="search-form">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                                <button type="submit" class="d-none"></button>
                            </form>
                            <!-- Close Icon -->
                            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->

        @yield('content')

        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area bg-img" style="background-image: url(az/img/bg-img/3.jpg);">
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="border-line"></div>
                        </div>
                        <div class="col-12 col-md-12 text-center">
                            <div class="copywrite-text">
                                <p>&copy;Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-md-6">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="#">MCA Leads</a></li>
                                        <li><a href="#">Cash Discount Leads</a></li>
                                        <li><a href="{{ url('/about') }}">About Us</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- ##### Footer Area End ##### -->

        <!-- ##### All Javascript Files ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="{{ asset('az/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('az/js/bootstrap/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('az/js/bootstrap/bootstrap.min.js') }}"></script>
        <!-- All Plugins js -->
        <script src="{{ asset('az/js/plugins/plugins.js') }}"></script>
        <!-- Active js -->
        <script src="{{ asset('az/js/active.js') }}"></script>

    </body>

</html>
