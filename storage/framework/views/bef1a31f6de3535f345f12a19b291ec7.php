
<?php $__env->startSection('title', $data->post_title); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->page_thumbnail); ?>
<?php $__env->startSection('content'); ?>
    <!-- banner section start -->
    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/' . $data->banner) : ''); ?>" alt="<?php echo e($data->post_title); ?>" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1  uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse uk-text-center" uk-grid>
                <div class="uk-width-1-2@m">
                    <ul class="uk-breadcrumb center-underline" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                        <li><span class="uk-primary"><?php echo e($data->post_title); ?></span></li>
                    </ul>
                    <div class="uk-banner-font" uk-scrollspy="target: h1,p,a; cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <h1 class="uk-white"><?php echo e($data->post_title); ?></h1>
                        <a class="uk-content uk-btn uk-button-text uk-white f-500" href="#section" uk-scroll=""> Scroll To Discover <span uk-icon="icon:arrow-right; ratio: 1.5"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- form section start -->
    <div>
        <div uk-grid>
            <div class="uk-width-1-5@l uk-banner-font primary-bg uk-flex uk-flex-middle uk-flex-center uk-visible@m">
                <h3 class="uk-white uk-margin-top uk-margin-bottom">Check Avalibilty</h3>
            </div>
            <div class="uk-width-4-5@l light-bg uk-margin-remove-top margin-left" style="padding:25px;">
                <form action="">
                    <div class="uk-floating-form  uk-grid">
                        <div class="uk-width-1-4@m uk-width-1-2@m uk-width-1-1">
                            <label for="checkin">
                            <input type="date" id="checkin" placeholder="checkin"> <span>Check In Date*</span> </label>
                        </div>
                        <div class="uk-width-1-4@m uk-width-1-2@m uk-width-1-1">
                            <label for="checkout">
                            <input type="date" id="checkout" placeholder="checkout"> <span>Check Out Date*</span> </label>
                        </div>
                        <div class="uk-width-1-4@m uk-width-1-1">
                            <label for="coupon">
                            <input type="text" id="coupon" placeholder="Enter Hotel Promo Code"> <span>Hotel Promo Coupon</span> </label>
                        </div>
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-width-1-4@m uk-width-1-1 uk-margin-small-top">
                            <a href="" class="uk-btn uk-btn-primary">Check Availibilty</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- form section end -->

    <!-- detail section start -->
    <section class="uk-section about-bg1" id="section">
        <div class="uk-container">
            <div class="uk-flex uk-flex-middle" uk-grid>
                <div class="uk-banner-font uk-width-expand@m">
                    <img src="<?php echo e(asset('themes-assets/img/design.png')); ?>" alt="" style="margin:0 9px 3px 0px">
                    <span class="uk-primary">About <?php echo e($data->post_title); ?></span>
                    <img src="<?php echo e(asset('themes-assets/img/arrow.png')); ?>" alt="" style="margin: 0 0px 5px 9px;">
                    <h2 class="uk-margin-remove uk-primary">ABout <?php echo e($data->post_title); ?></h2>
                </div>
                <?php if($data->associated_title): ?>
                    <div class="uk-width-auto@m uk-banner-font">
                        <h3 class="uk-price">Price: NRS. <?php echo e($data->associated_title); ?></h3>
                    </div>
                <?php endif; ?>
            </div>
            <?php echo $data->post_content; ?>

            <hr class="uk-divider-icon">
            <div uk-grid>
                <?php if(get_multiple_image($data->id)->count() > 0): ?>
                    <div class="uk-width-2-3@m">
                        <h3 class="uk-primary uk-text-uppercase"><?php echo e($data->post_title); ?> GALLERY</h3>
                        <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-bottom" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1" uk-lightbox="animation: slide">
                                <?php $__currentLoopData = get_multiple_image($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                        <a class="uk-inline uk-media-380" href="assets/img/01.jpg">
                                            <img src="<?php echo e(asset('uploads/medium/'.$row->file_name)); ?>" alt="<?php echo e($row->title); ?>">
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                        <?php if($data->associated_title): ?>
                            <div>
                                <a href="book.php" class="uk-btn uk-btn-primary  uk-margin-top">Book Now</a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if($data->features->count()>0): ?>
                    <div class="uk-width-1-3@m">
                        <div class="light-bg uk-padding">
                            <h3 class="uk-primary">Room facilities</h3>
                            <ul class="uk-child-width-1-2 uk-grid-small " uk-grid>
                                <?php $__currentLoopData = $data->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="uk-margin-bottom">
                                        <div class="uk-facility-icon">
                                            <img src="<?php echo e(asset('uploads/original/'.$feature->thumbnail )); ?>" alt="<?php echo e($feature->title); ?>" style="height: 32px;">
                                        </div>
                                        <div class="uk-facility-name"><?php echo e($feature->title); ?></div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- detail section end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/template-room-detail.blade.php ENDPATH**/ ?>