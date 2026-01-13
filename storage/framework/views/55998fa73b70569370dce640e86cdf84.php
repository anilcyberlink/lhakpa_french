
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

<section class="uk-section uk-primary-bg uk-about-text">
    <div class="uk-container">
        <div class="uk-contents uk-title-font uk-same-height">
            <h1 class="uk-secondary"><?php echo e($data->associated_title); ?></h1>
            <span class="dotted-line-black uk-margin-bottom"></span>
            
                <?php echo $data->content; ?>

            
        </div>
    </div>
</section>

<?php
    $post= $posts->first();
?>
<section class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-2-3@m">
                <div class="uk-title-font border">
                    <h2 class="uk-secondary"><?php echo e($post->post_title); ?></h2>
                    <span class="dotted-line-primary"></span>
                    <p>
                        <?php echo e($post->post_excerpt); ?>

                    </p>
                    <ul class="uk-list uk-highlight uk-light-bg uk-padding border">
                            <?php echo $post->post_content; ?>

                    </ul>
                </div>
            </div>
            <div class="uk-width-1-3@m  uk-margin-bottom">
                <div uk-sticky="offset: 150; end: true; " style="z-index: 100;">
                    <div class="uk-media-260 uk-margin-top">
                        <img src="<?php echo e($post->page_banner ? asset('uploads/banners/'.$post->page_banner) : asset('theme-assets/img/mountain/mountain8.jpeg')); ?>" class="border cover" alt="">
                    </div>
                    <div class="uk-media-260 uk-margin-top">
                        <img src="<?php echo e($post->page_thumbnail ? asset('uploads/medium/'.$post->page_thumbnail) : asset('theme-assets/img/mountain/mountain7.jpeg')); ?>" class="border cover" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/posttypeTemplate-tourism.blade.php ENDPATH**/ ?>