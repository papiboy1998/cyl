<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="divbox wow fadeInUp" data-wow-delay="450ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            <h1>Contact us</h1>
            <div class="contact">
                <div class="contact-form">
                    <form action="#" class="row ">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control main" placeholder="Your Name*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control main" placeholder="Email Address*" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control main" placeholder="Company name">
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="message" rows="5" class="form-control main" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-12 ">
                            <button class="getstarted" type="submit">SEND MESSAGE</button>
                        </div>
                    </form>
                </div>
			</div>
			<div class="clear"></div>
		</div>
    </div>
</section>

<div class="popup" data-popup="popup-1">
	<div class="popup-inner">
		<h2>Get FREE consulltation!</h2>
		<div class="contact">
            <div class="contact-form">
                <form action="#">                       
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control main" placeholder="First Name*" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control main" placeholder="Last Name*" required>
                    </div>                        
                    <div class="col-md-12">
                        <input type="text" class="form-control main" placeholder="Company name">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control main" placeholder="Phone Number*" required>
                    </div>
                    <div class="col-md-12 ">
                        <button class="getstarted" type="submit">GET CONSULLTATION</button>
                    </div>
                </form>
            </div>
        </div>
		<a class="popup-close" data-popup-close="popup-1" href="#">x</a>
		<div class="clear" style="height:30px"></div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>