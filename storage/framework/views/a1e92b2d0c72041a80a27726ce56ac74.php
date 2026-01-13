
<?php $__env->startSection('title', $data->title); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->page_thumbnail); ?>
<?php $__env->startSection('content'); ?>
    <!-- banner section start -->
    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/' . $data->banner) : ''); ?>" alt="<?php echo e($data->title); ?>" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1  uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse uk-text-center" uk-grid>
                <div class="uk-width-1-2@m">
                    <ul class="uk-breadcrumb center-underline" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                        <li><span class="uk-primary"><?php echo e($data->title); ?></span></li>
                    </ul>
                    <div class="uk-banner-font" uk-scrollspy="target: h1,a; cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <h1 class="uk-white"><?php echo e($data->title); ?></h1>
                        <a class="uk-content uk-btn uk-button-text uk-white f-500" href="#section" uk-scroll=""> Scroll To Discover <span uk-icon="icon:arrow-right; ratio: 1.5"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

<!-- form section start -->
<!-- form section end -->

    <!-- detail section start -->
    <section class="uk-section about-bg1" id="section">
        <div class="uk-container">
            <div class="uk-flex uk-flex-middle" uk-grid>
                <div class="uk-banner-font uk-width-expand@m">
                    <img src="<?php echo e(asset('themes-assets/img/design.png')); ?>" alt="" style="margin:0 9px 3px 0px">
                    <span class="uk-primary"><?php echo e($data->title); ?></span>
                    <img src="<?php echo e(asset('themes-assets/img/arrow.png')); ?>" alt="" style="margin: 0 0px 5px 9px;">
                    <h2 class="uk-margin-remove uk-primary">About <?php echo e($data->title); ?></h2>
                </div>
            </div>
            <?php echo $data->content; ?>

            <hr class="uk-divider-icon">
            <div uk-grid>
                <?php if($data->thumbnail || get_multiple_image($data->id)->count() > 0): ?>
                    <div class="uk-width-2-3@m">
                        <h3 class="uk-primary uk-text-uppercase "><?php echo e($data->post_title); ?> GALLERY</h3>
                        <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-bottom" tabindex="-1" uk-slider>
                            <div class="uk-slider-items uk-child-width-1-1" uk-lightbox="animation: slide">
                                <?php if($data->thumbnail): ?>
                                    <div>
                                        <a class="uk-inline uk-media-380" href="<?php echo e(asset('uploads/original/'.$data->thumbnail)); ?>">
                                            <img src="<?php echo e(asset('uploads/original/'.$data->thumbnail)); ?>" alt="<?php echo e($data->title); ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                
                                <?php $__currentLoopData = get_multiple_image($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div>
                                        <a class="uk-inline uk-media-380" href="<?php echo e(asset('uploads/medium/'.$row->file_name)); ?>">
                                            <img src="<?php echo e(asset('uploads/medium/'.$row->file_name)); ?>" alt="<?php echo e($row->title); ?>">
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($data->features && $data->features->count()>0): ?>
                    <div class="uk-width-1-3@m">
                        <div class="light-bg uk-padding">
                            <h3 class="uk-primary">Our Amenities</h3>
                            <ul class="uk-facilities-list">
                                <?php $__currentLoopData = $data->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($feature->title); ?></li> 
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

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/associate-detail.blade.php ENDPATH**/ ?>