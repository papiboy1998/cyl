<?php $__env->startSection('content'); ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(az/img/bg-img/24.jpg);">
            <h2>MCA Lead Generation</h2>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    
    <section class="portfolio-details-area section-padding-100-0">
        
        <div class="container">
            <div class="portfolio-text mb-20">
                <div class="row">
                    <div class="col-12">
                        <h5>Our Industry Leading Qualifying Process</h5>
                        <p>
                            Cashyew has the most stringent lead qualification process in the MCA Lead Geneartion Industry. 
                            All of our leads are phone qualifed by experienced lead qualifiers, who ask up to 20 questions to qualify a lead. 
                            The questions are centered around three categories.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-12 mb-30">
                    <p class="mb-20">1. Minimum Requirements ­ 1 year in business, 10K in monthly revenue, 500 or greater Fico credit score, no unresolved bankruptcy, business bank account, positive daily and monthly balances.</p>
                    <p class="mb-20">2. Intent ­ Our qualifiers ensure you receive leads where the merchant is in the market for funding. This starts with asking a series of questions to determine the merchant's true intent.</p>
                    <p class="mb-20">3. Expectations ­ Our qualifiers set the expectations with each merchant. The merchant will be prepared to fill out a one page application and submit 4 months of his most recent bank statements.</p>
                    <p>
                        Posted Webform Leads: Our team generates highly qualified leads via Google, Facebook, Email marketing and from our large affiliae base. 
                        These leads are aggregated into our central database where our qualifers qualify the leads. 
                        The leads are sent out in realtime to our clients via email and/or posted to their CRM.
                    </p>
                    <p>
                        Live Transfers: We have 30 experienced agents who can deliver transfers to your sales team Monday ­ Friday from 10 AM EST to 6 PM EST.
                    </p>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="search_by_terms">
                        <select class="custom-select widget-title">
                            <?php $__currentLoopData = $mca_info_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option selected><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                
                <div class="col-12 col-lg-6 text-center">
                    <a href="#" class="btn alazea-btn">Get Leads</a>
                </div>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>