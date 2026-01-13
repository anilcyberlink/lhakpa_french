
<?php $__env->startSection('content'); ?>
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed uk-grey-bg" style="height:400px;" data-src="assets/img/bg/pattern.png" alt="" uk-img>
    <div class="uk-container uk-width-1-1  uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary uk-margin-large-top">Your Travel Opinion</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div class="uk-div-overlay " uk-grid>
            <div class="uk-width-1-4@m ">
            <?php echo $__env->make('themes.default.user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="uk-width-3-4@m">
                <p class="uk-visible@m uk-white" style="margin:2rem 0px 5rem 0;">Your review about the travel :
                </p>
                <?php if($data->count() > 0): ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--  -->
                        <div class="uk-margin-bottom">
                            <div class="uk-light-bg border uk-padding">
                                <a href="<?php echo e(url('page/' . tripurl($row->trips->uri))); ?>" class="uk-news-title">
                                    <h2 class="uk-margin-remove"><?php echo e($row->trips->trip_title); ?></h2>
                                </a>
                                <div class="uk-star-rating">
                                    <?php for($i = 0; $i < $row->rating; $i++): ?>
                                        <i class="fa-solid fa-star"></i>
                                    <?php endfor; ?>
                                </div>
                                <p >“<?php echo e($row->message); ?>“</p>
                            </div>
                        </div>
                        <!--  -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h3>Review is empty!</h3>
                <?php endif; ?>
                <?php if($data->count() > 0): ?>
                    <?php echo $__env->make('themes.default.user.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Lhakpa\resources\views/themes/default/user/review.blade.php ENDPATH**/ ?>