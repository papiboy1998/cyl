<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="divbox wow fadeInUp" data-wow-delay="450ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                <h1>About us</h1>
			    <p>Our team of expert lead generators have over 20 years combined experience in generationg leads for the MCA and Merchant Services Industries. We know what our finanical industry clients are looking for in a lead and our team delivers.</p>	 
                <ul class="points">
                    <li class="col-md-6">
                        <img src="<?php echo e(asset('cl/images/vision.png')); ?>">
                        <div class="clear"></div>
                        <h3>Vision Statement</h3>
                        <p>To provide unparalleled value to our clients and merchants and to simplify and enhance the lead generation process.</p>
                    </li>
                    <li class="col-md-6">
                        <img src="<?php echo e(asset('cl/images/targeting.png')); ?>">
                        <div class="clear"></div>
                        <h3>Mission Statement</h3>
                        <p>To provide an outstanding lead generation service by ensuring trust, security and accountability to benefit all participants.</p>
                    </li>
                </ul>
				<div class="clear"></div>
		   </div>
        </div>
    </div>
</section>

<section class="section" style="background:#fff">
    <div class="container">
        <div class="row">
            <div class="divbox wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            
                <h2>Posted Webform Leads</h2>
			    <p>Our team generates highly qualified leads via Google, Facebook, Email marketing and from our large affiliae base. These leads are aggregated into our central database where our qualifers qualify the leads. The leads are sent out in realtime to our clients via email and/or posted to their CRM.</p>	
				<div style="padding-top:40px"></div>
			
                <h2>Live Transfers</h2>
			    <p>We have 30 experienced agents who can deliver transfers to your sales team from monday to friday, from 10 AM EST to 6 PM EST.</p>
			    <div class="contact formbox">
                    <div class="contact-form">
                    <form action="#" class="row ">
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
                            <input type="email" class="form-control main" placeholder="Email Address*" required>
                        </div>
                            <div class="col-md-12">
                            <input type="text" class="form-control main" placeholder="Phone Number*" required>
                        </div>
                            <div class="col-md-12 form-group">
                            <select name="target" class="form-control">
                                <option>Choose Target</option>
                            </select>
                        </div>
                        <div class="col-md-12 ">
                            <button class="getstarted" type="submit">GET STARTED</button>
                        </div>
                    </form>
                    </div>
			    </div>
		    </div>
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