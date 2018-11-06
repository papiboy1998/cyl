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

        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('register')); ?>">
            
            <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                <input id="name" type="text" class="form-control login-forminput-model" name="name" value="<?php echo e(old('name')); ?>" placeholder="Name" required autofocus>
                <?php if($errors->has('name')): ?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback" style="right: 0px;"><strong><?php echo e($errors->first('name')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <input id="email" type="email" class="form-control login-forminput-model" name="email" value="<?php echo e(old('email')); ?>" placeholder="E-Mail Address" required>
                <?php if($errors->has('name')): ?>
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
                <input id="password-confirm" type="password" class="form-control login-forminput-model" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat login-formbtn">Register</button>
            </div>

            <div class="form-group">
                Already have an account?<a href="<?php echo e(route('login')); ?>">&nbsp;&nbsp;Sign In</a>
            </div>

        </form>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login_top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>