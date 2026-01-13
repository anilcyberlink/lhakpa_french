
<?php $__env->startSection('content'); ?>
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed uk-grey-bg" style="height:400px;" data-src="<?php echo e(asset('theme-assets/img/bg/pattern.png')); ?>" alt="" uk-img>
    <div class="uk-container uk-width-1-1  uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary uk-margin-large-top">Your Travel History</h2>
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
                <p class="uk-visible@m uk-white" style="margin:2rem 0px 5rem 0;">Trip you have visited with us :
                </p>
 
                <table class="uk-table uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th style="width: 80px;"></th>
                            <th>Trip Name</th>
                            <th>Departure Type</th>
                            <th>Trip Status</th>
                            <th>Trip Start Date</th>      
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($data->count() > 0): ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <tr>
                            <td><img src="<?php echo e(!empty(tripdetail($row->trip_id)->thumbnail) ? asset('uploads/original/'.tripdetail($row->trip_id)->thumbnail) : asset('theme-assets/img/mountain/mountain9.jpeg')); ?>" class="uk-history-img" alt="<?php echo e(tripname($row->trip_id)); ?>"></td>
                            <td class="uk-text-uppercase"><?php echo e(tripname($row->trip_id)); ?></td>
                            <td><?php echo e($row->depature_type  == 1 ? 'Fixed' : 'normal'); ?></td>
                            <td>
                            <?php echo e($row->paid_status == 0 ? 'Ongoing' : 'Completed'); ?>

                                                      
                        </td>
                            <td><?php echo e(date("d M Y", strtotime($row->trip_start_date))); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                       
                    </tbody>
                </table>
                <?php echo $__env->make('themes.default.user.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/user/history.blade.php ENDPATH**/ ?>