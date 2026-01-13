
<?php $__env->startSection('content'); ?>
<!-- HEADER START -->
<section class="bg-secondary uk-position-relative uk-flex uk-flex-middle uk-background-norepeat"
    uk-height-viewport="expand: true; min-height: 250;">
    <div class="uk-width-1-1"
        uk-scrollspy="target: [uk-scrollspy-class], .f-18, h1, p, a; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
        <div class="uk-container uk-position-relative">
            <div class="inherit-position uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-width-1-1@m">
                    <h1 class="uk-h1 text-white">Book Now</h1>
                    <div class="f-18 uk-margin uk-width-large text-white">Hospitality beyond borders </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- HEADER END -->
<!-- section -->
<section class="uk-section bg-light uk-position-relative">
    <div class="uk-container"
        uk-scrollspy="target:h1, h2, h3, h4, h5, h6, label, input, select, textarea, .uk-button, .tui-ico-date; cls: uk-animation-slide-bottom-medium;   delay: 50; repeat: false;">
        <div class="bg-white uk-padding uk-box-shadow-medium uk-border-rounded">
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

            <form action="<?php echo e(route('booking')); ?>" method="POST"  class="uk-grid-medium" uk-grid>
                        <?php echo csrf_field(); ?>
                <!--  -->
                <div class="uk-width-1-1">
                    <h4 class="uk-margin-small text-primary">Personal Details</h4>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-3@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="firstname">Full Name <span
                            class="text-red">*</span></label>
                    <input type="text" id="firstname" class="uk-input" name="full_name">
                </div>
                <!--  -->               
                <!--  -->
                <div class="uk-width-1-3@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="phone">Phone <span
                            class="text-red">*</span></label>
                    <input type="text" id="phone" class="uk-input" name="phone">
                </div>
                <!--  -->

                <!--  -->
                <div class="uk-width-1-3@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="email">Email <span
                            class="text-red">*</span></label>
                    <input type="email" id="email" class="uk-input" name="email">
                </div>
                <!--  -->

                <!--  -->
                <div class="uk-width-1-1">
                    <h4 class="uk-margin-small text-primary">Additional Details</h4>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-4@s">
                    <label class="f-14 uk-display-block uk-margin-small-bottom" for="date">Date</label>
                    <div class="tui-datepicker-input tui-datetime-input tui-has-focus">
                        <input class="uk-input startpicker-input" type="text" aria-label="Date" name="date">
                        <span class="tui-ico-date"></span>
                        <div class="startpicker-container"></div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-4@s">
                    <label class="f-14 uk-display-block uk-margin-small-bottom" for="time">Time</label>
                    <div class="tui-datepicker-input tui-datetime-input tui-has-focus">
                        <input class="uk-input" type="time" aria-label="Time" name="time">
                        <span class="tui-ico-date"></span>
                        <div class="endpicker-container"></div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-4@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="NoAdults">No. of Adults <span
                            class="text-red">*</span></label>
                    <input type="number" id="NoAdults" class="uk-input" name="NoAdults">
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-4@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="NoChildren">No. of Children <span
                            class="text-red">*</span></label>
                    <input type="number" id="NoChildren" class="uk-input" name="NoChildren">
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-3@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="service">Select Service <span
                            class="text-red">*</span></label>  
                    
                      <select name="service" id="service" class="uk-select">
                      <option selected disabled>Select</option>
                      <?php if($services): ?>
                      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($value->post_title); ?>" <?php echo e($value->uri == $uri?'selected':''); ?>><?php echo e($value->post_title); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                   </select>
                                    
                </div>
                <!--  -->

                <!--  -->
                <div class="uk-width-1-1">
                    <label class="uk-margin-small-bottom uk-display-block" for="Requirement"> Special
                        Requirement</label>
                    <textarea name="comments" class="uk-textarea" rows="4" id="Requirement"
                        placeholder="Please tell us more about yourself to help you better"></textarea>
                </div>
                <!--  -->
                 <div class="uk-width-1-3">
                 <div class="captcha" >
                   <span><?php echo captcha_img('flat'); ?></span>
                   <button type="button" class="uk-button"><i class="fa fa-refresh" id="refresh"></i></button>
                   </div>
                   <label for="captcha">
                   <input id="captcha" type="text" placeholder="Enter Captcha" name="captcha" class="uk-input">                  
                   </label>
                 </div>
                <div class="uk-width-1-1@s uk-text-center">
                    <button class="uk-button uk-button-primary" type="submit">Book Now</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- section end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.inner-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/book-now.blade.php ENDPATH**/ ?>