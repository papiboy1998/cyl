<?php $__env->startSection('content'); ?>

<div class="login-box" style="margin-top:100px">
    <div class="login-logo">
        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/logo2.png')); ?>"></a>
    </div>
    <div class="login-box-body">

        <?php if(session('status')): ?>
            <div class="alert alert-success"><?php echo e(session('status')); ?></div>
        <?php endif; ?>

        <form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
            
            <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <input id="email" type="email" class="form-control login-forminput-model" name="email" value="<?php echo e(old('email')); ?>" placeholder="E-Mail Address" required autofocus>
                <?php if($errors->has('email')): ?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback" style="right: 0px;"><strong><?php echo e($errors->first('email')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-flat login-formbtn">Send Password Reset Link</button>
            </div>
            
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login_top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>