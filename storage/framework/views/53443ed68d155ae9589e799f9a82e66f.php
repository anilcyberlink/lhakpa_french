
<?php $__env->startSection('breadcrumb'); ?>
     <a href="<?php echo e(route('adminmenu.index')); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form class="form-horizontal" role="form" action="<?php echo e(route('adminmenu.update', $data->id)); ?>" method="post" enctype="multipart/form-data">
	 <?php echo e(csrf_field()); ?>     
	<input type="hidden" name="_method" value="PUT" />          
<div class="col-md-8">
            <!-- Input Fields -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Edit Role</span>
              </div>
              <div class="panel-body"> 
                           
                  <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Role</label>
                    <div class="col-lg-8">
                      <div class="bs-component">
                        <input type="text" id="" name="title" class="form-control" placeholder="" value="<?php echo e($data->title); ?>" />
                      </div>
                    </div>
                  </div>         
              
                   <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea3">  </label>
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/admin/admin-menu/edit.blade.php ENDPATH**/ ?>