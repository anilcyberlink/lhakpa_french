
<?php $__env->startSection('title','Post Category'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('postcategory.index')); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form class="form-horizontal" role="form" action="<?php echo e(route('postcategory.update', $data->id)); ?>" method="post" enctype="multipart/form-data">
 <?php echo e(csrf_field()); ?>            
 <input type="hidden" name="_method" value="PUT" />       
 <div class="col-md-8">
  <!-- Input Fields -->
  <div class="panel">
    <div class="panel-heading">
      <span class="panel-title">Create Post Category</span>
    </div>
    <div class="panel-body">

     <div class="form-group">
      <label for="inputStandard" class="col-lg-3 control-label">Post Type</label>
      <div class="col-lg-8">                  
       <div class="bs-component">
        <select class="form-control" name="post_type">
          <?php $__currentLoopData = $posttype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($row->id); ?>" <?php echo e(($row->id==$data->post_type)?'selected':''); ?>><?php echo e($row->post_type); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
      </div>
    </div>  

    <div class="form-group">
      <label for="inputStandard" class="col-lg-3 control-label">Category</label>
      <div class="col-lg-8">
        <div class="bs-component">
          <input type="text" id="" name="category" class="form-control" placeholder="" value="<?php echo e($data->category); ?>" />
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="inputStandard" class="col-lg-3 control-label">Uri</label>
      <div class="col-lg-8">
        <div class="bs-component">
          <input type="text" id="" name="uri" class="form-control" value="<?php echo e($data->uri); ?>"  placeholder="" readonly/>
        </div>
      </div>
    </div>     

    <div class="form-group">
     <label for="inputStandard" class="col-lg-3 control-label">Caption</label>
     <div class="col-lg-8">
      <div class="bs-component">
        <input type="text" id="" name="category_caption" class="form-control" value="<?php echo e($data->category_caption); ?>" placeholder="" />
      </div>
    </div>
  </div> 

  <div class="form-group">
   <label for="inputStandard" class="col-lg-3 control-label">Content</label>
   <div class="col-lg-8">
    <div class="bs-component">                        
      <div class="bs-component">                       
        <div class="bs-component">
          <textarea class="form-control my-editor" id="" name="category_content" rows="9" autocomplete="off"><?php echo e($data->category_content); ?></textarea>
        </div>
      </div>
    </div>
  </div>
</div>                    

</div>
</div>          
</div>

<div class="col-md-4">
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
      <label class="field text">
        <input type="number" id="inputStandard" name="ordering" class="form-control" value="<?php echo e($data->ordering); ?>" placeholder="Order" />   
      </label>
    </div>

    <div class="sid_bvijay mb10">
      <h4> Picture </h4>
      <div class="hd_show_con">
        <div id="xedit-demo">
          <?php if($data->thumbnail): ?>
          <span class="id<?php echo e($data->id); ?>">
            <a href="#<?php echo e($data->id); ?>" class="imagedelete">X</a>
            <img src="<?php echo e(asset('uploads/original/' . $data->thumbnail)); ?>" width="250" />
          </span>
          <hr> 
          <?php endif; ?> 
          <input type="file" name="thumbnail" />
        </div>
      </div>
    </div>

  </div>         

</div>
</form>
<?php $__env->stopSection(); ?>

  <?php $__env->startSection('libraries'); ?>
  <script type="text/javascript">
   // Delete Thumb
    $('.imagedelete').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'DELETE',
      url:"<?php echo e(url('delete_category_thumb') . '/'); ?>" + id,
      data:{_token:csrf},    
      success:function(data){ 
        $('span.id' + id ).remove();
      },
      error:function(data){  
      alert(data + 'Error!');     
     }
   });
  });
  </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/admin/post-category/edit.blade.php ENDPATH**/ ?>