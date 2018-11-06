<?php $__env->startSection('content'); ?>

<div class="login-box" style="margin-top:100px">
    <div class="login-logo">
        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/logo2.png')); ?>"></a>
    </div>
    <div class="login-box-body">

        <?php if(session('status')): ?>
            <div class="alert alert-success"><?php echo e(session('status')); ?></div>
        <?php endif; ?>
        <?php if(session('warning')): ?>
            <div class="alert alert-warning"><?php echo e(session('warning')); ?></div>
        <?php endif; ?>

        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>">
            
            <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <input id="email" type="text" class="form-control login-forminput-model" name="email" value="<?php echo e(old('email')); ?>" placeholder="E-Mail Address" required autofocus>
                <?php if($errors->has('email')): ?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback" style="right: 0px;"><strong><?php echo e($errors->first('email')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <input id="password" type="password" class="form-control login-forminput-model" name="password" placeholder="Password" required>
                <?php if($errors->has('password')): ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback" style="right: 0px;"><strong><?php echo e($errors->first('password')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me</label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat login-formbtn">Sign In</button>
            </div>

            <div class="form-group">
                <a href="<?php echo e(route('password.request')); ?>">Forgot Your Password?</a>
            </div>

            <div class="form-group">
                Create TenchisTV account<a href="<?php echo e(route('register')); ?>">&nbsp;&nbsp;Sign Up</a>
            </div>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login_top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>