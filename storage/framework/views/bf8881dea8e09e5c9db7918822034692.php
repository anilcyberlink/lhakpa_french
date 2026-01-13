
<?php $__env->startSection('title','Post Type'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('type.posttype.index',Request::segment(2))); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" action="<?php echo e(route('type.posttype.store',Request::segment(2))); ?>" method="post" enctype="multipart/form-data">
 <?php echo e(csrf_field()); ?>

 <div class="col-md-9">
  <!-- Input Fields -->
  <div class="panel">
    <div class="panel-heading">
      <span class="panel-title">New Post Type</span>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Post Type</label>
        <div class="col-lg-9">
          <div class="bs-component">
            <input type="text" id="post_type" name="post_type" class="form-control" placeholder="" />
          </div>
        </div>
      </div>

  
      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Uri</label>
        <div class="col-lg-9">
          <div class="bs-component">
            <input type="text" id="uri" name="uri" class="form-control" placeholder="" />
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Sub Title</label>
        <div class="col-lg-9">
          <div class="bs-component">
            <input type="text" id="uid" name="uid" class="form-control" placeholder="" />
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Caption </label>
        <div class="col-lg-9">
          <div class="bs-component">
            <textarea class="form-control" id="" name="caption" rows="3" autocomplete="off"></textarea>

          </div>
        </div>
      </div>

    

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Content </label>
        <div class="col-lg-9">
          <div class="bs-component">
            <textArea name="contents" class="my-editor form-control" rows="30" autocomplete="off"></textArea>
          </div>
        </div>
      </div>

      
        <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Meta Keyword </label>
        <div class="col-lg-9">
          <div class="bs-component">
            <input type="text" id="meta_keyword" name="meta_keyword" class="form-control" placeholder="" />
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Meta Description </label>
        <div class="col-lg-9">
          <div class="bs-component">
            <input type="text" id="meta_description" name="meta_description" class="form-control" placeholder="" />
          </div>
        </div>
      </div>

       



</div>
</div>
</div>

<div class="col-md-3">
    <div class="admin-form">
        <div class="sid_ mb10">
            <div class="hd_show_con">

            </div>
            <footer>
                <div id="publishing-action">
                    <input type="submit" class="btn btn-primary btn-sm" value="Submit"/>
                </div>
                <div class="clearfix"></div>
            </footer>
            <div class="clearfix"></div>
        </div>
        <div class="sid_ mb10">
          <label class="field select">
              <select id="template" name="template">
                  <?php if($templates): ?>
                <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>"> <?php echo e(ucfirst($template)); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </select>
              <i class="arrow"></i>
          </label>
      </div>

        <div class="sid_ mb10">
        <label class="field text">Ordering
            <input type="number" id="ordering" name="ordering" class="form-control" value="<?php echo e($ordering); ?>" />
        </label>
    </div>

    <div class="sid_ mb10">
        <div class="hd_show_con">
              <h4> Is Menu? </h4>
             <select name="is_menu" class="form-control input-sm">
          <option value="0"> No </option>
          <option value="1"> Yes </option>
        </select>

        </div>
    </div>


       <div class="sid_ mb10">
          <h4> Featured Image </h4>
          <div class="hd_show_con">
              <div id="xedit-demo">
                  <input type="file" name="banner" />
              </div>
          </div>
      </div>

</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    var post_type;
    $('#post_type').on('keyup', function(){
      post_type = $('#post_type').val();
      post_type=post_type.replace(/[^a-zA-Z0-9 ]+/g,"");
      post_type=post_type.replace(/\s+/g, "-");
      $('#uri').val(post_type);
    });
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/admin/post-type/create.blade.php ENDPATH**/ ?>