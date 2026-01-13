<?php echo $__env->make('themes.default.common.menu-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="uk-section-small uk-section-muted uk-check-availability uk-background-norepeat uk-background-cover uk-background-bottom-right" uk-img data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown-1.svg">
<div class="uk-container" >
   <div class="uk-food-menu" uk-scrollspy="cls: uk-animation-slide-top-small; target:h1,  label, input, li, p, a;  delay: 30; repeat: false;">
      <div class="uk-menu-outer-border  uk-position-relative" >
         <div class="uk-menu-mid-border  uk-position-relative ">
            <div class="uk-menu-inner-border bg-white uk-position-relative">
               <img class="corner-decoration corner-left-top" src="<?php echo e(asset('themes-assets/images/corner-decoration.png')); ?>"></img>
               <img class="corner-decoration corner-right-top" src="<?php echo e(asset('themes-assets/images/corner-decoration.png')); ?>"></img>
               <img class="corner-decoration corner-right-bottom" src="<?php echo e(asset('themes-assets/images/corner-decoration.png')); ?>"></img>
               <img class="corner-decoration corner-left-bottom" src="<?php echo e(asset('themes-assets/images/corner-decoration.png')); ?>"></img>
               <img class="vertical-decoration top" src="<?php echo e(asset('themes-assets/images/horizontally-centered-vertical-decoration.png')); ?>"></img>
               <img class="vertical-decoration bottom" src="<?php echo e(asset('themes-assets/images/horizontally-centered-vertical-decoration.png')); ?>"></img> 
               <!--  -->
               <div class="uk-food-menu-content uk-margin-large-top uk-margin-large-bottom uk-padding uk-display-block">
                 
                  <div class="uk-width-xlarge uk-text-center uk-margin-auto"> 
                      <div class="uk-food-title uk-text-center uk-margin-large-top uk-margin-large-bottom">
                        <?php if($firstcategory): ?>
                     <h1 class="uk-h2 f-w-600 uk-margin-remove text-primary"><?php echo e($firstcategory->category); ?> <?php echo e($firstcategory->category_caption); ?></h1>
                     <p class="uk-margin-remove"><?php echo $firstcategory->category_content; ?><i></i></p>
                     <?php endif; ?>
                  </div>
                     <!--  -->
                     <?php if($posts->count()>0): ?>
                       <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div>                          
                        <div class="uk-margin-large-bottom uk-menu-box">
                           <div class="uk-food-subtitle uk-margin-medium-bottom">
                              <h1 class="uk-h3 f-w-600 text-primary"><?php echo e($value->post_title); ?></h1>
                              <p class="f-14 uk-margin-remove"><?php echo e($value->sub_title); ?></p>
                           </div>
                           <ul class="uk-ml uk-text-center"> 
                             <?php $__currentLoopData = $value->associated_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li class="uk-text-center">
                                 <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                    <div>
                                    <h4 class="uk-menu-name f-18 uk-margin-remove"><?php echo e($value1->title); ?></h4>
                                    <p class="uk-menu-desc f-14 uk-margin-remove"><?php echo $value1->brief; ?></p>
                                 </div>
                                 <!-- <div>-->
                                 <!--   <span class="uk-price text-primary f-18 f-w-600">$<?php echo e($value1->sub_title); ?></span>                   -->
                                 <!--</div>-->
                                 </div>
                              </li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                           </ul>
                        </div>
                     </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                     <!--  -->
                  </div>
               </div>
               <!--  -->
                <?php if($postdes->count()>0): ?>
                  <?php $__currentLoopData = $postdes->slice(0, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($value->page_thumbnail): ?>
                <!--  -->
               <div class="uk-position-top uk-visible@l">
                  <div class="uk-image-m uk-margin-large-top uk-margin-large-left"> 
                     <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/medium/' . $value->page_thumbnail)); ?>">
                  </div>
               </div>
               <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php $__currentLoopData = $postdes->slice(1, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($value->page_thumbnail): ?>
               <div class="uk-position-right uk-visible@l">
                  <div class="uk-image-m uk-margin-xlarge-top uk-margin-large-right"> 
                      <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/medium/' . $value->page_thumbnail)); ?>">
                  </div>
               </div>
               <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php $__currentLoopData = $postdes->slice(2, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($value->page_thumbnail): ?>
               <div class="uk-position-center-left uk-visible@l">
                  <div class="uk-image-m uk-margin-xlarge-top uk-margin-large-left"> 
                    <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/medium/' . $value->page_thumbnail)); ?>">
                  </div>
               </div>
               <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php $__currentLoopData = $postdes->slice(3, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($value->page_thumbnail): ?>
               <div class="uk-position-center-right uk-visible@l">
                  <div class="uk-image-m uk-margin-large-right"> 
                     <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/medium/' . $value->page_thumbnail)); ?>">
                  </div>
               </div>
               <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php $__currentLoopData = $postdes->slice(4, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($value->page_thumbnail): ?>
               <div class="uk-position-bottom-left uk-visible@l">
                  <div class="uk-image-m uk-margin-large-bottom uk-margin-large-left"> 
                     <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/medium/' . $value->page_thumbnail)); ?>">
                  </div>
               </div>
               <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php $__currentLoopData = $postdes->slice(5, 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($value->page_thumbnail): ?>
               <div class="uk-position-bottom-right uk-visible@l">
                  <div class="uk-image-m uk-margin-xlarge-bottom uk-margin-large-right"> 
                     <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/medium/' . $value->page_thumbnail)); ?>">
                  </div>
               </div>
               <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
               <!--  -->
            </div>
         </div> 
      </div>
   </div>
</div> 
</section>
<?php echo $__env->make('themes.default.common.menu-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/posttypeTemplate-emenu.blade.php ENDPATH**/ ?>