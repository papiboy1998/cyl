<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CASHYEW</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  

        <link rel="stylesheet" href="<?php echo e(asset('cl/plugins/slick/slick.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('cl/plugins/slick/slick-theme.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('cl/plugins/fancybox/jquery.fancybox.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('cl/css/style.css')); ?>">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="<?php echo e(asset('cl/js/mainscript.js')); ?>"></script>

    </head>

    <body>    
        <div class="page-wrapper">        
            <section class="header-uper">
                <div class="container clearfix">
                    <div class="logo wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <figure>
                            <a href="index.html"><img src="<?php echo e(asset('cl/images/logo.png')); ?>" alt=""></a>
                        </figure>
                    </div>
                    <div class="right-side wow fadeInUp" data-wow-delay="350ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">                  
                        <div class="link-btn">
                            <img src="<?php echo e(asset('cl/images/phone_icon.png')); ?>"> <?=$business_phone?>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo e(url('/mca-lead')); ?>">MCA Leads </a></li>
                            <li><a href="<?php echo e(url('/cash-discount-lead')); ?>">Cash Discount Leads </a></li>
                            <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                            <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                            <li class="consultation"><a href="#" data-popup-open="popup-1">Free Consultation</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <?php echo $__env->yieldContent('content'); ?>

            <footer class="footer-main">
                <div class="footer-bottom">
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-md-4 c1  text-center">
                                <div class="copyright-text"><p>© 2018, CashYew company. <br/>All rights reserved </p></div>
                            </div>
                            <div class="col-md-4">
                                <div class="copyright-text social">
                                    <img src="<?php echo e(asset('cl/images/facebook.png')); ?>">
                                    <img src="<?php echo e(asset('cl/images/twitter.png')); ?>">
                                    <img src="<?php echo e(asset('cl/images/googleplus.png')); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="copyright-text c2 text-center">
                                <p>Design by <span class="lightyellow">ArtBelecky</span></p>
                                </div>
                            </div>            
                        </div>		
                    </div>			
                </div>
            </footer>

        </div>

        <script src="<?php echo e(asset('cl/plugins/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('cl/plugins/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('cl/plugins/bootstrap-select.min.js')); ?>"></script>
        <script src="<?php echo e(asset('cl/plugins/slick/slick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('cl/plugins/fancybox/jquery.fancybox.min.js')); ?>"></script>
        <script src="<?php echo e(asset('cl/plugins/validate.js')); ?>"></script>
        <script src="<?php echo e(asset('cl/plugins/wow.js')); ?>"></script>
        <script src="<?php echo e(asset('cl/plugins/jquery-ui.js')); ?>"></script>
        <script src="<?php echo e(asset('cl/js/script.js')); ?>"></script>

    </body>

</html>