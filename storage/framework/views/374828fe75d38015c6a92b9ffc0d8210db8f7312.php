<!doctype html>
<html class="no-js" lang="en">

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TenchisTV is an application that was developed for our subscribers on Android." />
    <meta name="keywords" content="iptv, tenchis, tenchistv, tv" />

    <!--====== TITLE TAG ======-->
    <title><?php echo e(config('app.name', '')); ?></title>
    <link href="<?php echo e(asset('images/tenchis_icon.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('images/tenchis_icon.png')); ?>" rel="apple-touch-icon">

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="<?php echo e(asset('second/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('second/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('second/css/modal-video.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('second/css/stellarnav.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('second/css/owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('second/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('second/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('second/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('second/css/material-icons.css')); ?>">

    <!--====== MAIN STYLESHEETS ======-->
    <link rel="stylesheet" href="<?php echo e(asset('second/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('second/css/responsive.css')); ?>">

    <script src="<?php echo e(asset('second/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="home-two" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <?php if(Route::has('login')): ?>
        <?php if(auth()->guard()->check()): ?>
            <div class="search-and-signup-button white pull-right hidden-md hidden-sm hidden-xs">
                <a href="<?php echo e(route('logout')); ?>" class="sign-up" style="color:#fff">Sign out</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
            <div class="search-and-signup-button white pull-right hidden-md hidden-sm hidden-xs">
                <a href="<?php echo e(route('home')); ?>" class="sign-up" style="color:#fff">Profile</a>
            </div>
        <?php else: ?>
            <div class="search-and-signup-button white pull-right hidden-md hidden-sm hidden-xs">
                <a href="<?php echo e(route('login')); ?>" class="sign-up" style="color:#fff">Sign In</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    
    <!--PRICING AREA-->
    <section class="about-area gray-bg section-padding" id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow">
                        <h2>Pricing Table</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $priceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-price center wow">
                        <div class="price-hidding">
                            <h2><?php echo e($item->title); ?></h2>
                        </div>
                        <div class="price-rate">
                            <h2><sup>$</sup><?php echo e($item->price); ?></h2>
                        </div>
                        <div class="price-details">
                            <p><?php echo e($item->description); ?></p>
                            <!-- <ul>
                                <li>One User</li>
                                <li>1000 ui elements</li>
                                <li>E-mail support</li>
                            </ul> -->
                        </div>
                        <div class="buy-now-button">
                            <a href="<?php echo e(route('register')); ?>" class="read-more">Sign up</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--PRICING AREA END-->

    <!--====== SCRIPTS JS ======-->
    <script src="<?php echo e(asset('second/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/vendor/bootstrap.min.js')); ?>"></script>

    <!--====== PLUGINS JS ======-->
    <script src="<?php echo e(asset('second/js/vendor/jquery.easing.1.3.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/vendor/jquery-migrate-1.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/vendor/jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/stellar.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/jquery-modal-video.min.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/stellarnav.min.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/contact-form.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/jquery.ajaxchimp.js')); ?>"></script>
    <script src="<?php echo e(asset('second/js/jquery.sticky.js')); ?>"></script>

    <!--===== ACTIVE JS=====-->
    <script src="<?php echo e(asset('second/js/main.js')); ?>"></script>
</body>

</html>
