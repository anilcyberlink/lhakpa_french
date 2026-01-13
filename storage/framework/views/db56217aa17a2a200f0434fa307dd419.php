
<?php $__env->startSection('title','Team Member'); ?>
<?php $__env->startSection('breadcrumb'); ?>
     <a href="<?php echo e(route('team.index')); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form class="form-horizontal" role="form" action="<?php echo e(route('team.create')); ?>" method="post" enctype="multipart/form-data">
           <?php echo e(csrf_field()); ?>         
<div class="col-md-12">
            <!-- Input Fields -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Create New Member</span>
              </div>
              <div class="panel-body"> 
             
                  <div class="form-group">
                    <label for="inputStandard" class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" id="inputStandard" name="title" class="form-control" placeholder="" />
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputStandard" class="col-lg-2 control-label">Designation</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" id="inputStandard" name="designation" class="form-control" placeholder="" />
                      </div>
                    </div>
                  </div>                      
               
          
                  
               <div class="form-group">
                    <label class="col-lg-2 control-label" for="banner">Picture</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="file" class="form-control" name="picture"/>
                      </div>
                      ( Width: 1500px, Height:500px all time fix size )
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-lg-2 control-label" for="link">Address</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" class="form-control" name="address" placeholder="Address" /> <br />                       
                      </div>
                    </div>
                  </div> 
                   <div class="form-group">
                   <label class="col-lg-2 control-label" for="link">Joined Date </label>
                   <div class="col-lg-6">
                     <div class="bs-component">
                      <input type="date" class="form-control" name="joined_date" /> <br />                       
                         <i><small> Example: https://www.google.com </small></i>
                     </div>
                      
                   </div>
                 </div> 
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="videolink">Validity</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="date" class="form-control" name="validity" placeholder="" /> <br />                       
                      </div>
                    </div>
                  </div>       
                        <div class="form-group">
                    <label class="col-lg-2 control-label" for="videolink">Blood Group</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" class="form-control" name="blood_group" placeholder="" /> <br />                       
                      </div>
                    </div>
                  </div>  
                 
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for=""></label>
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/admin/team/create.blade.php ENDPATH**/ ?>