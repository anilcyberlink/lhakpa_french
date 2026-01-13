
<?php $__env->startSection('title',$data->post_type); ?>
<?php $__env->startSection('meta_keyword',$data->meta_keyword); ?>
<?php $__env->startSection('meta_description',$data->meta_description); ?>
<?php $__env->startSection('thumbnail',$data->banner); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('themes.default.common.innerbanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- check-availability -->
<section class="uk-section-small uk-section-muted uk-check-availability uk-background-norepeat uk-background-cover uk-background-bottom-right" uk-img data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown-1.svg">
    <div class="uk-container uk-container-large">
    <?php echo $__env->make('themes.default.common.check-availability', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>       
    </div>
</section>
<!-- end check-availability -->
<?php if($data->content): ?>
<!-- section -->
<section id="section" class="uk-section uk-section-muted uk-section-large uk-padding-remove-bottom">
    <div class="uk-container uk-container-small"
        uk-scrollspy="target: [uk-scrollspy-class], p, hr; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
        <div class="uk-grid-collapse uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-width-1-1@m">
               <div class="uk-text-emphasis uk-margin-large  uk-margin-auto uk-text-center"><?php echo $data->content; ?></div>
                <hr class="uk-divider-vertical bg-primary">
            </div>
        </div>
    </div>
</section>
<!-- section end -->
<?php endif; ?>

<?php if($posts->count()>0): ?>
<!-- section -->
<?php $__currentLoopData = $posts->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="uk-section-default uk-position-relative">
    <?php if($row->page_thumbnail): ?>
    <div data-src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail )); ?>" uk-img class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section-small uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;">
    <?php else: ?>
   <div data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown.svg" uk-img class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section-small uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;">
        
    <?php endif; ?> 
    <div class="uk-overlay-home-full  uk-position-cover"></div>
        <div class="uk-width-1-1"
            uk-scrollspy="target: [uk-scrollspy-class], li, h2, p,a, .uk-content, img; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
            <div class="uk-container uk-container-large uk-position-relative">
                <div class="uk-grid-margin uk-grid" uk-grid="">
                    <div class="uk-width-expand@m uk-first-column"></div>
                    <div class="uk-width-expand@m ">
                        <h2 class="uk-h1 text-white"><?php echo e($row->post_title); ?> </h2>
                        <hr class="uk-width-large  uk-light" uk-parallax="media: @m; x: 100,100;">
                        <div class="uk-margin uk-width-large text-white f-14">
                           <?php echo $row->post_excerpt; ?>      
                            <a href="<?php echo e(route('book_now',$row->uri)); ?>" class="uk-button uk-button-white-outline uk-margin-top">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- section end -->
<!-- section -->
<?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="uk-section uk-section-large">
    <div class="uk-container">
        <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid
            uk-scrollspy="target: [uk-scrollspy-class], li, h2, p,a, .uk-content, img; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
            <div class="uk-grid-item-match uk-width-1-1@m">
                <div class="uk-flex">
                    <?php if($row->page_thumbnail): ?>
                    <div data-src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail )); ?>" uk-img class="uk-tile uk-width-1-1 uk-background-norepeat uk-background-cover uk-background-center-right" uk-parallax="bgy: 200,-70;easing: 1;media: @m">
                    <?php else: ?>
                   <div data-src="<?php echo e(asset('themes-assets/images/default.png')); ?>" uk-img class="uk-tile uk-width-1-1 uk-background-norepeat uk-background-cover uk-background-center-right" uk-parallax="bgy: 200,-70;easing: 1;media: @m">
                    <?php endif; ?> 
                    
                        <div class="uk-card uk-card-default uk-card-large uk-card-body uk-margin-remove-first-child uk-margin uk-width-large uk-margin-auto-left"
                            uk-parallax="x: 140,140; y: 50,150; media: @l;">
                            <h2 class="uk-title uk-h2 text-primary uk-margin-top uk-margin-remove-bottom"> <?php echo e($row->post_title); ?></h2>
                            <div class="uk-content uk-panel uk-margin-top f-14">
                                <hr class="uk-margin-medium">
                                <?php echo $row->post_excerpt; ?>  
                                <a href="<?php echo e(route('book_now',$row->uri)); ?>" class="uk-button uk-button-primary uk-margin-top">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- section end -->
<?php endif; ?>
<?php if($gallery->count()>0): ?>
<!-- section -->
<section class="uk-section uk-section-muted  uk-section-large">
    <div class="uk-container uk-container-large"
        uk-scrollspy="target: [uk-scrollspy-class], li, h2, p, .uk-content, img; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
        <div class="uk-child-width-1-1 uk-child-width-1-3@m uk-grid-match uk-grid"
    uk-height-match="target: > div > .uk-panel, > div > .uk-card; row: true" uk-grid="masonry: true"
    uk-lightbox="container: .uk-gallery-container; toggle: a[data-js-lightbox]" style="padding-bottom: 150px;">
       <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <div class="uk-panel">
            <div class="uk-inline-clip uk-transition-toggle ">
                <img src="<?php echo e(asset('/uploads/galleries/' . $image->picture)); ?>" class="uk-transition-scale-up uk-transition-opaque"  alt="<?php echo e($image->caption); ?>">
                <div class="uk-overlay uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                <div class="uk-position-center uk-light">
                <span class="uk-transition-fade uk-icon uk-overlay-icon" uk-overlay-icon=""></span>
                </div>
                <a class="uk-position-cover" data-js-lightbox="" href="<?php echo e(asset('/uploads/galleries/' . $image->picture)); ?>" data-caption="<?php echo e($image->caption); ?>" data-type="image"></a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
</section>
<!-- section end -->
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/posttypeTemplate-healthclub.blade.php ENDPATH**/ ?>