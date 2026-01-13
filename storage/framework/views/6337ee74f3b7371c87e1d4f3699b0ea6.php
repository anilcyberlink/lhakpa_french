<?php $__env->startSection('breadcrumb'); ?>
 <a href="<?php echo e(route('inquiry.index')); ?>" class="btn btn-primary btn-sm">Go Back</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="col-md-8">
		<!-- Input Fields -->
		<div class="panel">
			<div class="panel-body">  
				<div class="form-group">
				    <div class="col-lg-12">
						<div class="bs-component">
						    <h3>Inquiry Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class=""> Event Name</td>
                                        <td class=""><?php echo e(getPostName($inquiry->post_id)); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Start Date</td>
                                        <td class=""><?php echo e($inquiry->start_date); ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="">End Date</td>
                                        <td class=""><?php echo e($inquiry->end_date); ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="">Start Time</td>
                                        <td class=""><?php echo e($inquiry->start_time); ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="">End Time</td>
                                        <td class=""><?php echo e($inquiry->end_time); ?> </td>
                                    </tr>
                                    <tr>
                                        <td class="">Num of guests</td>
                                        <td class=""><?php echo e($inquiry->total_guests); ?> </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                           
						</div>
					</div>
					<div class="col-lg-12">
						<div class="bs-component">
						    <h3>Personal Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class="">Name</td>
                                        <td class=""><?php echo e($inquiry->first_name); ?> <?php echo e($inquiry->last_name); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Message</td>
                                        <td class=""><?php echo e($inquiry->message); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Fooding</td>
                                        <td class=""><?php echo e($inquiry->fooding); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                           
						</div>
					</div>
                    <div class="col-lg-12">
						<div class="bs-component">
						    <h3>Contact Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class="">Email</td>
                                        <td class=""><?php echo e($inquiry->email); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Phone</td>
                                        <td class=""><?php echo e($inquiry->phone); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Address</td>
                                        <td class=""><?php echo e($inquiry->address); ?></td>
                                    </tr>
                                </tbody>
                            </table>
						</div>
					</div>
				</div> 
			</div>
		</div> 
	</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/admin/room-inquiry/show.blade.php ENDPATH**/ ?>