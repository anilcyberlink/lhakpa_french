
<?php $__env->startSection('title', $data->post_type); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->banner); ?>
<?php $__env->startSection('content'); ?>
    <!-- HEADER START -->
    <section class="bg-secondary uk-position-relative uk-flex uk-flex-middle uk-background-norepeat"
        uk-height-viewport="expand: true; min-height: 250;">
        <div class="uk-width-1-1"
            uk-scrollspy="target: [uk-scrollspy-class], .f-18, h1, p, a; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
            <div class="uk-container uk-container-large uk-position-relative">
                <div class="inherit-position uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-width-1-1@m">
                        <h1 class="uk-h1 text-white"><?php echo e($data->post_type); ?></h1>
                        <div class="f-18 uk-margin uk-width-large text-white"><?php echo e($data->caption); ?> </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- HEADER END -->
    <!-- check-availability -->
    <section
        class="uk-section-small uk-section-muted uk-check-availability uk-background-norepeat uk-background-cover uk-background-bottom-right"
        uk-img data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown-1.svg">
        <div class="uk-container uk-container-large">
            <!--<?php echo $__env->make('themes.default.common.check-availability', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>       -->
        </div>
    </section>
    <!-- end check-availability -->
    <!-- section -->
    <?php if($postdes->count() > 0): ?>
        <section class="uk-section uk-section-muted" id="section">
            <div class="uk-container uk-container-large"
                uk-scrollspy="target: [uk-scrollspy-class], h1, h2, h3, .uk-h1, li, .uk-h3, .uk-light; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">


                <ul class="uk-child-width-1-1 uk-child-width-1-2@s
uk-child-width-1-3@m uk-grid-match uk-grid-medium"
                    uk-height-match="target:.uk-card;" uk-grid="masonry: false;">
                    <?php $__currentLoopData = $postdes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <?php echo e(date('F', strtotime($row->created_at))); ?>

                                        <?php echo e(date('d', strtotime($row->created_at))); ?>,
                                        <?php echo e(date('Y', strtotime($row->created_at))); ?> </div>
                                    <h2 class="uk-title uk-h3 uk-margin-small-top uk-margin-remove-bottom">
                                        <span class="uk-link-heading f-20"> <?php echo e($row->post_title); ?> </span>
                                    </h2>
                                </div>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>
    <!-- section end -->
    <!-- pagination -->
    <div class="uk-section-muted">
        <?php echo $postdes->links('themes.default.common.pagination'); ?>

    </div>

    <!-- pagination -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.inner-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/posttypeTemplate-blog.blade.php ENDPATH**/ ?>