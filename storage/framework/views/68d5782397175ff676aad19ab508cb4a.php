
<?php $__env->startSection('title',$data->post_type); ?>
<?php $__env->startSection('meta_keyword',$data->meta_keyword); ?>
<?php $__env->startSection('meta_description',$data->meta_description); ?>
<?php $__env->startSection('thumbnail',$data->banner); ?>
<?php $__env->startSection('content'); ?>
    <!-- banner section start -->
    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/' . $data->banner) : asset('themes-assets/img/01.jpg')); ?>" alt="" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1  uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse uk-text-center" uk-grid >
                <div class="uk-width-1-2@m" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <ul class="uk-breadcrumb center-underline">
                        <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                        <li><span class="uk-primary"><?php echo e($data->uid); ?></span></li>
                    </ul>
                    <div class="uk-banner-font" uk-scrollspy="target: h1,p,a; cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <h1 class="uk-white"><?php echo e($data->uid); ?></h1>
                        <?php if($data->caption): ?>
                            <p class="uk-white uk-text-center"><?php echo e($data->caption); ?></p>
                        <?php endif; ?>
                        <a class="uk-content uk-btn uk-button-text uk-white f-500" href="#section" uk-scroll=""> Scroll To Discover <span uk-icon="icon:arrow-right; ratio: 1.5"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- about  hotel start -->
    <section class="uk-section  refokus-lines about-bg1" id="section">
        <div class="line"></div>
        <div class="line uk-hidden"></div>
        <div class="line"></div>
        <div class="uk-container uk-margin-bottom">
            <div uk-grid>
                <div class="uk-width-1-3@m uk-flex uk-flex-middle">
                    <div class="shadow"></div>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                        <div class="uk-slider-items uk-child-width-1-1" uk-lightbox="animation: slide">
                            <div>
                                <a class="uk-inline uk-media-380" href="assets/img/01.jpg">
                                    <img src="assets/img/01.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="uk-inline uk-media-380" href="assets/img/01.jpg">
                                    <img src="assets/img/01.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                </div>
                <div class="uk-width-2-3@m uk-flex uk-flex-middle">
                    <div class="uk-banner-font">
                        <img src="assets/img/design.png" alt="" style="margin:0 9px 3px 0px">
                        <span class="uk-primary">Hotel Tapwon</span>
                        <img src="assets/img/arrow.png" alt="" style="margin: 0 0px 5px 9px;">
                        <h2 class="uk-primary uk-margin-remove">Great Location, Service and Stay.</h2>
                        <p>Hotel Tapowan and Guest House is a homey hotel, located in peace and quite area in kathmandu, near airport at Koteshwor. This is the most loved hotel among people due to its peaceful environment and best services it offers. Moreover, it is situated in the strategic location and convenience to roam around the ancient and history laden shrines.The hotel is associated with number of tourism related associations in the country like Hotel Association of Nepal, Trekking Agents Association of Nepal etc.
                            <br><br>This hotel is found by Mr. Manoj Mehta who is well reputed personnel in the field of travel and tourism and recentely he is expanding his business in London.Hotel Tapowan and Guest House is a homey hotel, located in peace and quite area in kathmandu, near airport at Koteshwor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about  hotel end -->

    <!-- about another hotel start -->
    <section class="uk-section light-bg">
        <div class="uk-container uk-margin-bottom">
            <div uk-grid>
                <div class="uk-width-2-3@m uk-flex uk-flex-middle">
                    <div class="uk-banner-font">
                        <h2 class="uk-primary uk-margin-remove">Great Location, Service and Stay.</h2>
                        <p>Hotel Tapowan and Guest House is a homey hotel, located in peace and quite area in kathmandu, near airport at Koteshwor. This is the most loved hotel among people due to its peaceful environment and best services it offers. Moreover, it is situated in the strategic location and convenience to roam around the ancient and history laden shrines.The hotel is associated with number of tourism related associations in the country like Hotel Association of Nepal, Trekking Agents Association of Nepal etc.
                            <br><br>This hotel is found by Mr. Manoj Mehta who is well reputed personnel in the field of travel and tourism and recentely he is expanding his business in London.Hotel Tapowan and Guest House is a homey hotel, located in peace and quite area in kathmandu, near airport at Koteshwor.
                        </p>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-middle">
                    <div class="uk-media-380 uk-inline uk-transition-toggle" style="overflow:hidden;">
                        <img src="assets/img/05.jpg" class="uk-transition-scale-up uk-transition-opaque" alt="">
                    </div>
                    <div class="shadow4"></div>
                </div>

            </div>
        </div>
    </section>
    <!-- about another hotel end -->

    <!-- team section start -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-banner-font uk-text-center">
                <h2 class="uk-primary center-underline">Meet our team Members</h2>
            </div>
            <ul class=" uk-child-width-1-4@m uk-child-width-1-2 uk-grid-medium " uk-grid>
                <!--  -->
                <li class="uk-margin-top">
                    <div class="uk-team-list">
                        <div class="uk-media-307 uk-inline uk-transition-toggle" style="overflow:hidden;">
                            <img src="assets/img/user1.png" class="uk-transition-scale-up uk-transition-opaque">
                        </div>
                        <h3 class="uk-primary uk-margin-top uk-margin-remove-bottom"> Staff Name</h3>
                        <p class="uk-meta uk-black uk-margin-remove">Staff Position</p>
                    </div>
                </li>
                <li class="uk-margin-top">
                    <div class="uk-team-list">
                        <div class="uk-media-307 uk-inline uk-transition-toggle" style="overflow:hidden;">
                            <img src="assets/img/user2.png" class="uk-transition-scale-up uk-transition-opaque">
                        </div>
                        <h3 class="uk-primary uk-margin-top uk-margin-remove-bottom"> Staff Name</h3>
                        <p class="uk-meta uk-black uk-margin-remove">Staff Position</p>
                    </div>
                </li>
                <li class="uk-margin-top">
                    <div class="uk-team-list">
                        <div class="uk-media-307 uk-inline uk-transition-toggle" style="overflow:hidden;">
                            <img src="assets/img/user3.png" class="uk-transition-scale-up uk-transition-opaque">
                        </div>
                        <h3 class="uk-primary uk-margin-top uk-margin-remove-bottom"> Staff Name</h3>
                        <p class="uk-meta uk-black uk-margin-remove">Staff Position</p>
                    </div>
                </li>
                <li class="uk-margin-top">
                    <div class="uk-team-list">
                        <div class="uk-media-307 uk-inline uk-transition-toggle" style="overflow:hidden;">
                            <img src="assets/img/user4.png" class="uk-transition-scale-up uk-transition-opaque">
                        </div>
                        <h3 class="uk-primary uk-margin-top uk-margin-remove-bottom"> Staff Name</h3>
                        <p class="uk-meta uk-black uk-margin-remove">Staff Position</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- team section end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\crown\resources\views/themes/default/posttypeTemplate-about.blade.php ENDPATH**/ ?>