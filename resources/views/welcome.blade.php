
@extends('common')

@section('content')

<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background:#F1F1F1 url(../cl/images/slider.png) no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style">
                        <h2 class="text-white text-bold mb-2">The <span class="lightyellow">BEST LEADS</span><br/>in the MCA industry!</h2>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">

        <div class="row">
            
            <div class="col-md-5 contact bannerform wow fadeInUp" data-wow-delay="450ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                <div class="needleads">
				    <h3>Need leads? Get info and pricing!</h3>
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

            <div class="col-md-6 pull-right imgtext wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                <h4>The best leads in the mca industry!</h4>

                <div class="clear space"></div>
                <div class="img"><img src="{{ asset('cl/images/005-trophy.png') }}" ></div>
			    <div class="text">8 Years of experience in the MCA and Merchant Services Industries.</div>
			
                <div class="clear space"></div>
			    <div class="img"><img src="{{ asset('cl/images/001-diploma.png') }}" ></div>
			    <div class="text">Fully Qualified Leads.</div>

                <div class="clear space"></div>
                <div class="img"><img src="{{ asset('cl/images/003-team.png') }}" ></div>
                <div class="text">Real Time Exclusive or Shared with one other Competitor.</div>

                <div class="clear space"></div>
                <div class="img"><img src="{{ asset('cl/images/002-record.png') }}" ></div>
                <div class="text">Phone Qualified with recording.</div>

			    <div class="clear space"></div>
			    <div class="img"><img src="{{ asset('cl/images/004-auction.png') }}" ></div>
			    <div class="text">TCPA Compliant and TCPA Litigator List Scrubbed Leads.</div>
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

<div style="padding-top:20px"></div>

@endsection
