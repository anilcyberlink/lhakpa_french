
<?php $__env->startSection('title','Features'); ?>
<?php $__env->startSection('breadcrumb'); ?>
     <a href="admin/features" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form class="form-horizontal" role="form" action="<?php echo e(url('admin/features', $data->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>   
<input type="hidden" name="_method" value="PUT" />          
<div class="col-md-12">
            <!-- Input Fields -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Edit Features</span>
              </div>
              <div class="panel-body"> 
             
                  <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Title</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" id="title" name="title" class="form-control" placeholder="" value="<?php echo e($data->title); ?>" />
                         <input type="hidden" id="uri" name="uri" class="form-control" placeholder="" value="<?php echo e($data->uri); ?>"  />
                      </div>
                    </div>
                  </div>

                   <!-- <div class="form-group">
                  <label for="inputSelect" class="col-lg-3 control-label"> Feature Type </label>
                  <div class="col-lg-6">
                    <div class="bs-component">

                      <select name="feature_type" class="form-control">
                        <option value="0"> Select Feature Type </option>
                        <?php if($features): ?>
                        <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($row->id); ?>" <?php echo e(($row->id == $data->feature_type )?'selected':''); ?>> <?php echo e($row->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        <?php endif; ?> 
                      </select>
                      </div>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Price</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" id="inputStandard" name="price" class="form-control" placeholder="" value="<?php echo e($data->price); ?>" />
                      </div>
                    </div>
                  </div>
               
                    --> 
                    <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Caption</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <textarea class="form-control" id="textArea2" name="caption" rows="3"><?php echo e($data->caption); ?></textarea>
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-lg-3 control-label" for="banner">Thumbnail</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="file" class="form-control" name="thumbnail"/>
                      </div>                       
                    </div>                    
                  </div>

                  <?php if($data->thumbnail != '' OR $data->thumbnail != null): ?>
                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="thumbnail"></label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                         <span class="">                       
                        <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/original/' . $data->thumbnail)); ?>" width="50%" />
                      </span>
                      </div>
                    </div>
                  </div>                    
                  <?php endif; ?>       
                  
              
                 
              
                 
                  <div class="form-group">
                    <label class="col-lg-3 control-label" for=""></label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit" />
                      </div>
                    </div>
                  </div> 
                
              </div>
            </div>          
          </div>

          
          </form>
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('libraries'); ?>
    <script type="text/javascript">

   $(document).ready(function(){
      $('#title').on('keyup',function(){
        var title;
        title = $('#title').val();
        title=title.replace(/[^a-zA-Z0-9 ]+/g,"");
        title=title.replace(/\s+/g, "-");
        $('#uri').val(title);
      });
    });

  </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ukeshcom/demo1/resources/views/admin/features/edit.blade.php ENDPATH**/ ?>