
@extends('common')

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(az/img/bg-img/24.jpg);">
            <h2>Cash Discount Processing Leads</h2>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <section class="portfolio-details-area section-padding-100-0">
        
        <div class="container">
            <div class="portfolio-text mb-20">
                <div class="row">
                    <div class="col-12">
                        <h5>Cash Discount Processing Leads</h5>
                        <p>
                            Cashyew's team of lead generators started by generating credit card processing leads. 
                            However, as the margins dwindled, credit card processing lead generation became unsustainable. 
                            Now, cash discount processing, where the merchant passes along the credit processing transaction costs to the customer, is becoming popular.
                        </p>
                        <p>
                            Merchant Cash Advance (MCA) began with credit card receivables. 
                            It is only natural that cash discount processing compliments an MCA. 
                            Our clients are able to offer working capital and credit card processing saving to their merchants.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-12 mb-30">
                    <p class="mb-20">
                        1. Minimum Requirements ­ 1 year in business (unless new business), 5K in monthly revenue, 500 or greater Fico credit score, no unresolved bankruptcy, business bank account.
                    </p>
                    <p class="mb-20">
                        2. Intent ­ Our qualifiers ensure you receive leads where the merchant is in the market to switch or get credit card processing. 
                        This starts with asking a series of questions to determine the merchant's true intent.
                    </p>
                    <p class="mb-20">
                        3. Expectations ­ Our qualifiers set the expectations with each merchant. 
                        The merchant will be prepared to submit his most current credit card processing statements.
                    <p>
                        Posted Webform Leads: Our team generates highly qualified leads via Google, Facebook, Email marketing and from our large affiliate base. 
                        These leads are aggregated into our central database where our qualifiers qualify the leads. 
                        The leads are sent out in realtime to our clients via email and/or posted to their CRM.
                    </p>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="search_by_terms">
                        <select class="custom-select widget-title">
                            @foreach ($cd_info_list as $item)
                                <option selected>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-12 col-lg-6 text-center">
                    <a href="#" class="btn alazea-btn">Get Leads</a>
                </div>

            </div>
        </div>
    </section>

@endsection
