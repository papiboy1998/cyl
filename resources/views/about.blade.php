
@extends('common')

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(az/img/bg-img/24.jpg);">
            <h2>ABOUT US</h2>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <section class="our-services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <!-- <h2>OUR SERVICES</h2> -->
                        <p>
                            Our team of expert lead generators have over 20 years combined experience in generationg leads for the MCA and Merchant Services Industries.   
                            We know what our finanical industry clients are looking for in a lead and our team delivers. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-12">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="{{ asset('az/img/core-img/s1.png') }}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Vision Statement</h5>
                                <p>To provide unparalleled value to our clients and merchants and to simplify and enhance the lead generation process.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="{{ asset('az/img/core-img/s2.png') }}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Mission Statement</h5>
                                <p>To provide an outstanding lead generation service by ensuring trust, security and accountability to benefit all participants.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Service Area End ##### -->

@endsection
