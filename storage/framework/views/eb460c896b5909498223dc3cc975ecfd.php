
<?php $__env->startSection('title','Post Type'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(route('type.posttype.index',Request::segment(2))); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <form class="form-horizontal" role="form" action="<?php echo e(url('type/posttype', $data->id)); ?>" method="post"
          enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="PUT"/>
 <div class="col-md-9">
  <!-- Input Fields -->
  <div class="panel">
    <div class="panel-heading">
      <span class="panel-title">Edit Post Type</span>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Post Type</label>
        <div class="col-lg-9">
          <div class="bs-component">
             <input type="text" id="" name="post_type" class="form-control" placeholder="" value="<?php echo e($data->post_type); ?>"/>
          </div>
        </div>
      </div>

  
      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Uri</label>
        <div class="col-lg-9">
          <div class="bs-component">
            <input type="text" id="" name="uri" class="form-control" placeholder="" value="<?php echo e($data->uri); ?>" readonly/>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Sub Title</label>
        <div class="col-lg-9">
          <div class="bs-component">
           <input type="text" value="<?php echo e($data->uid); ?>" name="uid" class="form-control" placeholder=""/>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Caption </label>
        <div class="col-lg-9">
          <div class="bs-component">
             <textarea class="form-control" id="" name="caption" rows="3" autocomplete="off"><?php echo e($data->caption); ?></textarea>

          </div>
        </div>
      </div>

    

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Content </label>
        <div class="col-lg-9">
          <div class="bs-component">
            <textArea name="contents" class="my-editor form-control" rows="30" autocomplete="off"> <?php echo e($data->content); ?> </textArea>
          </div>
        </div>
      </div>

      
        <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Meta Keyword </label>
        <div class="col-lg-9">
          <div class="bs-component">
            <input type="text" id="meta_keyword" name="meta_keyword" class="form-control" value="<?php echo e($data->meta_keyword); ?>"/>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label"> Meta Description </label>
        <div class="col-lg-9">
          <div class="bs-component">
            <input type="text" id="meta_description" name="meta_description" class="form-control" value="<?php echo e($data->meta_description); ?>"/>
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
                      <option
                          value="<?php echo e($key); ?>" <?php echo e(($template == $data->template)?'selected':''); ?>> <?php echo e(ucfirst($template)); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
              </select>
              <i class="arrow"></i>
          </label>
      </div>

        <div class="sid_ mb10">
        <label class="field text">Ordering
             <input type="number" id="ordering" name="ordering" class="form-control" value="<?php echo e($data->ordering); ?>"/>
        </label>
    </div>

    <div class="sid_ mb10">
        <div class="hd_show_con">
            <h4> Is Menu? </h4>

             <select name="is_menu" class="form-control input-sm">
              <option value="0" <?php echo e(($data->is_menu == '0')?'selected':''); ?>> No</option>
              <option value="1" <?php echo e(($data->is_menu == '1')?'selected':''); ?>> Yes</option>
          </select>

        </div>
    </div>
    <div class="sid_ mb10">
        <div class="hd_show_con">
            <h4> Is Footer Menu? </h4>

             <select name="is_footer_menu" class="form-control input-sm">
              <option value="0" <?php echo e(($data->is_footer_menu == '0')?'selected':''); ?>> No</option>
              <option value="1" <?php echo e(($data->is_footer_menu == '1')?'selected':''); ?>> Yes</option>
          </select>

        </div>
    </div>


    <div class="sid_ mb10">
      <h4> Thumbnail Image </h4>
      <div class="hd_show_con">
        <div id="xedit-demo">
          <?php if($data->thumbnail): ?>
            <span class="thumb_id<?php echo e($data->id); ?>">
              <a href="#<?php echo e($data->id); ?>" class="thumbdelete">X</a>
              <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/medium/' . $data->thumbnail )); ?>" width="150" class="responsive" alt="<?php echo e($data->post_type); ?>"/>
            </span>
            <hr>
          <?php endif; ?>
          <input type="file" name="thumbnail" />
        </div>
      </div> 
    </div>
    <div class="sid_ mb10">
      <h4> Banner Image </h4>
      <div class="hd_show_con">
        <div id="xedit-demo">
          <?php if($data->banner): ?>
            <span class="banner_id<?php echo e($data->id); ?>">
              <a href="#<?php echo e($data->id); ?>" class="imagedelete">X</a>
              <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/medium/' . $data->banner )); ?>" width="150" class="responsive" alt="<?php echo e($data->post_type); ?>"/>
            </span>
            <hr>
          <?php endif; ?>
          <input type="file" name="banner" />
        </div>
      </div> 
    </div>

</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
 $('.imagedelete').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'delete',
      url:"<?php echo e(url('delete_posttype_banner') . '/'); ?>" + id,
      data:{_token:csrf},    
      success:function(data){ 
        $('span.banner_id' + id ).remove();
      },
      error:function(data){  
      alert(data + 'Error!');     
     }
   });
  });
 $('.thumbdelete').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'delete',
      url:"<?php echo e(url('delete_posttype_thumb') . '/'); ?>" + id,
      data:{_token:csrf},    
      success:function(data){ 
        $('span.thumb_id' + id ).remove();
      },
      error:function(data){  
      alert(data + 'Error!');     
     }
   });
  });
  
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ukeshcom/demo1/resources/views/admin/post-type/edit.blade.php ENDPATH**/ ?>