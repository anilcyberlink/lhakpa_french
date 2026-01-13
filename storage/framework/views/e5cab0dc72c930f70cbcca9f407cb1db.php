
<?php $__env->startSection('content'); ?>
<!-- Start Section -->
<section class="uk-section uk-booking uk-position-relative" style="background: linear-gradient(135deg, #1a1a1a, #3f3e3e); min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div class="uk-container uk-container-small" uk-scrollspy="target: [uk-scrollspy-class], img, h1, h2, h3, h4, h5, h6, hr, .uk-button, li, p; cls: uk-animation-slide-top-small; delay: 50; repeat: false;">
        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-text-center uk-box-shadow-large" style="background: white; padding: 2rem;">
            
            <!-- Animated Success Icon -->
            <div class="uk-margin-bottom">
                <div class="uk-inline">
                    <span class="uk-icon-button uk-text-success" style="background: #e0f3e0; border-radius: 50%; padding: 1rem;">
                        <i class="fa fa-check fa-3x"></i>
                    </span>
                </div>
            </div>

            <h2 class="uk-text-bold uk-text-success">Booking Confirmed!</h2>
            <h3 class="uk-h4 uk-margin-remove">Dear <b><?php echo e($name); ?></b>,</h3>
            <p class="uk-text-muted"><?php echo $message; ?></p>

            <hr class="uk-divider-icon">

            <!-- Brand Name -->
            <p><b>Best Wishes,</b>  
            <br><span class="uk-text-bold uk-text-primary" style="font-size: 1.2rem;"><?php echo e($setting->site_name); ?></span></p>

            <!-- Call to Action Buttons -->
            <div class="uk-margin-top">
                <a href="<?php echo e(url('/')); ?>" class="uk-button uk-button-primary uk-border-pill" style="padding: 10px 20px; font-size: 1rem;">Go to Home</a>
                <a href="<?php echo e(url('/bookings')); ?>" class="uk-button uk-button-secondary uk-border-pill" style="padding: 10px 20px; font-size: 1rem;">View My Bookings</a>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/booking-success.blade.php ENDPATH**/ ?>