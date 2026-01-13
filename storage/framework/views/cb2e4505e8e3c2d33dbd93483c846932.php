
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


    <!-- list section start -->
    <?php if($galleryImages && $galleryImages->count() > 0): ?>
        <section class="uk-section" id="section">
            <div class="uk-container">
                <ul class="uk-subnav uk-subnav-pill uk-flex uk-flex-center uk-gallery-pill" uk-switcher="animation: uk-animation-fade">
                    <li><a href="#">All</a></li>
                    <?php if($galleryMenus && $galleryMenus->count() > 0): ?>
                        <?php $__currentLoopData = $galleryMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#"><?php echo e(getPostTypeById($row)->post_type); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
                <hr class="uk-divider-icon">
                <div class="uk-switcher uk-margin">
                    <div>
                        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
                            <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    <a class="uk-inline uk-transition-toggle uk-link-toggle uk-media-307" href="<?php echo e($row->picture ? asset('uploads/galleries/'.$row->picture) : asset('themes-assets/img/default.png')); ?>"  style="overflow:hidden;">
                                        <img src="<?php echo e($row->picture ? asset('uploads/galleries/'.$row->picture) : asset('themes-assets/img/default.png')); ?>" class="uk-transition-scale-up uk-transition-opaque" alt="">
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php if($galleryMenus && $galleryMenus->count() > 0): ?>
                        <?php $__currentLoopData = $galleryMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
                                    <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item == $row->post_type): ?>
                                            <div>
                                                <a class="uk-inline uk-transition-toggle uk-link-toggle uk-media-307" href="<?php echo e($row->picture ? asset('uploads/galleries/'.$row->picture) : asset('themes-assets/img/default.png')); ?>"  style="overflow:hidden;">
                                                    <img src="<?php echo e($row->picture ? asset('uploads/galleries/'.$row->picture) : asset('themes-assets/img/default.png')); ?>" class="uk-transition-scale-up uk-transition-opaque" alt="">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <div>Coming Soon</div>
                    <div>Coming Soon</div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- list section end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/posttypeTemplate-gallery.blade.php ENDPATH**/ ?>