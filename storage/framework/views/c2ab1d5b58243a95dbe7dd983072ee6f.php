
<?php $__env->startSection('title', $data->post_title); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->page_thumbnail); ?>
<?php $__env->startSection('content'); ?>
    <!-- HEADER START -->
    <?php if($data->banner): ?>
        <section
            class="uk-cover-container  uk-position-relative uk-flex uk-flex-bottom uk-background-norepeat uk-background-cover uk-background-top-center uk-position-relative"
            data-src="<?php echo e(asset('uploads/original/' . $data->banner)); ?>" uk-height-viewport="expand: true; min-height: 800;"
            uk-img>
        <?php else: ?>
            <section
                class="uk-cover-container  uk-position-relative uk-flex uk-flex-bottom uk-background-norepeat uk-background-cover uk-background-top-center uk-position-relative"
                data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown.svg"
                uk-height-viewport="expand: true; min-height: 300;" uk-img>
    <?php endif; ?>
    <div class="uk-overlay-home-full uk-position-cover"></div>
    <div class="uk-hero-banner-content-inner uk-width-1-1 uk-position-z-index uk-margin-large-top">
        <div class="uk-container uk-container-small"
            uk-scrollspy="target:h1, h2, h3, h4, h5, h6, p; cls: uk-animation-slide-top-medium;   delay: 100; repeat: true;">
            <h5 class="text-white uk-margin-small-bottom uk-text-uppercase">
                <?php echo e(date('F', strtotime($data->post_date))); ?>

                <?php echo e(date('d', strtotime($data->post_date))); ?>,
                <?php echo e(date('Y', strtotime($data->post_date))); ?>

            </h5>
            <h1 class="text-white uk-margin-large-bottom"><?php echo e($data->post_title); ?></h1>
        </div>
    </div>
    </section>
    <!-- HEADER END -->

    <!-- section -->
    <section class="uk-section bg-white uk-position-relative">
        <div class="uk-container uk-container-small"
            uk-scrollspy="target:h1, h2, h3, h4, h5, h6, li, p, a, img, .uk-content, .uk-meta; cls: uk-animation-slide-top-medium;   delay: 100; repeat: false;">
            <div class="sharethis-inline-share-buttons"></div>
            <?php echo $data->post_content; ?>

        </div>
        <?php if($related->count() > 0): ?>
            <!-- related -->
            <div class="uk-container  uk-position-relative uk-position-z-index uk-margin-medium-top"
                uk-scrollspy="target:[uk-scrollspy-class], h2, li, h4; cls: uk-animation-slide-top-medium; delay: 50; repeat: false;">
                <h5 class="f-w-600 text-black-light uk-title-border-bottom">Related </h5>
                <ul class="uk-child-width-1-3@m uk-grid-medium" uk-height-match="target:.uk-card;" uk-grid>
                    <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div>
                                <?php if($row->external_link): ?>
                                    <a class="uk-item uk-card uk-card-default uk-card-hover uk-margin-remove-first-child uk-link-toggle uk-display-block"
                                        href="<?php echo e($row->external_link); ?>" target="_blank">
                                    <?php else: ?>
                                        <a class="uk-item uk-card uk-card-default uk-card-hover uk-margin-remove-first-child uk-link-toggle uk-display-block"
                                            href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>">
                                <?php endif; ?>
                                <div class="uk-card-media-top">
                                    <div class="uk-media-250">
                                        <?php if($row->page_thumbnail): ?>
                                            <img src="<?php echo e(asset('uploads/original/' . $row->page_thumbnail)); ?>"
                                                class="uk-image">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('themes-assets/images/default.png')); ?>" class="uk-image">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="uk-card-body uk-margin-remove-first-child">
                                    <div class="uk-meta text-black-light f-14 uk-margin-small-top">
                                        <?php echo e(date('F', strtotime($row->post_date))); ?>

                                        <?php echo e(date('d', strtotime($row->post_date))); ?>,
                                        <?php echo e(date('Y', strtotime($row->post_date))); ?> </div>
                                    <h2 class="uk-title uk-h3 uk-margin-small-top uk-margin-remove-bottom">
                                        <span class="uk-link-heading f-20"><?php echo e($row->post_title); ?></span>
                                    </h2>
                                </div>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <!-- end -->
        <?php endif; ?>
    </section>
    <!-- section end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/single.blade.php ENDPATH**/ ?>