
<?php $__env->startSection('title',$data->post_title); ?>
<?php $__env->startSection('meta_keyword',$data->meta_keyword); ?>
<?php $__env->startSection('meta_description',$data->meta_description); ?>
<?php $__env->startSection('thumbnail',$data->page_thumbnail); ?>
<?php $__env->startSection('content'); ?>

<!-- HEADER START -->
<?php if($data->banner): ?>
<section class="uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center" uk-parallax="media: @m; viewport: 0.6;easing: 0.5; opacity: 1,1;y: 0, 250" uk-height-viewport data-src="<?php echo e(asset('uploads/original/'.$data->banner)); ?>" uk-img>
<?php else: ?>
<section class="uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center" uk-parallax="media: @m; viewport: 0.6;easing: 0.5; opacity: 1,1;y: 0, 250" uk-height-viewport data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown.svg" uk-img>
<?php endif; ?>
<div class="uk-overlay-innerpage uk-position-cover"></div>
<div class="uk-width-1-1"
    uk-scrollspy="target: [uk-scrollspy-class], .f-18, h1, p, a; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
    <div class="uk-container uk-container-large uk-position-relative">
        <div class="inherit-position uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m">
                <h1 class="uk-h1 uk-text-left text-white"><?php echo e($data->post_title); ?> </h1>
                <div class="f-18 uk-margin uk-width-large  uk-text-left text-white"><?php echo e($data->sub_title); ?></div>
            </div>
        </div>
        <div class="uk-margin-xlarge uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m">
                <div class="uk-margin uk-text-left text-white">
                    <a class="uk-content uk-button uk-button-text text-white" href="#section" uk-scroll=""> Scroll
                        To Discover </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- HEADER END -->

<!-- Section -->
<section class="uk-section-large uk-position-relative bg-white" id="section">
    <div class="uk-container  uk-container-large"
        uk-scrollspy="target:[uk-scrollspy-class], h1, h2, h3, h4, h5, h6, a, p, i, li, .uk-inline-clip; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
        <!--  -->
        <div class="uk-grid-large" uk-grid>
            <div class="uk-width-expand@m">
                <div uk-scrollspy="target:h1, p; cls: uk-animation-slide-bottom-medium;   delay: 50; repeat: true;">
                    <h1 class="uk-margin-medium-bottom">About this <span class="text-primary">Room</span> </h1>
                </div>
                <?php if($data->features->count()>0): ?>
                <ul class="uk-child-width-1-5@m uk-child-width-1-3  uk-grid-medium uk-room-facilities uk-margin-bottom"
                    uk-grid>
                      <?php $__currentLoopData = $data->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="uk-flex uk-flex-middle">
                        <?php if($feature->thumbnail): ?>
                        <div class="uk-facility-icon-primary uk-margin-small-right"><img src="<?php echo e(asset('uploads/original/'.$feature->thumbnail )); ?>" uk-svg alt=""></div>
                        <?php endif; ?>
                        <div class="uk-facility-name"><?php echo e($feature->title); ?></div>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>
                <div class="f-18 uk-margin-medium-top">
                   <?php echo $data->post_content; ?>

                    <!--  -->
                    <?php if($data->external_link ): ?>
                    <a href="<?php echo e($data->external_link); ?>" class="uk-button uk-button-primary-outline"> Book Now</a>
                    <?php else: ?>
                    <a href="<?php echo e(route('book_now',$data->uri)); ?>" class="uk-button uk-button-primary-outline"> Book Now</a>
                    <?php endif; ?>
                    <!--  -->
                </div>
            </div>

        </div>
        <!--  -->
    <?php if($gallery->count()>0): ?>
    <!-- gallery -->
    <div class="uk-child-width-1-1 uk-child-width-1-3@m uk-grid-match uk-grid"
    uk-height-match="target: > div > .uk-panel, > div > .uk-card; row: true" uk-grid="masonry: true"
    uk-lightbox="container: .uk-gallery-container; toggle: a[data-js-lightbox]" style="padding-bottom: 150px;">
    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <div class="uk-panel">
            <div class="uk-inline-clip uk-transition-toggle ">
                <img src="<?php echo e(asset('/uploads/medium/' . $image->file_name)); ?>" class="uk-transition-scale-up uk-transition-opaque"  alt="<?php echo e($image->title); ?>">
                <div class="uk-overlay uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                <div class="uk-position-center uk-light">
                <span class="uk-transition-fade uk-icon uk-overlay-icon" uk-overlay-icon=""></span>
                </div>
                <a class="uk-position-cover" data-js-lightbox="" href="<?php echo e(asset('/uploads/medium/' . $image->file_name)); ?>" data-caption="<?php echo e($image->title); ?>" data-type="image"></a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- end -->
    <?php endif; ?>
    </div>
</section>
<!-- Section end -->
<!-- Review -->
<section class="uk-section uk-background-cover uk-position-relative uk-background-norepeat uk-background-top"
    data-src="<?php echo e(asset('uploads/original/'.$review->banner)); ?>" uk-parallax="bgy: -200" uk-img>
    <div class="uk-overlay-home-full uk-position-cover"></div>
    <div class="uk-container uk-container-large">

        <div class="uk-padding uk-padding-remove-vertical uk-position-relative"
            uk-scrollspy="target: [uk-scrollspy-class], h1, h3, .uk-h4, .star-rating, .uk-review, .uk-meta; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
            <h1 class="text-white uk-text-center uk-margin-large-bottom"><?php echo e($review->uid); ?></h1>
            <div class=" " uk-slider="sets: true">
                <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                    <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@l uk-grid " uk-grid
                        uk-height-match="target: .uk-same-height">
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="uk-same-height bg-white uk-text-center uk-box-shadow-medium uk-padding  uk-display-block">
                                <h4 class="text-black"><?php echo e($row->post_title); ?></h4>
                                <span class="star-rating ">
                                    <span class="fa fa-star checked" aria-hidden="true"></span>
                                    <span class="fa fa-star checked" aria-hidden="true"></span>
                                    <span class="fa fa-star checked" aria-hidden="true"></span>
                                    <span class="fa fa-star checked" aria-hidden="true"></span>
                                    <span class="fa fa-star checked" aria-hidden="true"></span>
                                </span>                                        
                                <div class="uk-meta f-12 text-black uk-margin-top uk-flex-middle">
                                <img src="<?php echo e(asset('uploads/original/'.post_category($row->category)->thumbnail)); ?>" width="45" height="45" alt="">
                                    <?php echo e(post_category($row->category)->category); ?>

                                </div>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <ul class="uk-slider-nav uk-flex-center uk-dotnav uk-margin-top"></ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/room-single.blade.php ENDPATH**/ ?>