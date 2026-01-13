
<?php $__env->startSection('meta_keyword', $setting->meta_key); ?>
<?php $__env->startSection('meta_description', $setting->meta_description); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('themes.default.common.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- check-availability -->
    <section
        class="uk-section-small uk-section-muted uk-check-availability uk-background-norepeat uk-background-cover uk-background-bottom-right"
        uk-img data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown-1.svg">
        <div class="uk-container uk-container-large">
            <?php echo $__env->make('themes.default.common.check-availability', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    <!-- end check-availability -->
    <!-- about us -->
    <section class="uk-section-large uk-position-relative">
        <div class="uk-container uk-container-small">
            <div class="uk-text-center uk-margin-large-bottom"
                uk-scrollspy="target: [uk-scrollspy-class], .uk-room-list-home, h1, p; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
                <h1><?php echo e($about->uid); ?></h1>
                <img src="<?php echo e(asset('themes-assets')); ?>/images/svg/header.svg" width="150" alt="" uk-scrollspy-class>
                <?php echo $about->content; ?>

            </div>
        </div>
        <div class="uk-container uk-container-large">
            <?php if($rooms->count() > 0): ?>
                <!-- rooms -->
                <div uk-slider="sets: true; center:true; velocity: 2; autoplay: 1; pauseOnHover: false;"
                    class="uk-slider uk-slider-container"
                    uk-scrollspy="target: [uk-scrollspy-class], .uk-room-list-home; cls: uk-animation-slide-right-medium; delay: 50; repeat: true;">
                    <!-- <div uk-slider="sets: true; "> -->
                    <div class="uk-position-relative">
                        <ul class="uk-slider-items" uk-grid
                            uk-scrollspy="target: [uk-scrollspy-class], .uk-facility-icon, .uk-facility-name,  h2, p; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
                            <!-- <ul class="uk-slider-items   uk-grid-small uk-child-width-1-3" uk-grid> -->
                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div>
                                        <div
                                            class="uk-cover-container uk-display-block  uk-transition-toggle uk-link-toggle uk-room-list-home">
                                            <?php if($row->page_thumbnail): ?>
                                                <img src="<?php echo e(asset('uploads/original/' . $row->page_thumbnail)); ?>"
                                                    class="uk-transition-scale-up uk-transition-opaque" alt="">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('themes-assets/images/default.png')); ?>"
                                                    class="uk-transition-scale-up uk-transition-opaque" alt="">
                                            <?php endif; ?>
                                            <div class="uk-overlay-list-home uk-position-cover"></div>
                                            <div class="uk-panel uk-padding uk-position-bottom-left">
                                                <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>">
                                                    <h2 class="uk-h2 text-white uk-margin-top uk-margin-remove-bottom">
                                                        <?php echo e($row->post_title); ?>

                                                    </h2>
                                                    <div class="text-white uk-margin-small-top"><?php echo $row->post_excerpt; ?>

                                                    </div>
                                                </a>
                                                <?php if($row->features->count() > 0): ?>
                                                    <ul class="uk-child-width-1-6@m uk-child-width-1-3 f-12  uk-grid-small uk-room-facilities uk-light"
                                                        uk-grid>
                                                        <?php $__currentLoopData = $row->features->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <div class="uk-facility-icon">
                                                                    <img src="<?php echo e(asset('uploads/original/' . $feature->thumbnail)); ?>"
                                                                        uk-svg alt="">
                                                                </div>
                                                                <div class="uk-facility-name"><?php echo e($feature->title); ?></div>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <input type="button"
                                                                onclick="location.href='<?php echo e($row->external_link); ?>';"
                                                                class="uk-button uk-button-yellow " value="Book Now" />
                                                        </li>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                            </a>
                                        </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php /* one extra room for slider needs 4 rooms */?>
                            <?php $__currentLoopData = $rooms->slice(1, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div>
                                        <div
                                            class="uk-cover-container uk-display-block  uk-transition-toggle uk-link-toggle uk-room-list-home">
                                            <?php if($row->page_thumbnail): ?>
                                                <img src="<?php echo e(asset('uploads/original/' . $row->page_thumbnail)); ?>"
                                                    class="uk-transition-scale-up uk-transition-opaque" alt="">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('themes-assets/images/default.png')); ?>"
                                                    class="uk-transition-scale-up uk-transition-opaque" alt="">
                                            <?php endif; ?>
                                            <div class="uk-overlay-list-home uk-position-cover"></div>
                                            <div class="uk-panel uk-padding uk-position-bottom-left">
                                                <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>">
                                                    <h2 class="uk-h2 text-white uk-margin-top uk-margin-remove-bottom">
                                                        <?php echo e($row->post_title); ?>

                                                    </h2>
                                                    <div class="text-white uk-margin-small-top"><?php echo $row->post_excerpt; ?>

                                                    </div>
                                                </a>
                                                <?php if($row->features->count() > 0): ?>
                                                    <ul class="uk-child-width-1-6@m uk-child-width-1-3 f-12  uk-grid-small uk-room-facilities uk-light"
                                                        uk-grid>
                                                        <?php $__currentLoopData = $row->features->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <div class="uk-facility-icon">
                                                                    <img src="<?php echo e(asset('uploads/original/' . $feature->thumbnail)); ?>"
                                                                        uk-svg alt="">
                                                                </div>
                                                                <div class="uk-facility-name"><?php echo e($feature->title); ?></div>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <input type="button"
                                                                onclick="location.href='<?php echo e($row->external_link); ?>';"
                                                                class="uk-button uk-button-yellow " value="Book Now" />
                                                        </li>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                            </a>
                                        </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                            uk-slider-item="previous">
                            <span class="uk-slider-btn btn-previous">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </span>
                        </a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                            uk-slider-item="next">
                            <span class="uk-slider-btn btn-next">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </span>
                        </a>
                    </div>
                    <ul class="uk-slider-nav uk-flex-center uk-dotnav uk-margin-top"></ul>
                </div>
                <!-- end rooms -->
            <?php endif; ?>
        </div>
    </section>
    <!-- About us End -->
    <?php if($explore->count() > 0): ?>
        <!-- Explore  -->
        <section class="bg-light"
            uk-scrollspy="target: [uk-scrollspy-class], .uk-match-height, .uk-button, .uk-h1,  h2, p; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
            <div data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/explore-bg.svg" uk-img
                class="uk-background-norepeat uk-background-top-left uk-section uk-padding-remove-bottom"
                uk-parallax="bgx: 10%,10%; bgy: 0,200; easing: 1">
                <div class="uk-container uk-container-large uk-section-xlarge uk-padding-remove-top">
                    <div class="uk-grid-expand uk-child-width-1-1 uk-margin-large uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-width-1-1@m">
                            <h2 class="uk-h4 text-primary">Explore Hotel Crowne Imperial</h2>
                            <div class="uk-h1 uk-margin-remove-vertical uk-width-xlarge">The style of Hotel Crowne Imperial
                                is
                                modern and unique, an iconic building with excellent state <span
                                    class="text-primary">.</span>
                            </div>
                        </div>
                    </div>
                    <ul class="uk-child-width-1-3@m" uk-height-match="target:.uk-match-height;" uk-grid>
                        <?php $__currentLoopData = $explore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="uk-match-height bg-white uk-flex-column">
                                    <div class="uk-media-300">
                                        <a class="uk-transition-toggle uk-link-toggle"
                                            href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>">
                                            <?php if($row->page_thumbnail): ?>
                                                <img src="<?php echo e(asset('uploads/original/' . $row->page_thumbnail)); ?>"
                                                    class="uk-transition-scale-up uk-transition-opaque" alt="">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('themes-assets/images/default.png')); ?>"
                                                    class="uk-transition-scale-up uk-transition-opaque" alt="">
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="uk-panel uk-padding">
                                        <h2 class="text-black uk-h3 uk-margin-remove-bottom">
                                            <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>">
                                                <?php echo e($row->post_title); ?></a>
                                        </h2>
                                        <div class="uk-margin-small-top"><?php echo Str::limit($row->post_excerpt, 100); ?></div>
                                        <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>"
                                            class="uk-button uk-button-text">Explore more</a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end Explore  -->
    <?php endif; ?>
    <!-- blog -->
    <?php if($reviews->count() > 0): ?>
        <section class="uk-section-large bg-white">
            <!-- Review -->
            <div class="uk-section-overlap uk-margin-large-bottom">
                <div class="uk-container uk-container-large">
                    <div class="uk-section uk-background-cover uk-position-relative uk-background-norepeat uk-background-top"
                        data-src="<?php echo e(asset('uploads/original/' . $review->banner)); ?>" uk-parallax="bgy: -200" uk-img>
                        <div class="uk-overlay-home-full uk-position-cover"></div>
                        <div class="uk-padding uk-padding-remove-vertical uk-position-relative"
                            uk-scrollspy="target: [uk-scrollspy-class], h1, h3, .uk-h4, .star-rating, .uk-review, .uk-meta; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
                            <h1 class="text-white uk-text-center uk-margin-large-bottom"><?php echo e($review->uid); ?></h1>
                            <div class=" " uk-slider="sets: true">
                                <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                                    <ul class="uk-slider-items uk-child-width-1-2@s
uk-child-width-1-3@l uk-grid " uk-grid
                                        uk-height-match="target: .uk-same-height">
                                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a
                                                    class="uk-same-height bg-white uk-text-center uk-box-shadow-medium uk-padding  uk-display-block">
                                                    <h4 class="text-black"><?php echo e($row->post_title); ?></h4>
                                                    <span class="star-rating ">
                                                        <span class="fa fa-star <?php echo e($row->rating >= 1 ? 'checked' : ''); ?>"
                                                            aria-hidden="true"></span>
                                                        <span class="fa fa-star <?php echo e($row->rating >= 2 ? 'checked' : ''); ?>"
                                                            aria-hidden="true"></span>
                                                        <span class="fa fa-star <?php echo e($row->rating >= 3 ? 'checked' : ''); ?>"
                                                            aria-hidden="true"></span>
                                                        <span class="fa fa-star <?php echo e($row->rating >= 4 ? 'checked' : ''); ?>"
                                                            aria-hidden="true"></span>
                                                        <span class="fa fa-star <?php echo e($row->rating >= 5 ? 'checked' : ''); ?>"
                                                            aria-hidden="true"></span>
                                                    </span>
                                                    <?php if($row->category): ?>
                                                        <div class="uk-meta f-12 text-black uk-margin-top uk-flex-middle">
                                                            <img src="<?php echo e(asset('uploads/original/' . post_category($row->category)->thumbnail)); ?>"
                                                                width="45" height="45" alt="">
                                                            <?php echo e(post_category($row->category)->category); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <ul class="uk-slider-nav uk-flex-center uk-dotnav uk-margin-top"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Review -->
        </section>
    <?php endif; ?>


    <?php if($blog->count() > 0): ?>

        <section class="uk-section uk-section-muted" id="section">
            <div class="uk-container uk-container-large"
                uk-scrollspy="target: [uk-scrollspy-class], h1, h2, h3, .uk-h1, li, .uk-h3, .uk-light; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
                <div class="uk-margin-remove-top uk-grid-expand uk-child-width-1-1 uk-margin-large uk-grid uk-grid-stack"
                    uk-grid="">
                    <div class="uk-width-1-1@m">
                        <h2 class="uk-h4 text-primary">Latest from blog</h2>
                        <div class="uk-h1 uk-margin-remove-vertical uk-width-2xlarge">For more information, <br> just
                            follow us
                        </div>
                    </div>
                </div>

                <ul class="uk-child-width-1-1 uk-child-width-1-2@s
uk-child-width-1-3@m uk-grid-match uk-grid-medium"
                    uk-height-match="target:.uk-card;" uk-grid="masonry: false;">
                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div>

                                <a class="uk-item uk-card uk-card-default uk-card-hover uk-margin-remove-first-child uk-link-toggle uk-display-block"
                                    href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>">
                                    <div class="uk-card-media-top">
                                        <div class="uk-media-250">
                                            <?php if($row->page_thumbnail): ?>
                                                <img src="<?php echo e(asset('uploads/original/' . $row->page_thumbnail)); ?>"
                                                    class="uk-image">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('themes-assets/images/default.png')); ?>"
                                                    class="uk-image">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="uk-card-body uk-margin-remove-first-child">
                                        <div class="uk-meta text-black-light f-14 uk-margin-small-top">
                                            <?php echo e(date('F', strtotime($row->post_date))); ?>

                                            <?php echo e(date('d', strtotime($row->post_date))); ?>,
                                            <?php echo e(date('Y', strtotime($row->post_date))); ?> </div>
                                        <h2 class="uk-title uk-h3 uk-margin-small-top uk-margin-remove-bottom">
                                            <span class="uk-link-heading f-20"> <?php echo e($row->post_title); ?> </span>
                                        </h2>
                                        <?php echo Str::limit($row->post_excerpt, 100); ?>

                                        
                                        
                                    </div>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>


            </div>
            <input type="button" onclick="location.href='<?php echo e(url('page/' . posttype_url('blog'))); ?>';"
                class="uk-button uk-align-center uk-button-yellow " value="View All">
        </section>
    <?php endif; ?>
    <!-- end Blog -->
    <?php if($popup->count() > 0): ?>
        <!-- modal -->
        <?php $__currentLoopData = $popup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="OnloadModal" uk-modal>
                <div class="uk-modal-dialog uk-margin-auto-vertical">
                    <button class="uk-modal-close-outside uk-icon uk-close bg-white text-red" type="button"
                        uk-close></button>
                    <a href="<?php echo e($row->external_link); ?>" target="_blank">
                        <img src="<?php echo e(asset('uploads/original/' . $row->page_thumbnail)); ?>" uk-img>
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- end modal -->
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/frontpage.blade.php ENDPATH**/ ?>