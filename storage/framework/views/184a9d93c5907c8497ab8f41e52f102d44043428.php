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
                <a href="<?php echo e(url('/changePassword')); ?>" class="suibscription_iptv" style="margin-right:10px">Change Password</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="suibscription_iptv">&nbsp;Sign in&nbsp;</a>
                <?php endif; ?>
            <?php endif; ?>
        </nav>
    </div>
</header>

<main id="main">
    <section id="pricing-plans">
        <div class="container">
            <div class="container2">
                <div class="section-header">
                    <h2>SELECT SUBSCRIPTION</h2>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $priceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInLeft" style="visibility: visible;">
                                <div class="bg-cls-div">
                                    <h3 class="h3_without-bg"><?php echo e($item->title); ?></h3>
                                    <p><?php echo e($item->price); ?>&dollar;</p>
                                    <h4><?php echo e($item->description); ?></h4>
                                </div>
                                <a href="<?php echo e(url('paypal/ec-checkout?mode=recurring&plan_id=')); ?><?php echo e($item->uid); ?>" class="download_mobile_btn">PAYPAL</a>
                                <form action="/subscribe_process" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="plan_id" value="<?php echo e($item->uid); ?>"/>
                                    <input type="hidden" name="stripe_plan_id" value="<?php echo e($item->stripe_plan_id); ?>"/>
                                    <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="<?php echo e(env('STRIPE_PUB_KEY')); ?>"
                                        data-amount="<?php echo e($item->price * 100); ?>"
                                        data-name="<?php echo e($item->title); ?>"
                                        data-description="<?php echo e($item->description); ?>"
                                        data-image="<?php echo e(asset('images/tenchis.png')); ?>"
                                        data-label="credit card"
                                        data-locale="auto"
                                        data-currency="usd">
                                    </script>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>