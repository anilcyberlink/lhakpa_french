
<?php $__env->startSection('title', $data->post_type); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->banner); ?>
<?php $__env->startSection('content'); ?>

<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain9.jpeg')); ?>" alt="<?php echo e($data->post_type); ?>" uk-img>
    <div class="uk-overlay-banner uk-position-cover"></div>
    <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <ul class="uk-breadcrumb">
                    <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                    <li><span class="uk-secondary"><?php echo e($data->post_type); ?></span></li>
                </ul>
                <div class="uk-sub-banner-font">
                    <h1><?php echo e($data->sub_title); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" uk-light-bg">
    <div>
        <div class="uk-grid-collapse uk-grid" uk-height-match="target: .uk-same-height">
            <div class="uk-width-1-1@m uk-same-height uk-text-center">
                <div class="uk-title-font  uk-container uk-section uk-padding-large">
                    <h1 class="uk-secondary"><?php echo e($data->associated_title); ?></h1>
                    <span class="dotted-line-primary"></span>
                    <p class="uk-text-center"><?php echo $data->content; ?></p>
                </div>
            </div>
            <!--<div class="uk-width-1-3@m">-->
            <!--    <img src="<?php echo e($data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" class="cover uk-same-height" alt="<?php echo e($data->post_type); ?>">-->
            <!--</div>-->
        </div>
    </div>
</section>

<?php if($posts->isNotEmpty()): ?>
    <section class="uk-section">
        <div class="uk-container">
            <ul uk-tab class="uk-why-us-tab">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="#"><?php echo e($row->post_title); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="uk-switcher uk-margin uk-margin-large-top">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <div class="uk-grid">
                            <div class="uk-width-2-3@m">
                                <div class="uk-title-font">
                                    <span class="uk-secondary dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right" aria-hidden="true"></i><?php echo e($value->post_excerpt); ?></span>
                                    <h2 class="uk-primary"><?php echo e($value->sub_title); ?></h2>
                                    <p>
                                        <?php echo $value->post_content; ?>

                                    </p>
                                </div>
                            </div>
                            <!--<div class="uk-width-1-3@m">-->
                            <!--    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>-->
                            <!--        <div class="uk-slider-items uk-child-width-1-1">-->
                            <!--            <?php $__currentLoopData = $value->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                            <!--                <div class="uk-media-280">-->
                            <!--                    <img src="<?php echo e($image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain2.jpeg')); ?>"  class="border" alt="<?php echo e($image->title); ?>">-->
                            <!--                </div>-->
                            <!--            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                            <!--        </div>-->
                            <!--        <a class="uk-position-center-left uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>-->
                            <!--        <a class="uk-position-center-right uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="uk-width-1-3@m">
                               
                                    
                                        <?php $__currentLoopData = $value->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="uk-media-280 uk-margin-small-top">
                                                <img src="<?php echo e($image->file_name ? asset('uploads/medium/'.$image->file_name) : asset('theme-assets/img/mountain/mountain2.jpeg')); ?>"  class="border" alt="<?php echo e($image->title); ?>">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                  
                               
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-why-us.blade.php ENDPATH**/ ?>