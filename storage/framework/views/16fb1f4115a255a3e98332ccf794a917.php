
<?php $__env->startSection('title',$data->post_type); ?>
<?php $__env->startSection('meta_keyword',$data->meta_keyword); ?>
<?php $__env->startSection('meta_description',$data->meta_description); ?>
<?php $__env->startSection('thumbnail',$data->banner); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('themes.default.common.innerbanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- section -->
<!-- check-availability -->
<section class="uk-section-small uk-section-muted uk-check-availability uk-background-norepeat uk-background-cover uk-background-bottom-right" uk-img data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown-1.svg">
    <div class="uk-container uk-container-large">
    <?php echo $__env->make('themes.default.common.check-availability', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>       
    </div>
</section>
<!-- end check-availability -->
<?php if($posts->count()>0): ?>
<section class="uk-section-large bg-white uk-position-relative" id="section">
    <div class="uk-container uk-container-large"
        uk-scrollspy="target:[uk-scrollspy-class], h1, h2, h3, h4, h5, h6, a, p, i, li, img; cls: uk-animation-slide-bottom-medium; delay: 100; repeat: true;">
        <?php $__currentLoopData = $posts->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="uk-grid-expand  uk-grid-large uk-grid uk-grid-margin-xlarge">
            <div class="uk-width-2-3@m ">
                <?php echo $row->post_excerpt; ?>

            </div>
            <div class="uk-grid-item-match uk-width-1-3@m uk-flex-first uk-flex-last@m uk-flex-last@l ">
                <div>
                    <div class="uk-media-300 uk-margin-bottom">
                        <?php if($row->page_thumbnail): ?>
                        <img src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail )); ?>">
                        <?php else: ?>
                        <img src="<?php echo e(asset('themes-assets/images/default.png')); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->odd): ?>
        <div class="uk-grid-expand uk-flex-middle uk-grid-large uk-grid uk-grid-margin-xlarge">
            <div class="uk-width-2-3@m">
                <div>
                    <div class="uk-media-400 uk-margin-bottom">
                        <?php if($row->page_thumbnail): ?>
                        <img src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail )); ?>">
                        <?php else: ?>
                        <img src="<?php echo e(asset('themes-assets/images/default.png')); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="uk-grid-item-match uk-width-1-3@m  uk-flex-first uk-flex-last@m uk-flex-last@l">
                <h3><b><?php echo e($row->post_title); ?></b></h3>
                <div class="uk-margin-bottom"> <?php echo $row->post_excerpt; ?></div>
            </div>
        </div>
        <?php else: ?>
        <div class="uk-grid-expand uk-flex-middle uk-grid-large uk-grid uk-grid-margin-xlarge">
            <div class="uk-grid-item-match uk-width-1-3@m">
                <h3><b><?php echo e($row->post_title); ?></b></h3>
                 <div class="uk-margin-bottom"> <?php echo $row->post_excerpt; ?></div>
            </div>
            <div class="uk-width-2-3@m">
                <div>
                    <div class="uk-media-400 uk-margin-bottom">
                        <?php if($row->page_thumbnail): ?>
                        <img src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail )); ?>">
                        <?php else: ?>
                        <img src="<?php echo e(asset('themes-assets/images/default.png')); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<!-- section end -->
<?php endif; ?>
<?php if($bod->count()>0): ?>
<!-- section -->
<section class="uk-section-large uk-section-muted uk-position-relative">
    <div class="uk-container uk-container-large"
        uk-scrollspy="target:[uk-scrollspy-class], h1, h2, h3, h4, h5, h6, a, p, i, li, img; cls: uk-animation-slide-bottom-medium; delay: 100; repeat: true;">

        <h2><b>Board of Directors</b></h2>
        <ul class=" uk-child-width-1-4@m uk-child-width-1-2 uk-grid-medium " uk-grid>
            <!--  -->
            <?php $__currentLoopData = $bod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="uk-team-list">
                    <a href="#" uk-toggle="target:#members-details<?php echo e($loop->iteration); ?>">
                        <div class="uk-media-300"> 
                        <?php if($row->page_thumbnail): ?>
                        <img src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail )); ?>">
                        <?php else: ?>
                        <img src="<?php echo e(asset('themes-assets/images/users.jpg')); ?>">
                        <?php endif; ?>
                        </div>
                        <h4 class="uk-title uk-margin-top uk-margin-remove-bottom"> <?php echo e($row->post_title); ?></h4>
                        <div class="uk-meta uk-text-meta uk-margin-small-top"><?php echo e($row->sub_title); ?></div>
                    </a>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--  -->
           
        </ul>
    </div>
</section>
<!-- section end -->
<?php endif; ?>
<?php if($bod->count()>0): ?>
<!-- member details -->
  <?php $__currentLoopData = $bod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div id="members-details<?php echo e($loop->iteration); ?>" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-border-rounded">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-padding uk-padding-remove-top">
            <div uk-grid>
                <div class="uk-width-expand@m">
                    <div class="uk-members-title">
                        <h1 class="text-black uk-h2 uk-text-bold uk-margin-remove"> <?php echo e($row->post_title); ?></h1>
                        <span class="text-primary"> <?php echo e($row->sub_title); ?></span>
                    </div>
                    <div class="uk-padding f-20">
                        <?php echo $row->post_excerpt; ?>                        
                    </div>
                </div>
                <div class="uk-width-auto@m" style="width:400px;">
                    <div class="uk-padding uk-padding-remove-right uk-padding-remove-left uk-padding-remove-bottom">
                        <div class="uk-media-350">
                        <?php if($row->page_thumbnail): ?>
                        <img src="<?php echo e(asset('uploads/original/'.$row->page_thumbnail )); ?>">
                        <?php else: ?>
                        <img src="<?php echo e(asset('themes-assets/images/users.jpg')); ?>">
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- end details -->
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/posttypeTemplate-about.blade.php ENDPATH**/ ?>