
<?php $__env->startSection('meta_keyword', $setting->meta_key); ?>
<?php $__env->startSection('meta_description', $setting->meta_description); ?>
<?php $__env->startSection('content'); ?>

    <!-- banner slider start-->
    <?php if($banners): ?>
        <div class="swiper mySwiper  banner-carousel">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="uk-inline hero-items" uk-scrollspy="target: span,h1,a; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                            <img src="<?php echo e(asset('uploads/banners/'.$row->picture)); ?>" width="1800" height="1200" alt="">
                            <div class="uk-overlay uk-overlay-primary uk-position-cover uk-banner-overlay uk-flex uk-flex-middle uk-flex-center uk-flex-column
                            ">
                                <div class="uk-banner-font uk-width-1-1 uk-width-1-2@m uk-text-center uk-margin-large-top">
                                    <span class="uk-white center-underline"><?php echo e($row->title); ?></span>
                                    <h1><?php echo e($row->caption); ?></h1>
                                </div>
                                <?php if($row->link_title): ?>
                                    <a href="<?php echo e($row->link); ?>" class="uk-btn uk-btn-primary"><?php echo e($row->link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    <?php endif; ?>
    <!-- banner slider end -->
    <!-- form section start -->
    <div>
        <div uk-grid>
            <div class="uk-width-1-5@l uk-banner-font primary-bg uk-flex uk-flex-middle uk-flex-center uk-visible@m" uk-scrollspy="target: h3; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                <h3 class="uk-white uk-margin-top uk-margin-bottom">Check Avalibilty</h3>
            </div>
            <div class="uk-width-4-5@l light-bg uk-margin-remove-top margin-left" style="padding:25px;">
                <form action="">
                    <div class="uk-floating-form  uk-grid" uk-scrollspy="target: label,input,a; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
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
    <!-- introduction section start -->
    <?php if($aboutPost): ?>
        <section class="uk-section  refokus-lines about-bg1">
            <div class="line"></div>
            <div class="line uk-hidden"></div>
            <div class="line"></div>
            <div class="uk-container uk-margin-bottom">
                <div uk-grid>
                    <div class="uk-width-1-3@m uk-flex uk-flex-middle"  uk-scrollspy=" cls: uk-animation-fade; delay: 100; repeat: false;">
                        <div class="shadow"></div>
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1" uk-lightbox="animation: slide">
                                <?php if($row->page_thumbnail): ?>
                                    <div>
                                        <a class="uk-inline uk-media-380" href="<?php echo e(asset('uploads/original/'.$aboutPost->page_thumbnail)); ?>">
                                            <img src="<?php echo e(asset('uploads/original/'.$aboutPost->page_thumbnail)); ?>" alt="<?php echo e($aboutPost->post_title); ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <?php if(get_multiple_image($aboutPost->id)->count() > 0): ?>
                                    <?php $__currentLoopData = get_multiple_image($aboutPost->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div>
                                            <a class="uk-inline uk-media-380" href="<?php echo e(asset('uploads/medium/'.$image->file_name)); ?>">
                                                <img src="<?php echo e(asset('uploads/medium/'.$image->file_name)); ?>" alt="<?php echo e($image->title); ?>">
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <?php if(get_multiple_image($aboutPost->id)->count() > 0): ?>
                                <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="uk-width-2-3@m" uk-scrollspy="target: img,h2,p,a; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <div class="uk-banner-font">
                            <img src="<?php echo e(asset('themes-assets/img/design.png')); ?>" alt="" style="margin:0 9px 3px 0px">
                            <span class="uk-primary"><?php echo e($aboutPost->sub_title); ?></span>
                            <img src="<?php echo e(asset('themes-assets/img/arrow.png')); ?>" alt="" style="margin: 0 0px 5px 9px;">
                            <h2 class="uk-primary uk-margin-remove"><?php echo e($aboutPost->post_title); ?></h2>
                            <?php echo $aboutPost->post_excerpt; ?>

                        </div>
                        <a href="<?php echo e(url('page/' . posttype_url($about->uri))); ?>" class="uk-btn uk-btn-primary  uk-margin-bottom">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- introduction section end -->

    <!-- hotels section start -->
    <?php if($ourHotelsPosts): ?>
        <section class="">
            <div class="uk-section primary-bg">
                <div class="uk-text-center uk-banner-font " uk-scrollspy="target: h2,p; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <h2 class="uk-white"><?php echo e($ourHotels->post_type); ?></h2>
                    <p class="uk-text-center uk-white"><?php echo e($ourHotels->caption); ?></p>
                </div>
            </div>
            <div class="uk-container hotel-container">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="sets: true">
                    <div class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-3@l uk-grid" uk-scrollspy="target: .uk-activities; cls: uk-animation-slide-top-small; delay: 150; repeat: false;">
                        <?php $__currentLoopData = $ourHotelsPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="uk-media-450 uk-activities">
                                <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>" class="uk-inline uk-transition-toggle uk-link-toggle uk-height-1-1 uk-width-1-1" style="overflow:hidden;">
                                    <img src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail)); ?>" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                                    <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                                    <div class="uk-overlay uk-position-center uk-light uk-text-center uk-margin-left">
                                        <h3 class="uk-white uk-text-uppercase uk-margin-remove"><?php echo e($row->post_title); ?></h3>
                                        <h3 class="uk-white  uk-margin-remove"><?php echo e($row->sub_title); ?></h3>
                                        <div class="uk-margin-top">
                                            <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>" class="uk-btn uk-btn-primary">Know More</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small next-btn " href uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- hotels section end -->

    <!-- room section start -->
    <?php if($roomsPosts): ?>
        <section class="uk-section about-bg2">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-middle" uk-scrollspy="target: h2,p,a; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <div class="uk-banner-font uk-width-1-4@m">
                        <h2 class="uk-primary"><?php echo e($rooms->uid); ?></h2>
                    </div>
                    <div class="uk-banner-font uk-width-3-4@m">
                        <div class="uk-grid">
                            <div class="uk-width-3-4@m">
                                <?php echo $rooms->content; ?>

                            </div>
                            <div class="uk-width-1-4@m uk-flex uk-flex-middle uk-flex-right uk-visible@s">
                                <a href="<?php echo e(url('page/' . posttype_url($rooms->uri))); ?>" class="uk-btn uk-btn-primary">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-container">
                <div class="uk-position-relative uk-visible-toggle  uk-margin-top" tabindex="-1" uk-slider="sets: true">
                    <?php if($roomsPosts->count() > 0): ?>
                        <div class="uk-slider-items uk-child-width-1-1 uk-grid" uk-scrollspy="target: .uk-activities; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                            <?php $__currentLoopData = $roomsPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class=" uk-activities uk-grid-collapse" uk-grid uk-height-match="target: .uk-same-height;">
                                    <div class="uk-width-1-3@m uk-flex uk-flex-middle ">
                                        <div class="shadow2 uk-visible@s"></div>
                                        <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>" class="uk-inline uk-transition-toggle uk-link-toggle uk-height-1-1 uk-media-307 uk-same-height" style="overflow:hidden;">
                                            <img src="<?php echo e($row->page_thumbnail ? asset('uploads/original/' . $row->page_thumbnail) : asset('themes-assets/img/default.png')); ?>" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="<?php echo e($row->post_title); ?>sss">
                                        </a>
                                    </div>
                                    <div class="uk-width-2-3@m">
                                        <div class="uk-package-detail light-bg uk-same-height">
                                            <div class="uk-package-font">
                                                <div class="uk-flex uk-flex-between">
                                                    <h3 class="uk-black uk-text-uppercase uk-margin-remove"><?php echo e($row->post_title); ?></h3>
                                                    <?php if($row->associated_title): ?>
                                                        <h3 class="uk-black uk-text-uppercase uk-margin-remove">NRS. <?php echo e($row->associated_title); ?></h3>
                                                    <?php endif; ?>
                                                </div>
                                                <hr>
                                                <?php if($row->features && $row->features->count()>0): ?>
                                                    <ul class="uk-child-width-1-5@m uk-child-width-1-3 uk-grid-small uk-room-facilities" uk-grid>
                                                        <?php $__currentLoopData = $row->features->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <div class="uk-facility-icon">
                                                                    <img src="<?php echo e(asset('uploads/original/'.$feature->thumbnail )); ?>" alt="<?php echo e($feature->title); ?>" style="height: 32px;">
                                                                </div>
                                                                <div class="uk-facility-name"><?php echo e($feature->title); ?></div>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                                <div class="room-list-content">
                                                    <?php echo $row->post_excerpt; ?>

                                                </div>
                                                <div>
                                                    <a href="<?php echo e(route('book_now', $row->uri)); ?>" class="uk-btn uk-btn-primary  uk-margin-bottom">Book Now</a>
                                                    <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>" class="uk-btn uk-btn-primary-outline  uk-margin-bottom">Discover Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="uk-flex uk-flex-between uk-flex-center@m uk-flex-middle uk-light uk-margin-top" uk-scrollspy="cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <div>
                            <a class=" uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous" style="padding: 10px 14px; margin: 10px 4px;"></a>
                            <a class=" uk-position-small next-btn " href uk-slidenav-next uk-slider-item="next" style="padding: 10px 14px; margin: 10px 4px;"></a>
                        </div>
                        <div class="uk-hidden@m">
                            <a href="<?php echo e(url('page/' . posttype_url($rooms->uri))); ?>" class="uk-btn uk-btn-primary">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- room section end -->

    <!-- services section start -->
    <?php if($servicesPosts && associatedPostsForHome($servicesPosts->id)->count() > 0): ?>
        <section class=" uk-section uk-cover-container uk-position-relative uk-background-norepeat uk-background-cover uk-background-top-center " uk-height-viewport data-src="<?php echo e($services->banner ? asset('uploads/original/' . $services->banner) : ''); ?>" alt="<?php echo e($services->post_type); ?>" uk-img>
            <div class="uk-overlay-banner uk-position-cover"></div>
            <div class="uk-container uk-position-relative">
                <div class="uk-banner-font uk-text-center" uk-scrollspy="target: h2,p; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <h2 class="uk-white"><?php echo e($servicesPosts->sub_title); ?></h2>
                    <div class="service-content">
                        <?php echo $servicesPosts->post_excerpt; ?>

                    </div>
                </div>
            </div>
            <div class="uk-container">
                <div class="uk-position-relative uk-visible-toggle  uk-margin-top uk-light" tabindex="-1" uk-slider="sets: true" >
                    <div class="uk-slider-items uk-child-width-1-1 uk-grid" uk-scrollspy="target: .uk-media-450; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <?php $__currentLoopData = associatedPostsForHome($servicesPosts->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="uk-media-450 uk-width-1-1">
                                <a href="<?php echo e(route('page.associated', $row->uri)); ?>" class="uk-inline uk-transition-toggle uk-link-toggle uk-height-1-1 uk-width-1-1" style="overflow:hidden;">
                                    <?php if($row->thumbnail): ?>
                                        <img src="<?php echo e(asset('uploads/original/' . $row->thumbnail)); ?>" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                                    <?php endif; ?>
                                    <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                                    <div class="uk-overlay uk-position-center uk-light uk-text-center uk-margin-left">
                                        <h2 class="uk-white uk-text-uppercase uk-margin-remove"><?php echo e($row->title); ?></h2>
                                        <p class="uk-white  uk-margin-remove"><?php echo e($row->brief); ?></p>
                                        <div class="uk-margin-top">
                                            <a href="<?php echo e(route('page.associated', $row->uri)); ?>" class="uk-btn uk-btn-primary">Know More</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin "></ul>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- services section end -->

    <!-- dining section start -->
    <?php if($dinningPosts->count() > 0): ?>
        <section class="uk-section refokus-lines">
            <div class="line"></div>
            <div class="line uk-hidden"></div>
            <div class="line"></div>
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-middle" uk-scrollspy="target: h2,p,a; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <div class="uk-banner-font uk-width-1-4@m">
                        <h2 class="uk-primary"><?php echo e($dinning->uid); ?>

                        </h2>
                    </div>
                    <div class="uk-banner-font uk-width-3-4@m">
                        <div class="uk-grid">
                            <div class="uk-width-3-4@m">
                                <?php echo $dinning->content; ?>

                            </div>
                            <div class="uk-width-1-4@m uk-flex uk-flex-middle uk-flex-right uk-visible@s">
                                <a href="<?php echo e(url('page/' . posttype_url($dinning->uri))); ?>" class="uk-btn uk-btn-primary">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-container">
                <div class="uk-position-relative uk-visible-toggle  uk-margin-top" tabindex="-1" uk-slider="sets: true" uk-scrollspy="target: .uk-slider-items; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <div class="uk-slider-items uk-child-width-1-1 uk-grid">
                        <?php $__currentLoopData = $dinningPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class=" uk-activities uk-grid-collapse" uk-grid>
                                <div class="uk-width-1-2@m uk-flex uk-flex-middle " uk-height-match="target: .uk-activity;">
                                    <div class="shadow3 uk-visible@s"></div>
                                    <a href="service-detail.php" class="uk-inline uk-transition-toggle uk-link-toggle  uk-media-450 uk-activity" style="overflow:hidden; height:100%;">
                                        <img src="<?php echo e($row->page_thumbnail ? asset('uploads/original/' . $row->page_thumbnail) : asset('themes-assets/img/default.png')); ?>" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="<?php echo e($row->post_title); ?>">
                                    </a>
                                </div>
                                <div class="uk-width-1-2@m  uk-flex uk-flex-middle uk-meeting">
                                    <div class="uk-package-detail uk-activity">
                                        <div class="uk-package-font">
                                            <h2 class="uk-primary uk-text-uppercase uk-margin-remove"><?php echo e($row->post_title); ?></h2>
                                            <hr>
                                            <?php echo $row->post_excerpt; ?>

                                            <!-- <p><b>Opening Hours:</b></p>
                                            <ul class="uk-facilities-list">
                                                <li>Breakfast: from 06:30 AM until 10:30 AM</li>
                                                <li>Lunch: from 12:00 PM (Noon) until 03:00 PM</li>
                                                <li>Dinner: from 06:00 PM until 10:00 PM (last order by 09:30 PM)</li>
                                            </ul> -->
                                            <div>
                                                <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>" class="uk-btn uk-btn-primary  uk-margin-bottom">Discover Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="uk-flex uk-flex-between uk-flex-center@m uk-flex-middle uk-light uk-margin-top" uk-scrollspy=" cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <div>
                            <a class=" uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous" style="padding: 10px 14px; margin: 10px 4px;"></a>
                            <a class=" uk-position-small next-btn " href uk-slidenav-next uk-slider-item="next" style="padding: 10px 14px; margin: 10px 4px;"></a>
                        </div>
                        <div class="uk-hidden@m">
                            <a href="<?php echo e(url('page/' . posttype_url($dinning->uri))); ?>" class="uk-btn uk-btn-primary">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- dining section end -->

    <!-- review section start -->
    <?php if($reviewPosts->count() > 0): ?>
        <section class="uk-section grey-bg uk-background-norepeat uk-background-cover uk-background-center-center " data-src="<?php echo e(asset('themes-assets/img/pattern.png')); ?>" uk-img>
            <div class="uk-container uk-container-small">
                <div class="uk-banner-font" uk-scrollspy=" cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <h2 class="uk-margin-remove uk-text-center uk-primary"><?php echo e($review->uid); ?></h2>
                </div>
                <div class=" uk-padding-large uk-border-rounded uk-padding-remove-bottom">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:true; sets: true;">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m uk-grid-large" uk-height-match="target:.uk-testimonial;" uk-grid uk-scrollspy="target: img,p,h3; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                            <?php $__currentLoopData = $reviewPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!--  -->
                                <li>
                                    <div class="uk-grid-large" uk-grid>
                                        <div class="uk-width-1-4@s uk-flex uk-flex-center">
                                            <div class="uk-testimonial-img ">
                                                <img src="<?php echo e($row->page_thumbnail ? asset('uploads/original/' . $row->page_thumbnail) : asset('themes-assets/img/user.jpg')); ?>" alt="<?php echo e($row->post_title); ?>">
                                            </div>
                                        </div>
                                        <div class="uk-width-expand@s">
                                            <div class="uk-testimonial">
                                                <div class="uk-testimonial-body f-18">
                                                    <?php echo $row->post_excerpt; ?>

                                                    <h3 class="uk-margin-top uk-primary"><?php echo e($row->post_title); ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--  -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <ul class="uk-slider-nav uk-dotnav  uk-margin-medium-top uk-flex-center"></ul>
                    </div>
                </div>
            </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- review section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/frontpage.blade.php ENDPATH**/ ?>