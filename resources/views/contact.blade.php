
@extends('common')

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(az/img/bg-img/24.jpg);">
            <h2>Contact US</h2>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Info Start ##### -->
    <div class="contact-area-info section-padding-50-50">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-12 col-lg-12">
                    <div class="checkout_details_area clearfix">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="first_name">Your Name *</label>
                                    <input type="text" class="form-control" id="first_name" value="" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="last_name">Your Email *</label>
                                    <input type="text" class="form-control" id="last_name" value="" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="company">Subject</label>
                                    <input type="text" class="form-control" id="company" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Message</label>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="30" placeholder=""></textarea>
                                </div>
                                <div class="col-12 col-lg-12 text-center mr-30">
                                    <a href="#" class="btn alazea-btn">Send Message</a>
                                </div>
                                <div class="col-12 mb-4">
                                </div>
                                <div class="col-12 mb-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Contact Area Info End ##### -->

@endsection
