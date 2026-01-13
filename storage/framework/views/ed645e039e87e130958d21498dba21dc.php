
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
<section class="uk-section-small bg-white uk-check-availability uk-background-norepeat uk-background-cover uk-background-bottom-right"
    uk-img data-src="assets/images/bg/crown-1.svg">
    <div class="uk-container uk-container-large">
       <?php echo $__env->make('themes.default.common.check-availability', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>

<!-- end check-availability -->
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
<?php if($posts->count()>0): ?>
<!-- section -->
<section class="uk-section-large bg-white uk-position-relative">
    <div class="uk-container uk-container-large">
        <ul class="uk-grid-medium uk-child-width-1-2@s" uk-grid
            uk-scrollspy="target: [uk-scrollspy-class], .uk-facility-icon, .uk-facility-name,  h2, p; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div>
                    <div class="uk-cover-container uk-display-block  uk-transition-toggle uk-link-toggle uk-room-list-home">
                        <?php if($row->page_thumbnail): ?>
                        <img src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail )); ?>" class="uk-transition-scale-up uk-transition-opaque" alt="">
                        <?php else: ?>
                        <img src="<?php echo e(asset('themes-assets/images/default.png')); ?>" class="uk-transition-scale-up uk-transition-opaque" alt="">
                        <?php endif; ?>                       
                        <div class="uk-overlay-list-home uk-position-cover"></div>
                        <div class="uk-panel uk-padding uk-position-bottom-left">
                            <a href="<?php echo e(url(geturl($row['uri'], $row['page_key']))); ?>">
                            <h2 class="uk-h2 text-white uk-margin-top uk-margin-remove-bottom"> <?php echo e($row->post_title); ?> </h2>
                            </a>
                             <div class="text-white uk-margin-small-top"><?php echo $row->post_excerpt; ?></div>
                            <?php if($row->features->count()>0): ?>
                             <ul class="uk-child-width-1-3@m uk-child-width-1-3 f-12  uk-grid-small uk-room-facilities uk-light"
                                uk-grid>
                                <?php $__currentLoopData = $row->features->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php if($feature->thumbnail): ?>
                                    <div class="uk-facility-icon">
                                        <img src="<?php echo e(asset('uploads/original/'.$feature->thumbnail )); ?>" uk-svg alt="">
                                    </div>
                                    <?php endif; ?>
                                    <div class="uk-facility-name"><?php echo e($feature->title); ?></div>
                                </li>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                 <input type="button" onclick="location.href='<?php echo e($row->external_link); ?>';"  class="uk-button uk-button-yellow " value="Book Now" />
                                 </li> 
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </li>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section>
<!-- section end -->
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/posttypeTemplate-rooms.blade.php ENDPATH**/ ?>