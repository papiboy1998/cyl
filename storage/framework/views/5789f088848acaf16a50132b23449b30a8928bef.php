<?php $__env->startSection('content'); ?>

<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/ip-logo.png')); ?>" style="cursor:hand"/></a>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu"></ul>
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('logout')); ?>" class="suibscription_iptv" 
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">&nbsp;Sign out&nbsp;</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>

                <?php if(Auth::user()->payment_type =='2'): ?>   
                <a href="<?php echo e(url('/cancel_subscribe')); ?>" class="suibscription_iptv" style="margin-right:10px">Cancel Subscription</a>
                <?php endif; ?>

                <a href="<?php echo e(url('/changePassword')); ?>" class="suibscription_iptv" style="margin-right:10px">Change Password</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="suibscription_iptv">&nbsp;Sign in&nbsp;</a>
                <?php endif; ?>
            <?php endif; ?>
        </nav>
    </div>
</header>

<main id="main">

    <section class="section-header" style="margin-top:80px">
        <div class="container">
            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Name:</b> <?php echo e(Auth::user()->name); ?></h5></div>
            </div>
            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Email:</b> <?php echo e(Auth::user()->email); ?></h5></div>
            </div>
            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Status:</b> <?php echo e(Auth::user()->status); ?></h5></div>
            </div>

            <?php if(Auth::user()->payment_type =='2'): ?>   

            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Card Type:</b>  <?php echo e(Auth::user()->card_brand); ?></h5></div>
            </div>
            <div class="row">
                <div class="form-group col-md-4"><h5 class="title"><b>Card Last 4 Number:</b>  <?php echo e(Auth::user()->card_last_four); ?></h5></div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <div class="row">
                <div class="form-group submit_btn col-md-6">
                    <form action="/subscribe_card_update" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="<?php echo e(env('STRIPE_PUB_KEY')); ?>"
                            data-image="<?php echo e(asset('images/tenchis.png')); ?>"
                            data-name="<?php echo e(config('app.name', '')); ?>"
                            data-panel-label="Update Card Details"
                            data-label="Update Card Details"
                            data-allow-remember-me=false
                            data-locale="auto">
                        </script>
                    </form>
                </div>
            </div>

            <?php endif; ?>


        </div>
        
    </section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>