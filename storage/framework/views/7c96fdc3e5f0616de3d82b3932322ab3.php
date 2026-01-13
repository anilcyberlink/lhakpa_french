
<?php $__env->startSection('title',$data->post_type); ?>
<?php $__env->startSection('meta_keyword',$data->meta_keyword); ?>
<?php $__env->startSection('meta_description',$data->meta_description); ?>
<?php $__env->startSection('thumbnail',$data->banner); ?>
<?php $__env->startSection('brief',$data->content); ?>
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

<?php if($data->content): ?>
  <section class="uk-section-padding pattern">
    <div class=" uk-container  ">
       <div class="waves"></div>
      <div class="uk-card uk-card-default uk-margin-large-bottom uk-padding">
        <div class="uk-card-body ">
           <?php echo $data->content; ?>  
          
        </div>
      </div> 
    </div>
  </section>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/page.blade.php ENDPATH**/ ?>