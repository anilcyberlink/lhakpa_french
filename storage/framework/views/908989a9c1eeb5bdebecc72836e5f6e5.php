
<?php $__env->startSection('title', $data->post_type); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->banner); ?>
<?php $__env->startSection('content'); ?>
    <!-- HEADER START -->
    <section class="bg-secondary uk-position-relative uk-flex uk-flex-middle uk-background-norepeat"
        uk-height-viewport="expand: true; min-height: 250;">
        <div class="uk-width-1-1"
            uk-scrollspy="target: [uk-scrollspy-class], .f-18, h1, p, a; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
            <div class="uk-container uk-position-relative">
                <div class="inherit-position uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-width-1-1@m">
                        <h1 class="uk-h1 text-white"><?php echo e($data->post_type); ?></h1>
                        <div class="f-18 uk-margin uk-width-large text-white"><?php echo e($data->caption); ?> </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- HEADER END -->
    <!-- check-availability -->
    <section
        class="uk-section-small uk-section-muted uk-check-availability uk-background-norepeat uk-background-cover uk-background-bottom-right"
        uk-img data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown-1.svg">
        <div class="uk-container uk-container-large">
            <?php echo $__env->make('themes.default.common.check-availability', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    <!-- end check-availability -->
    <!-- section -->
    <section class="uk-section bg-white uk-position-relative">
        <div class="uk-container"
            uk-scrollspy="target:[uk-scrollspy-class], h1, h2, h3, h4, h5, h6, p, i, li, form, .uk-link, iframe; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-1@s">
                    <?php echo $setting->google_map2; ?>

                </div>
                <div class="uk-width-expand@s">


                    <p class="f-w-600">General Inquiry</p>
                    <?php if($message = Session::get('success')): ?>
                        <div class="uk-alert uk-alert-success">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <div class="uk-alert uk-alert-danger" style="color:red">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('sendmail')); ?>" method="POST" class="uk-grid-medium" uk-grid>
                        <?php echo csrf_field(); ?>
                        <!--  -->
                        <div class="uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="firstname">First Name <span
                                    class="text-red">*</span></label>
                            <input type="text" id="firstname" class="uk-input" name="firstname">
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="lastname">Last Name <span
                                    class="text-red">*</span></label>
                            <input type="text" id="lastname" class="uk-input" name="lastname">
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="phone">Phone <span
                                    class="text-red">*</span></label>
                            <input type="number" id="phone" class="uk-input" name="phone">
                        </div>
                        <!--  -->

                        <!--  -->
                        <div class="uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="email">Email <span
                                    class="text-red">*</span></label>
                            <input type="email" id="email" class="uk-input" name="email">
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="uk-width-1-1@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="Message">Message</label>
                            <textarea id="Message" class="uk-textarea" rows="4" placeholder="Message" name="comments"></textarea>
                        </div>
                        <!--  -->
                        <div class="uk-width-1-1@s">
                            <?php echo HCaptcha::display(); ?>

                        </div>
                        <!--  -->
                        <div class="uk-width-1-1@s">
                            <button class="uk-button uk-button-secondary" type="submit">Submit </button>
                        </div>
                        <!--  -->

                    </form>
                </div>


                <div class="uk-width-2-5@s">
                    <p class="f-w-600">Get in Touch</p>
                    <ul class="uk-flex   uk-grid uk-margin">
                        <li>
                            <a href="<?php echo e(route('booking')); ?>" class="uk-button uk-button-black">Room Inquiry</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('event-inquiry')); ?>" class="uk-button uk-button-black-outline">Event
                                Inquiry</a>
                        </li>
                    </ul>
                    <?php echo $data->content; ?>

                    <ul class="uk-grid-small uk-text-left@l  uk-text-center" uk-grid="">
                        <li>
                            <a class="uk-link uk-icon-button bg-secondary text-white uk-icon" rel="noreferrer"
                                href="<?php echo e($setting->facebook_link); ?>" uk-icon="icon: facebook;" target="_blank"></a>
                        </li>
                        <li>
                            <a class="uk-link uk-icon-button bg-secondary text-white uk-icon" rel="noreferrer"
                                href="<?php echo e($setting->youtube_link); ?>" uk-icon="icon: youtube;" target="_blank"></a>
                        </li>
                        <li>
                            <a class="uk-link uk-icon-button bg-secondary text-white uk-icon" rel="noreferrer"
                                href="<?php echo e($setting->twitter_link); ?>" uk-icon="icon: twitter;" target="_blank"></a>
                        </li>
                        <li>
                            <a class="uk-link uk-icon-button bg-secondary text-white uk-icon" rel="noreferrer"
                                href="<?php echo e($setting->instagram_link); ?>" uk-icon="icon: instagram;" target="_blank"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.inner-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/posttypeTemplate-contact.blade.php ENDPATH**/ ?>