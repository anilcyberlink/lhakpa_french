
<?php $__env->startSection('breadcrumb'); ?>
     <a href="<?php echo e(Request::segment(1).'/'.Request::segment(2)); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" action="<?php echo e(url('admin/imagegallery')); ?>" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>            
	<div class="col-md-8">
		<!-- Input Fields -->
		<div class="panel">
			<div class="panel-heading">
				<span class="panel-title">New Gallery Image  </span>
			</div>
			<div class="panel-body"> 

				<div class="form-group">
          <label for="inputSelect" class="col-lg-3 control-label">Category </label>
          <div class="col-lg-8">
            <div class="bs-component">
              <select class="form-control" name="category_id">
               <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($row->id); ?>"><?php echo e($row->category); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
          </div>
        </div>
        <div class="form-group">
         <label for="inputSelect" class="col-lg-3 control-label">Post Type </label>
          <div class="col-lg-8">
            <div class="bs-component">
              <select class="form-control" name="post_type">
               <?php $__currentLoopData = $post_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($row->id); ?>"><?php echo e($row->post_type); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
          </div>
        </div>

				<div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Picture </label>
					<div class="col-lg-8">
						<div class="bs-component">
							<input type="file" id="inputStandard" name="picture" class="form-control" placeholder="" />
							<br />
              ( Width: 1500px, Height:1500px all time fix size )
						</div>
					</div>
				</div>  

				<!-- <div class="form-group">
					<label for="inputStandard" class="col-lg-3 control-label">Caption </label>
					<div class="col-lg-8">
						<div class="bs-component">
							<input type="text" id="inputStandard" name="caption" class="form-control" placeholder="" />
						</div>
					</div>
				</div>          -->

				<div class="form-group">
					<label class="col-lg-3 control-label" for="textArea3"> </label>
					<div class="col-lg-8">
						<div class="bs-component">
							<input type="submit" class="btn btn-primary btn-lg" value="Submit" />
						</div>
					</div>
				</div> 


			</div>
		</div>          
	</div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ukeshcom/demo1/resources/views/admin/image-gallery/create.blade.php ENDPATH**/ ?>