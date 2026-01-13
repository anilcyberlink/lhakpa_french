
<?php $__env->startSection('title', $data->post_type); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->banner); ?>
<?php $__env->startSection('content'); ?>
    <!-- banner section start -->
    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/' . $data->banner) : ''); ?>" alt="<?php echo e($data->post_type); ?>" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1  uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse uk-text-center" uk-grid>
                <div class="uk-width-1-2@m">
                    <ul class="uk-breadcrumb center-underline" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                        <li><span class="uk-primary"><?php echo e($data->post_type); ?></span></li>
                    </ul>
                    <div class="uk-banner-font" uk-scrollspy="target: h1,p,a; cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <h1 class="uk-white"><?php echo e($data->post_type); ?></h1>
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

    <!-- services section start -->
    <?php if($posts && $posts->count() > 0): ?>
        <section class="uk-section" id="section">
            <div class="uk-container">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class=" uk-activities uk-grid-collapse <?php echo e($loop->iteration > 1 ? 'uk-margin-large-top' : ''); ?>" uk-grid>
                        <div class="uk-width-1-2@m uk-flex uk-flex-middle " uk-height-match="target: .uk-activity;">
                            <div class="shadow3 uk-visible@s"></div>
                            <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>" class="uk-inline uk-transition-toggle uk-link-toggle  uk-media-450 uk-activity" style="overflow:hidden; height:100%;">
                                <img src="<?php echo e($row->page_thumbnail ? asset('uploads/original/' . $row->page_thumbnail) : asset('themes-assets/img/default.png')); ?>" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="<?php echo e($row->post_title); ?>">
                            </a>
                        </div>
                        <div class="uk-width-1-2@m  uk-flex uk-flex-middle uk-meeting">
                            <div class="uk-package-detail uk-activity">
                                <div class="uk-package-font">
                                    <h2 class="uk-primary uk-text-uppercase uk-margin-remove"><?php echo e($row->post_title); ?></h2>
                                    <hr>
                                    <div class="list-content">
                                        <?php echo $row->post_excerpt; ?>

                                    </div>
                                    <?php if($row->features && $row->features->count()>0): ?>
                                        <ul class="uk-child-width-1-3 uk-grid-small uk-room-facilities uk-grid" uk-grid="">
                                            <?php $__currentLoopData = $row->features->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <div class="uk-facility-icon">
                                                        <img src="<?php echo e(asset('uploads/original/'.$feature->thumbnail )); ?>" alt="<?php echo e($feature->title); ?>" style="height: 32px;">
                                                    </div>
                                                    <div class="uk-facility-name"><?php echo e($feature->title); ?></div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                    <div class="uk-margin-top">
                                        <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>" class="uk-btn uk-btn-primary  uk-margin-bottom">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo $posts->links('themes.default.common.pagination'); ?>

            </div>
        </section>
    <?php endif; ?>
    <!-- services section end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ukeshcom/demo1/resources/views/themes/default/posttypeTemplate-dinning-list.blade.php ENDPATH**/ ?>