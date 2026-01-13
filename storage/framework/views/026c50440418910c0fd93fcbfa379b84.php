
<div class="col-md-9">
  <!-- Input Fields -->
  <div class="panel">
    <div class="panel-heading">
      <span class="panel-title">New Member</span>
    </div>
    <div class="panel-body">                    
      <div class="form-group"> 
       <label for="inputStandard" class="col-lg-2 control-label">Name</label>         
        <div class="col-lg-8">
          <div class="bs-component">
            <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?php echo e(old('name')); ?>" required="" />
            <input type="hidden" id="uri" name="uri" value="" />  
          </div>
        </div>
      </div>

      <div class="form-group"> 
       <label for="inputStandard" class="col-lg-2 control-label">Position</label>        
        <div class="col-lg-8">
          <div class="bs-component">
            <input type="text" name="position" class="form-control" placeholder="Position" value="<?php echo e(old('position')); ?>" />
          </div>
        </div>
      </div>  

      <div class="form-group"> 
       <label for="inputStandard" class="col-lg-2 control-label">Category</label>         
        <div class="col-lg-8">
          <div class="bs-component">
            <select name="category" class="form-control team-select">
              <option value="" disabled selected> Select Category </option>
              <?php if($category): ?>                  
              <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($row->id); ?>" required> <?php echo e($row->category); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
              <?php endif; ?> 
            </select>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
          </div>
        </div>
      </div>

      <div class="form-group"> 
       <label for="inputStandard" class="col-lg-2 control-label">Phone</label>        
        <div class="col-lg-8">
          <div class="bs-component">
            <input type="text" name="phone" class="form-control" placeholder="phone" value="<?php echo e(old('phone')); ?>" />
          </div>
        </div>
      </div>  
                         
      <div class="form-group"> 
       <label for="inputStandard" class="col-lg-2 control-label">Email</label>         
        <div class="col-lg-8">
          <div class="bs-component">
            <input type="text" id="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo e(old('email')); ?>" />
         
          </div>
        </div>
      </div>

       <div class="form-group"> 
     <label for="inputStandard" class="col-lg-2 control-label">Language</label>               
      <div class="col-lg-9">
        <div class="bs-component">
          <input class="form-control"   name="highlights" ><?php echo e(old('highlights')); ?></input>
        </div>
      </div>
    </div>

    
 
   
    <div class="form-group">
       <label for="inputStandard" class="col-lg-2 control-label">Content</label>       
      <div class="col-lg-9">
        <div class="bs-component">
          <textarea class="form-control textarea"   name="content" rows="12"><?php echo e(old('content')); ?></textarea>
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
      Status: <a href="avoid:javascript;" data-toggle="collapse" data-target="#publish_1">Active</a>              
  </div>
</div>

<div class="sid_bvijay mb10">
<label class="field text">
 Ordering: <input type="number"   name="ordering" class="form-control" placeholder="Ordering" value="<?php echo e($ordering); ?>" />   
</label>
</div>
<div class="sid_bvijay mb10">
<div class="hd_show_con">
 Make Expert
 <input type="hidden" name="show_in_home" value="0">
 <input type="checkbox" name="show_in_home" value="1">
</div>
</div>

<div class="sid_bvijay mb10">
<h4> Profile Picture </h4>
<div class="hd_show_con">
  <div id="xedit-demo">
   <input type="file" name="thumbnail" />
 </div>
</div>
</div>

<!-- <div class="sid_bvijay mb10">
<h4> Banner </h4>
 <h4> <input type="checkbox" name="published" value="1" />  Blur </h4> 
<div class="hd_show_con">
  <div id="xedit-demo">
  <input type="file" name="banner" /> 
 </div>
</div>
</div>  -->

</div>       
</div><?php /**PATH /home/lhakpa/public_html/resources/views/admin/team/create/create-general.blade.php ENDPATH**/ ?>