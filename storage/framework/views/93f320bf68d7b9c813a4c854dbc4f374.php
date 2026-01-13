
<?php $__env->startSection('title','Post Category'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('trip-review')); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" action="<?php echo e(route('edit-trip-review',$data->id)); ?>" method="post" enctype="multipart/form-data">
  <?php echo e(csrf_field()); ?>

  <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
  <div class="col-md-9">
    <!-- Input Fields -->
    <div class="panel">
      <div class="panel-heading">
        <span class="panel-title">Edit Trip Review</span>
      </div>
      <div class="panel-body">

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Trip</label>
        <div class="col-lg-8">
        <div class="bs-component">
            <select class="form-control" name="trip_id">
              <option selected disabled>--Please select trip--</option>
              <?php $__currentLoopData = $trip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option <?php if($value->id==$data->trips->id): ?> selected <?php endif; ?> value="<?php echo e($value->id); ?>"><?php echo e($value->trip_title); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </select>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div> 
        </div>
      </div>
        

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Full Name</label>
        <div class="col-lg-8">
          <div class="bs-component">
            <input type="text" id="category" name="full_name" class="form-control"  value="<?php echo e($data->full_name); ?>"/>
          </div>
        </div>
      </div>   

        <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Country</label>
        <div class="col-lg-8">
          <div class="bs-component">
            <input type="text" name="country" class="form-control"  value="<?php echo e($data->country); ?>"/>
          </div>
        </div>
      </div>   
 
    <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-8">
          <div class="bs-component">
            <input type="text" name="email" class="form-control" value="<?php echo e($data->email); ?>" />
          </div>
        </div>
      </div>   

          <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Contact</label>
        <div class="col-lg-8">
          <div class="bs-component">
            <input type="text" name="contact" class="form-control" value="<?php echo e($data->contact); ?>" />
          </div>
        </div>
      </div>  


  <div class="form-group">
    <label for="inputStandard" class="col-lg-2 control-label">Message</label>
    <div class="col-lg-8">
     <div class="bs-component">
       <div class="bs-component">
         <textarea class=" form-control"  name="message" rows="9" autocomplete="off">
          <?php echo $data->message; ?></textarea>
       </div>
     </div>
   </div>
 </div>

</div>
</div>
</div>

<div class="col-md-3">
  <div class="admin-form">
    <div class="sid_bvijay mb10">
      <div class="hd_show_con">
        <div class="publice_edi">
          Status: <a href="avoid:javascript;" data-toggle="collapse" data-target="#publish_1">Active</a>
        </div>
      </div>
      <footer>
        <div id="publishing-action">
          <input type="submit" class="btn btn-primary btn-lg" value="Publish" />
        </div>
        <div class="clearfix"></div>
      </footer>
      <div class="clearfix"></div>
    </div>
    <div class="sid_bvijay mb10">
      <h4>Image </h4>
      <div class="hd_show_con">
        <div id="xedit-demo">
         <input type="file" name="photo" />
       </div>
        <small>(width: 1000px height: 1000px)</small>
         <?php if($data->image): ?>
        <img src="<?php echo e(url('uploads/reviews/'.$data->image)); ?>" width="150">
        <?php endif; ?>
     </div>
    </div>

 </div>

</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/trip-reviews/edit.blade.php ENDPATH**/ ?>