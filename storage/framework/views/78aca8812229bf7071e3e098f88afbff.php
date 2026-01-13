
<?php $__env->startSection('title',$data->post_type); ?>
<?php $__env->startSection('meta_keyword',$data->meta_keyword); ?>
<?php $__env->startSection('meta_description',$data->meta_description); ?>
<?php $__env->startSection('thumbnail',$data->banner); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('themes.default.common.innerbanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- section -->
<?php if($postdes->count()>0): ?>
<section class="uk-section  uk-section-large" id="section">
    <div class="uk-container "
        uk-scrollspy="target: [uk-scrollspy-class], li, h2, p, a, .uk-content, img; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
        <ul class="  uk-child-width-1-2@s uk-child-width-1-2@l uk-grid " uk-grid
            uk-height-match="target: .uk-same-height">
            <?php $__currentLoopData = $postdes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="uk-same-height bg-white uk-text-center uk-box-shadow-medium uk-padding  uk-display-block">
                    <h4 class="text-black"><?php echo e($row->post_title); ?></h4>
                   <span class="star-rating ">
                        <span class="fa fa-star <?php echo e($row->rating >= 1?'checked':''); ?>" aria-hidden="true"></span>
                        <span class="fa fa-star <?php echo e($row->rating >= 2?'checked':''); ?>" aria-hidden="true"></span>
                        <span class="fa fa-star <?php echo e($row->rating >= 3?'checked':''); ?>" aria-hidden="true"></span>
                        <span class="fa fa-star <?php echo e($row->rating >= 4?'checked':''); ?>" aria-hidden="true"></span>
                        <span class="fa fa-star <?php echo e($row->rating >= 5?'checked':''); ?>" aria-hidden="true"></span>
                    </span>    
                    <div>
                        <div class="uk-review uk-panel uk-margin-top f-14"><?php echo $row->post_excerpt; ?>    </div>
                        <div class="uk-title uk-h4 uk-margin-small"><?php echo e($row->sub_title); ?></div>
                    </div>
                   <?php if($row->category): ?>                                       
                    <div class="uk-meta f-12 text-black uk-margin-top uk-flex-middle">
                    <img src="<?php echo e(asset('uploads/original/'.post_category($row->category)->thumbnail)); ?>" width="45" height="45" alt="">
                        <?php echo e(post_category($row->category)->category); ?>

                    </div>
                    <?php endif; ?>
                </div>
            </li>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section>
<?php endif; ?>
<!-- section end -->
<!-- pagination -->

  <?php echo $postdes->links('themes.default.common.pagination'); ?>


<!-- pagination -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/posttypeTemplate-reviews.blade.php ENDPATH**/ ?>