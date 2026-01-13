<?php $__env->startSection('breadcrumb'); ?>
 <a href="<?php echo e(route('room-booking')); ?>" class="btn btn-primary btn-sm">Go Back</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="col-md-8">
		<!-- Input Fields -->
		<div class="panel">
			<div class="panel-body">  
				<div class="form-group">
				    <div class="col-lg-12">
						<div class="bs-component">
						    <h3>Room Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                <tr>
                                    <td class=""> Room Name</td>
                                    <td class=""><?php echo e(getPostName($book->post_id)); ?></td>
                                </tr>
                                <tr>
                                    <td class="">Total Rooms</td>
                                    <td class=""><?php echo e($book->total_rooms); ?> </td>
                                </tr>
                                <tr>
                                    <td class="">Total Guests</td>
                                    <td class=""><?php echo e($book->total_guests); ?> </td>
                                </tr>
                                <tr>
                                    <td class="">Fooding</td>
                                    <td class=""><?php echo e($book->fooding); ?> </td>
                                </tr>
                                <tr>
                                    <td class="">Check In Date</td>
                                    <td class=""><?php echo e($book->check_in_date); ?> </td>
                                </tr>
                                <tr>
                                    <td class="">Check Out Date</td>
                                    <td class=""><?php echo e($book->check_out_date); ?> </td>
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
                                    <td class=""><?php echo e($book->first_name); ?> <?php echo e($book->last_name); ?></td>
                                </tr>
                                <tr>
                                    <td class="">Nationality</td>
                                    <td class=""><?php echo e($book->nationality); ?></td>
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
                                        <td class=""><?php echo e($book->email); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Phone</td>
                                        <td class=""><?php echo e($book->phone); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Country</td>
                                        <td class=""><?php echo e($book->country); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Address</td>
                                        <td class=""><?php echo e($book->address); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="">Zip/Postal.</td>
                                        <td class=""><?php echo e($book->zip); ?></td>
                                    </tr>
                                </tbody>
                            </table>
						</div>
					</div>
                    <div class="col-lg-12">
						<div class="bs-component">
						    <h3>Other Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class="">Message</td>
                                        <td class=""><?php echo e($book->message); ?></td>
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


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/admin/room-booking/show.blade.php ENDPATH**/ ?>