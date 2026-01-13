
<?php $__env->startSection('title',$data->post_title ?? ''); ?>
<?php $__env->startSection('meta_keyword',$data->meta_keyword ?? ''); ?>
<?php $__env->startSection('meta_description',$data->meta_description ?? ''); ?>
<?php $__env->startSection('thumbnail',$data->banner ?? ''); ?>
<?php $__env->startSection('schema_markup'); ?>
<?php echo $data->schema_markup ?? ''; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- banner section start -->
    <section class=" uk-inner-banner uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center uk-background-fixed">
        <div class="uk-container uk-width-1-1  uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse uk-text-center" uk-grid>
                <div class="uk-width-1-2@m">
                    <ul class="uk-breadcrumb center-underline" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                        <li><span class="uk-primary">Inquiry</span></li>
                    </ul>
                    <div class="uk-banner-font" uk-scrollspy="target: h1; cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                        <h1 class="uk-white">Event Inquiry</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->
    <!-- form section start-->
    <section class="uk-section  uk-position-relative">
        <div class="uk-container uk-position-relative">
            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-expand@s">
                    <h2 class="uk-primary">Enquiry Form</h2>
                    <form action="<?php echo e(route('event-inquiry')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response"/>
                        <div class="uk-floating-form light-bg uk-padding uk-margin-bottom">
                            <h3>Personal Details</h3>
                            <div class="uk-child-width-1-2@m uk-grid-small" uk-grid>
                                <div>
                                    <label for="name">
                                        <input type="text" id="name" placeholder="First Name" name="first_name" required> <span>First Name *</span> </label>
                                </div>
                                <div>
                                    <label for="lname">
                                        <input type="text" id="lname" placeholder="Last name" name="last_name" required> <span>Last Name *</span> </label>
                                </div>
                                <div>
                                    <label for="phone">
                                        <input type="tel" id="phone" placeholder="phone" name="phone" required> <span>Phone *</span> </label>
                                </div>
                                <div>
                                    <label for="Email">
                                        <input type="Email" id="phone" placeholder="Email" name="email" required> <span>Email *</span> </label>
                                </div>
                                <div>
                                    <label for="address">
                                        <input type="text" id="address" placeholder="Enter your Address" name="address" required> <span>Address *</span> </label>
                                </div>
                            </div>
                            <h3>Event Details</h3>
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-1">
                                    <label for="EventType">
                                        <?php if($data && $data->id): ?>
                                            <input type="text" id="EventType" value="<?php echo e($data->post_title); ?>" name="event_type" readonly="readonly" style="cursor:not-allowed" required>
                                            <input type="hidden" name="post_id" value="<?php echo e($data->id); ?>" />
                                        <?php else: ?>
                                            <select id="" id="EventType" placeholder="Event" name="event_type" required>
                                                <option value="">Select</option>
                                                <?php $__currentLoopData = $eventLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($row->id); ?>" <?php echo e($data && $data->id == $row->id ? 'selected' : ''); ?>><?php echo e($row->post_title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php endif; ?>
                                        <span>Event Type *</span>
                                    </label>
                                </div>
                                <div class="uk-width-1-2">
                                    <label for="Guest">
                                        <input type="number" id="Guest" placeholder="Guest" min="1" name="total_guests" required> <span>Number of Guest *</span> </label>
                                </div>
                                <div class="uk-width-1-2">
                                    <label for="Fooding">
                                        <select name="fooding" id="" id="Fooding" placeholder="Fooding" required>
                                            <option value="" disabled selected>Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                        <span>Fooding *</span> </label>
                                </div>
                                <div class="uk-width-1-2">
                                    <label for="startdate">
                                        <input type="date" id="startdate" placeholder="startdate" name="start_date" required> <span>Event Start Date *</span> </label>
                                </div>
                                <div class="uk-width-1-2">
                                    <label for="enddate">
                                        <input type="date" id="enddate" placeholder="enddate" name="end_date" required> <span>Event End Date *</span> </label>
                                </div>
                                <div class="uk-width-1-2">
                                    <label for="starttime">
                                        <input type="time" id="starttime" placeholder="starttime" name="start_time" required> <span>Event Start Time *</span> </label>
                                </div>
                                <div class="uk-width-1-2">
                                    <label for="endtime">
                                        <input type="time" id="endtime" placeholder="endtime" name="end_time" required> <span>Event End Time *</span> </label>
                                </div>
                            </div>
                            <label for="Comments" class="uk-margin-top">
                                <textarea name="message" id="Comments" placeholder="Please tell us about your special requirements"></textarea> <span>Other Special Requirements</span> </label>
                        </div>
                        <label><input class="uk-checkbox" type="checkbox" name="agree"> I accept the terms and conditions</label>
                        <div class="uk-margin-medium-top">
                            <button class="uk-btn uk-btn-primary" type="submit">Submit </button>
                        </div>
                    </form>
                </div>
                <div class="uk-width-2-5@s">
                    <div uk-sticky="offset: 90; end: #my-id; " style="z-index: 100;">
                        <h2 class="uk-primary">Get in Touch</h2>
                        <ul class="uk-list uk-list-large light-bg uk-padding">
                            <?php if($setting->location1): ?>
                                <li>
                                    <div class="uk-flex uk-flex-middle f-500">
                                        <div><span class="uk-margin-small-right" uk-icon="icon: location; ratio:1;"></span></div>
                                        <div><?php echo e($setting->location1); ?></div>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if($setting->email_primary): ?>
                                <li>
                                    <div class="uk-flex uk-flex-middle f-500">
                                        <div><span class="uk-margin-small-right" uk-icon="icon: mail; ratio:1;"></span></div>
                                        <div><?php echo e($setting->email_primary); ?></div>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if($setting->phone): ?>
                                <li>
                                    <div class="uk-flex uk-flex-middle f-500">
                                        <div><span class="uk-margin-small-right" uk-icon="icon: receiver; ratio:1;"></span></div>
                                        <div> <?php echo e($setting->phone); ?> </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if($setting->phone2): ?>
                                <li>
                                    <div class="uk-flex uk-flex-middle f-500">
                                        <div><span class="uk-margin-small-right" uk-icon="icon: phone; ratio:1;"></span></div>
                                        <div><?php echo e($setting->phone2); ?></div>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="my-id"></div>
        </div>
    </section>
    <!-- form section end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/event-inquiry.blade.php ENDPATH**/ ?>