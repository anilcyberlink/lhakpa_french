
<?php $__env->startSection('content'); ?>
<!-- HEADER START -->
<section class="bg-secondary uk-position-relative uk-flex uk-flex-middle uk-background-norepeat"
    uk-height-viewport="expand: true; min-height: 250;">
    <div class="uk-width-1-1"
        uk-scrollspy="target: [uk-scrollspy-class], .f-18, h1, p, a; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
        <div class="uk-container uk-position-relative">
            <div class="inherit-position uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-width-1-1@m">
                    <h1 class="uk-h1 text-white">Event Inquiry</h1>
                    <div class="f-18 uk-margin uk-width-large text-white">Hospitality
                        beyond borders </div>
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
            <form action="<?php echo e(route('event-inquiry')); ?>" method="POST"  class="uk-grid-medium" uk-grid>
                 <?php echo csrf_field(); ?>
                <!--  -->              

                <div class="uk-width-1-1">
                    <h4 class="uk-margin-small text-primary">Personal Details</h4>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-2@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="firstname">Full Name <span
                            class="text-red">*</span></label>
                    <input type="text" id="firstname" class="uk-input" name="full_name">
                </div>
                <!--  -->  
                <!--  -->   
                 <div class="uk-width-1-2@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="org_name">Organization Name </label>
                    <input type="text" id="org_name" class="uk-input" name="org_name" placeholder="Optional">
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="phone">Phone <span
                            class="text-red">*</span></label>
                    <input type="number" id="phone" class="uk-input" name="phone">
                </div>
                <!--  -->

                <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="email">Email <span
                            class="text-red">*</span></label>
                    <input type="email" id="email" class="uk-input" name="email">
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="Address">Address <span
                            class="text-red">*</span></label>
                    <input type="text" id="Address" class="uk-input" name="address">
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-1">
                    <h4 class="uk-margin-small text-primary">Event Details</h4>
                </div>
                <!--  -->

                <!--  -->
                <div class="uk-width-1-4@m uk-width-1-2@s">
                    <label class="f-14 uk-display-block uk-margin-small-bottom" for="checkin">Event Start Date <span
                            class="text-red">*</span></label>
                    <div class="tui-datepicker-input tui-datetime-input tui-has-focus">
                        <input class="uk-input startpicker-input" type="text" aria-label="Date" name="start_date">
                        <span class="tui-ico-date"></span>
                        <div class="startpicker-container"></div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-4@m uk-width-1-2@s">
                    <label class="f-14 uk-display-block uk-margin-small-bottom" for="checkout">Event End Date <span
                            class="text-red">*</span></label>
                    <div class="tui-datepicker-input tui-datetime-input tui-has-focus">
                        <input class="uk-input endpicker-input" type="text" aria-label="Date" name="end_date">
                        <span class="tui-ico-date"></span>
                        <div class="endpicker-container"></div>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-4@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="timefrom">Time From<span
                            class="text-red">*</span></label>
                    <input type="time" id="timefrom" class="uk-input" name="timefrom">
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-4@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="timeto">Time To<span
                            class="text-red">*</span></label>
                    <input type="time" id="timeto" class="uk-input" name="timeto">
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="Hall">Hall Type<span
                            class="text-red">*</span></label>
                    <select name="hall_type" id="Hall" class="uk-select uk-select-option">
                        <option value="" disabled selected>Select</option>
                        <option value="ImperialHall">Imperial Hall</option>
                        <option value="DrishyaDawn" >Drishya Dawn</option>
                        <option value="DrishyaDusk">Drishya Dusk</option>
                        <option value="BoardRoom">Board Room</option>
                        <option value="MeetingRoom">Meeting Room</option>
                    </select>
                </div>
                <!--  -->
                 <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="Hallsetup">Hall setup<span
                            class="text-red">*</span></label>
                    <select name="hall_setup" id="Hallsetup" class="uk-select uk-select-to-show ImperialHall onchange-select">
                        <option value="" disabled selected>Select</option>
                        <option value="theatre">Theatre (270 PAX)</option>
                        <option value="cluster">Cluster (140 PAX)</option>
                        <option value="classroom">Round Table (160 PAX)</option>                        
                        <option value="ushape">U-Shape (50 PAX)</option>
                        <option value="event">Event (300 PAX)</option>
                    </select>

                     <select name="hall_setup" id="Hallsetup" class="uk-select uk-select-to-show DrishyaDawn DrishyaDusk onchange-select" style="display: none;">
                        <option value="" disabled selected>Select</option>
                        <option value="theatre">Theatre (60 PAX)</option>
                        <option value="cluster">Cluster (35 PAX)</option>
                        <option value="classroom">Round Table (45 PAX)</option>                        
                        <option value="ushape">U-Shape (25 PAX)</option>
                    </select>                    

                     <select name="hall_setup" id="Hallsetup" class="uk-select uk-select-to-show BoardRoom onchange-select" style="display: none;">
                        <option value="" disabled selected>Select</option>
                        <option value="standard">Standard Setup (12 PAX)</option>                        
                    </select> 

                    <select name="hall_setup" id="Hallsetup" class="uk-select uk-select-to-show  MeetingRoom onchange-select" style="display: none;">
                        <option value="" disabled selected>Select</option>
                        <option value="standard">Standard Setup (20 PAX)</option>                        
                    </select>                    
                </div>
                <!--  -->
                 <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="Theme">Event Type <span
                            class="text-red">*</span></label>
                    <select name="theme" id="Theme" class="uk-select onchange event " style="display: none;">
                        <option value="" disabled selected>Select</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Engagement">Engagement</option>
                        <option value="Bartabandha">Bartabandha (Thread Wearing)</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Others">Anniversary</option>
                        <option value="Others">Others</option>
                    </select>
                    
                    <select name="theme" id="Theme" class="uk-select onchange theatre cluster classroom ushape standard" style="display: none;">
                        <option value="" disabled selected>Select</option>
                        <option value="Conference">Conference</option>
                        <option value="AGM">AGM</option>
                        <option value="Board-Meeting">Board Meeting</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                
                <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="GuaranteedPax">Guaranteed Pax <span
                            class="text-red">*</span></label>
                    <input type="number" id="GuaranteedPax" class="uk-input" name="GuaranteedPax">
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="ExpectedPax">Expected Pax <span
                            class="text-red">*</span></label>
                    <input type="number" id="ExpectedPax" class="uk-input" name=ExpectedPax>
                </div>
                <!--  -->               

                <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="Decoration">Decoration <span
                            class="text-red">*</span></label>
                    <select name="decoration" id="Decoration" class="uk-select">
                        <option value="" disabled selected>Select</option>
                        <option value="By Hotel">By Hotel (Normal)</option>
                        <option value="By Host">By Host</option>
                    </select>
                </div>
                <!--  -->

                <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="Furnishing">Furnishing setup <span
                            class="text-red">*</span></label>
                    <select name="furnishing" id="Furnishing" class="uk-select">
                        <option value="" disabled selected>Select</option>
                        <option value="Chair Bow">Chair Bow: Red/Brown/Silver/Blue</option>
                        <option value="Chair Cover">Chair Cover</option>
                        <option value="Table Cover">Table Cover: Red/Blue/Green/White</option>
                    </select>
                </div>
                <!--  -->
               
                <!--  -->

                <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="Food">Food<span
                            class="text-red">*</span></label>
                    <select name="food" id="Food" class="uk-select">
                        <option value="" disabled selected>Select</option>
                        <option value="By Hotel">By Hotel Only</option>
                        <option value="By Host">By Host</option>
                    </select>
                </div>
                <!--  -->
                 <!--  -->
                <div class="uk-width-1-3@m uk-width-1-2@s">
                    <label class="uk-margin-small-bottom uk-display-block" for="Menutheme">Menu theme<span class="text-red">*</span> 
                    -  <a href="<?php echo e(url('page/'.posttype_url('emenu'))); ?>" class="text-color-primary" target="_blank"><i class="fa fa-info-circle"></i>View Menu</a></label>
                    <select name="menu_theme" id="Menutheme" class="uk-select ">
                        <option value="" disabled selected>Select</option>
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($row->category); ?>"><?php echo e($row->category); ?> </option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                      
                    </select>
                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-1">

                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-2@s">
                    <h4 class="uk-margin-small text-primary">Drinks from host</h4>
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-3@m uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="Liqour">
                                <input type="checkbox" id="Liqour" class="uk-checkbox" name="drinks_host[]" value="Hard Drinks">
                                Hard Drinks
                            </label>
                        </div>                     

                        <div class="uk-width-1-3@m uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="Wine">
                                <input type="checkbox" id="Wine" class="uk-checkbox" name="drinks_host[]" value="Wine">
                                Wine
                            </label>
                        </div>
                    </div>

                </div>
                <!--  -->


                <!--  -->
                <div class="uk-width-1-2@s">
                    <h4 class="uk-margin-small text-primary">Drinks from hotel</h4>
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-3@m uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="SoftDrinks">
                                <input type="checkbox" id="SoftDrinks" class="uk-checkbox" name="drinks_hotel[]" value="Soft Drinks">
                                Soft Drinks
                            </label>
                        </div>

                        <div class="uk-width-1-3@m uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="FreshJuice">
                                <input type="checkbox" id="FreshJuice" class="uk-checkbox" name="drinks_hotel[]" value="Fresh Juice">
                                Fresh Juice
                            </label>
                        </div>                       

                        <div class="uk-width-1-3@m uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="Beer/Bottle">
                                <input type="checkbox" id="Beer/Bottle" class="uk-checkbox" name="drinks_hotel[]" value="Beer/Bottle">
                                Beer/Bottle
                            </label>
                        </div>
                        <div class="uk-width-1-3@m uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="Liquor/Bottle">
                                <input type="checkbox" id="Liquor/Bottle" class="uk-checkbox" name="drinks_hotel[]" value="Hard Drinks">
                               Hard Drinks
                            </label>
                        </div>
                         <div class="uk-width-1-3@m uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="Liquor/Bottle">
                                <input type="checkbox" id="Liquor/Bottle" class="uk-checkbox" name="drinks_hotel[]" value="Wine">
                              Wine
                            </label>
                        </div>


                    </div>

                </div>
                <!--  -->
               
                <!--  -->
                <div class="uk-width-1-1">

                </div>
                <!--  -->
                <!--  -->
                <div class="uk-width-1-2@s">
                   <h4>Entertainment</h4>
                    <div class="uk-grid-small" uk-grid>                       
                    <select name="entertainment" id="Food" class="uk-select">
                        <option value="" disabled selected>Select</option>
                       <option value="By Hotel">By Hotel</option>
                        <option value="By Host">By Host</option>
                    </select>
                    </div>

                </div>
                <!--  -->


                <!--  -->
                <div class="uk-width-1-2@s">                   
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="AudioEquipments">
                                <input type="checkbox" id="AudioEquipments" class="uk-checkbox" name="audio[]" value="Audio Equipments">
                                Audio Equipments
                            </label>
                        </div>

                        <div class="uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="VisualEquipments">
                                <input type="checkbox" id="VisualEquipments" class="uk-checkbox" name="audio[]" value=" Visual Equipments">
                                Visual Equipments
                            </label>
                        </div>

                        <div class="uk-width-1-2@s uk-select-to-show ImperialHall" style="display: none;">
                            <label class="uk-margin-small-bottom uk-display-block" for="LiveBand" >
                                <input type="checkbox" id="LiveBand" class="uk-checkbox" name="audio[]" value="Live Band">
                                Live Band
                            </label>
                        </div>

                        <div class="uk-width-1-2@s uk-select-to-show ImperialHall" style="display: none;">
                            <label class="uk-margin-small-bottom uk-display-block" for="CulturalShow" >
                                <input type="checkbox" id="CulturalShow" class="uk-checkbox" name="audio[]" value="Cultural Show">
                                Cultural Show
                            </label>
                        </div>
                        <div class="uk-width-1-2@s uk-select-to-show ImperialHall" style="display: none;">
                            <label class="uk-margin-small-bottom uk-display-block" for="MC/Host">
                                <input type="checkbox" id="MC/Host" class="uk-checkbox" name="audio[]" value=" MC/Host">
                                MC/Host
                            </label>
                        </div>
                        
                         <div class="uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for=" Zoom Meeting">
                                <input type="checkbox" id=" Zoom Meeting" class="uk-checkbox" name="audio[]" value="Zoom Meeting">
                               Zoom Meeting
                            </label>
                        </div>
                         <div class="uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="Internet Dedicated">
                                <input type="checkbox" id="Internet Dedicated" class="uk-checkbox" name="audio[]" value="Internet Dedicated">
                               Internet ( Dedicated - Payable )
                            </label>
                        </div>
                        <div class="uk-width-1-2@s">
                            <label class="uk-margin-small-bottom uk-display-block" for="Internet Shared">
                                <input type="checkbox" id=" Internet Shared" class="uk-checkbox" name="audio[]" value="Internet Shared">
                              Internet ( Shared - Free )
                            </label>
                        </div>

                    </div>

                </div>
                <!--  -->     
               
                <!--  -->
                <div class="uk-width-1-1">
                    <label class="uk-margin-small-bottom uk-display-block" for="Requirement">Other Special
                        Requirements</label>
                    <textarea name="requirements" class="uk-textarea" rows="4" id="Requirement"
                        placeholder="Please tell us more to help you better"></textarea>
                </div>
                <!--  -->
                <div class="uk-width-1-3">
                 <div class="captcha" >
                   <span><?php echo captcha_img('flat'); ?></span>
                   <button type="button" class="uk-button"><i class="fa fa-refresh" id="event"></i></button>
                   </div>
                   <label for="captcha">
                   <input id="captcha" type="text" placeholder="Enter Captcha" name="captcha" class="uk-input">                  
                   </label>
                 </div>
               

                <div class="uk-width-1-1@s uk-text-center">
                    <button class="uk-button uk-button-primary" type="submit">Inquiry Now</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- section end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.inner-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/event-inquiry.blade.php ENDPATH**/ ?>