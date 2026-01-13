
<?php $__env->startSection('title','Banner'); ?>
<?php $__env->startSection('breadcrumb'); ?>
     <a href="admin/featuretype" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form class="form-horizontal" role="form" action="<?php echo e(url('admin/featuretype')); ?>" method="post" enctype="multipart/form-data">
           <?php echo e(csrf_field()); ?>         
<div class="col-md-12">
            <!-- Input Fields -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">New Feature Type</span>
              </div>
              <div class="panel-body"> 
             
                  <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Title</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" id="title" name="title" class="form-control" placeholder="" />
                         <input type="hidden" id="uri" name="uri" class="form-control" placeholder="" />
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Price</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" id="inputStandard" name="price" class="form-control" placeholder="" />
                      </div>
                    </div>
                  </div>
               
                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Brief</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <textarea class="form-control" id="textArea2" name="brief" rows="3"></textarea>
                      </div>
                    </div>
                  </div>              
                  
              
                 
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
  <?php $__env->startSection('scripts'); ?>
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/admin/feature-type/create.blade.php ENDPATH**/ ?>