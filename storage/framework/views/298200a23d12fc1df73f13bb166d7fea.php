
<?php $__env->startSection('title',$data->post_type); ?>
<?php $__env->startSection('meta_keyword',$data->meta_keyword); ?>
<?php $__env->startSection('meta_description',$data->meta_description); ?>
<?php $__env->startSection('thumbnail',$data->banner); ?>
<?php $__env->startSection('schema_markup'); ?>
<?php echo $data->schema_markup; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- banner section start -->
    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/' . $data->banner) : asset('themes-assets/img/01.jpg')); ?>" alt="" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1  uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse uk-text-center" uk-grid >
                <div class="uk-width-1-2@m" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <ul class="uk-breadcrumb center-underline">
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
    <?php if($posts->count()>0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->odd): ?>
                <!-- about  hotel start -->
                <section class="uk-section  refokus-lines about-bg1" id="section">
                    <div class="line"></div>
                    <div class="line uk-hidden"></div>
                    <div class="line"></div>
                    <div class="uk-container uk-margin-bottom">
                        <div uk-grid>
                            <!-- <div class="uk-width-1-3@m uk-flex uk-flex-middle">
                                <div class="uk-media-380 uk-inline uk-transition-toggle" style="overflow:hidden;">
                                    <img src="assets/img/05.jpg" class="uk-transition-scale-up uk-transition-opaque" alt="">
                                </div>
                                <div class="shadow4"></div>
                            </div> -->
                            <div class="uk-width-1-3@m uk-flex uk-flex-middle">
                                <div class="shadow"></div>
                                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                                    <div class="uk-slider-items uk-child-width-1-1" uk-lightbox="animation: slide">
                                        <?php if($row->page_thumbnail): ?>
                                            <div>
                                                <a class="uk-inline uk-media-380" href="<?php echo e(asset('uploads/original/'.$row->page_thumbnail)); ?>">
                                                    <img src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail)); ?>" alt="">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(get_multiple_image($row->id)->count() > 0): ?>
                                            <?php $__currentLoopData = get_multiple_image($row->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div>
                                                    <a class="uk-inline uk-media-380" href="<?php echo e(asset('uploads/medium/'.$image->file_name)); ?>">
                                                        <img src="<?php echo e(asset('uploads/medium/'.$image->file_name)); ?>" alt="">
                                                    </a>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(get_multiple_image($row->id)->count() > 0): ?>
                                        <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="uk-width-2-3@m uk-flex uk-flex-middle">
                                <div class="uk-banner-font">
                                    <img src="<?php echo e(asset('themes-assets/img/design.png')); ?>" alt="" style="margin:0 9px 3px 0px">
                                    <span class="uk-primary"><?php echo e($row->sub_title); ?></span>
                                    <img src="<?php echo e(asset('themes-assets/img/arrow.png')); ?>" alt="" style="margin: 0 0px 5px 9px;">
                                    <h2 class="uk-primary uk-margin-remove"><?php echo e($row->post_title); ?></h2>
                                    <?php echo $row->post_content; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- about  hotel end -->
            <?php else: ?>
                <!-- about another hotel start -->
                <section class="uk-section light-bg">
                    <div class="uk-container uk-margin-bottom">
                        <div uk-grid>
                            <div class="uk-width-2-3@m uk-flex uk-flex-middle">
                                <div class="uk-banner-font">
                                    <h2 class="uk-primary uk-margin-remove"><?php echo e($row->post_title); ?></h2>
                                    <?php echo $row->post_content; ?>

                                </div>
                            </div>
                            <div class="uk-width-1-3@m uk-flex uk-flex-middle">
                                <!-- <div class="uk-media-380 uk-inline uk-transition-toggle" style="overflow:hidden;">
                                    <img src="<?php echo e(asset('themes-assets/img/05.jpg')); ?>" class="uk-transition-scale-up uk-transition-opaque" alt="">
                                </div> -->
                                <div class="uk-position-relative uk-visible-toggle uk-light uk-width-1-1" tabindex="-1" uk-slider>
                                    <div class="uk-slider-items uk-child-width-1-1" uk-lightbox="animation: slide">
                                        <?php if($row->page_thumbnail): ?>
                                            <div>
                                                <div class="uk-inline uk-media-380" href="<?php echo e(asset('uploads/original/'.$row->page_thumbnail)); ?>">
                                                    <img src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail)); ?>" alt="">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(get_multiple_image($row->id)->count() > 0): ?>
                                            <?php $__currentLoopData = get_multiple_image($row->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div>
                                                    <a class="uk-inline uk-media-380" href="<?php echo e(asset('uploads/medium/'.$image->file_name)); ?>">
                                                        <img src="<?php echo e(asset('uploads/medium/'.$image->file_name)); ?>" alt="">
                                                    </a>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(get_multiple_image($row->id)->count() > 0): ?>
                                        <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                                    <?php endif; ?>
                                </div>
                                <div class="shadow4"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- about another hotel end -->
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo $posts->links('themes.default.common.pagination'); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/page.blade.php ENDPATH**/ ?>