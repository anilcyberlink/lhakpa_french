
<?php $__env->startSection('title', $data->post_type); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->banner); ?>
<?php $__env->startSection('content'); ?>
    <!-- banner section start -->
    <section class="uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/' . $data->banner) : ''); ?>" alt="<?php echo e($data->post_type); ?>" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1  uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse uk-text-center" uk-grid>
                <div class="uk-width-1-2@m">
                    <ul class="uk-breadcrumb center-underline" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                        <li><span class="uk-primary"><?php echo e($data->uid ?? $data->post_type); ?></span></li>
                    </ul>
                    <div class="uk-banner-font" uk-scrollspy="target: h1,p,a; cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <h1 class="uk-white"><?php echo e($data->uid ?? $data->post_type); ?></h1>
                        <p class="uk-white uk-text-center">Visit Us & Experience True Hospitality</p>
                        <a class="uk-content uk-btn uk-button-text uk-white f-500" href="#section" uk-scroll=""> Scroll To Discover <span uk-icon="icon:arrow-right; ratio: 1.5"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->
    <section class="uk-section" id="section">
        <div class="uk-container">
            <div class="uk-text-center">
            <h2 class="uk-primary">For Reservations & Inquiries</h2>
            <p class="uk-text-center">At Hotel Tapowan, we are more than just a hotel—we are a home away from home, where every stay is filled with warmth, care, and love.</p>
            </div>
            
            <div class="uk-grid  uk-child-width-1-3@m">
                <?php if($setting->location1): ?>
                    <div class="uk-padding">
                        <div class="primary-bg uk-padding-small border uk-box-shadow-medium uk-flex uk-flex-middle" style="height:32px;">
                            <img src="<?php echo e(asset('themes-assets/img/location.png')); ?>" height="26" width="26" alt="" class="uk-margin-right">
                            <div>
                                <p class="uk-white fw-500 uk-margin-remove f-14"><?php echo e($setting->location1); ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($setting->email_primary): ?>
                    <div class="uk-padding">
                        <div class="primary-bg uk-padding-small border uk-box-shadow-medium uk-flex uk-flex-middle" style="height:32px;">
                            <img src="<?php echo e(asset('themes-assets/img/mail.png')); ?>" height="26" width="26" alt="" class="uk-margin-right">
                            <div>
                                <p class="uk-white fw-500 uk-margin-remove f-14"><?php echo e($setting->email_primary); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($setting->phone || $setting->phone2): ?>
                    <div class="uk-padding">
                        <div class="primary-bg uk-padding-small border uk-box-shadow-medium uk-flex uk-flex-middle" style="height:32px;">
                            <img src="<?php echo e(asset('themes-assets/img/call.png')); ?>" height="26" width="26" alt="" class="uk-margin-right">
                            <div>
                                <p class="uk-white fw-500 uk-margin-remove f-14"><?php echo e($setting->phone); ?> <br> <?php echo e($setting->phone2); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="uk-grid uk-grid-collapse uk-grid-match uk-margin-top uk-child-width-1-2@m">
                <?php if($setting->google_map2): ?>
                    <div class="uk-margin-top">
                    <?php echo $setting->google_map2; ?>

                    </div>
                <?php endif; ?>
                <div class="light-bg uk-padding uk-margin-top">
                    <form action="<?php echo e(route('contact')); ?>" method="POST" class="uk-grid-small" uk-grid>
                        <?php echo csrf_field(); ?>
                        <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                        <div class="uk-width-1-2@s">
                            <label class="uk-form-label uk-black" for="Name">Full Name</label>
                            <input class="uk-input border" type="text" name="full_name" aria-label="Name" required>
                        </div>
                        <div class="uk-width-1-2@s">
                            <label class="uk-form-label uk-black" for="Contact">Contact</label>
                            <input class="uk-input border" type="number" aria-label="Contact" name="phone" required>
                        </div>
                        <div class="uk-width-1-2@s">
                            <label class="uk-form-label uk-black" for="Email">Email</label>
                            <input class="uk-input border" type="email" aria-label="Email" name="email" required>
                        </div>
                        <div class="uk-width-1-2@s">
                            <label class="uk-form-label uk-black" for="country">Country</label>
                            <select class="uk-select border" id="country" name="country" required>
                                <?php echo $__env->make('themes.default.common.country', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </select>
                        </div>
                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea border"  rows="5" placeholder="Message" aria-label="Message" name="message" required></textarea>
                        </div>
                        <div class="uk-width-1-1 uk-text-center uk-margin-top">
                            <button class="uk-btn uk-btn-primary ">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ukeshcom/demo1/resources/views/themes/default/posttypeTemplate-contact.blade.php ENDPATH**/ ?>