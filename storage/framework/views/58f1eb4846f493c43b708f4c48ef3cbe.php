
<?php $__env->startSection('title', Request::segment(2)); ?>

<?php $__env->startSection('breadcrumb'); ?>
<button type="button" class="btn btn-default btn-sm backlink"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back </button>
<a href="<?php echo e(url('admin/activity')); ?>" class="btn btn-default btn-sm backlink"><i class="fa fa-list" aria-hidden="true"></i> Show List </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" action="<?php echo e(url('admin/activity/'.$data->id)); ?>" method="post" enctype="multipart/form-data">
  <?php echo e(csrf_field()); ?>    
  <input type="hidden" name="_method" value="PUT" />  
  <div class="col-md-9">
    <!-- Input Fields -->
    <div class="panel">
      <div class="panel-heading">
        <span class="panel-title">New Activity </span>
      </div>
      <div class="panel-body">                    
        <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label">Title</label>
          <div class="col-lg-9">
            <div class="bs-component">
              <input type="text" id="title" name="title" class="form-control" value="<?php echo e($data->title); ?>" placeholder="Title" />
              <input type="hidden" id="uri" name="uri" value="<?php echo e($data->uri); ?>" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label">Sub Title</label>
          <div class="col-lg-9">
            <div class="bs-component">
              <input type="text" id="" name="sub_title" class="form-control" value="<?php echo e($data->sub_title); ?>" placeholder="Sub Title" />
            </div>
          </div>
        </div>   

        <div class="form-group">
          <label class="col-lg-2 control-label" for="textArea3"> Brief </label>
          <div class="col-lg-9">
            <div class="bs-component">
              <textarea class="form-control" id="" name="excerpt" rows="3"><?php echo e($data->excerpt); ?></textarea>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="external_link" class="col-lg-2 control-label">External Link</label>
          <div class="col-lg-9">
            <div class="bs-component">
              <input type="url" id="external_link" name="external_link" class="form-control" value="<?php echo e($data->external_link); ?>" placeholder="External Link" />
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="panel">
      <div class="panel-heading">
        <span class="panel-title">Content</span>
      </div>
      <div class="panel-body">
        <div class="form-group">

          <div class="col-lg-12">
            <div class="bs-component">
              <textarea class="form-control my-editor" id="" name="content" rows="3"><?php echo e($data->content); ?></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="panel">-->
    <!--    <div class="panel-heading">-->
    <!--        <span class="panel-title">Related Activity</span>-->
    <!--    </div>-->
    <!--    <div class="panel-body">-->
    <!--        <div class="form-group">-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="bs-component">-->

    <!--                    <select class="form-control related-activity" name="related_activity[]" multiple="multiple">-->
    <!--                        <?php if($relatedActivities->count() > 0): ?>-->
    <!--                            <?php $__currentLoopData = $relatedActivities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
    <!--                                <?php $__currentLoopData = $data->relatedActivities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
    <!--                                    <?php if($row->id == $_row->pivot->trip_id): ?>-->
    <!--                                        <option value="<?php echo e($row->id); ?>" selected> <?php echo e($row->title); ?>-->
    <!--                                        </option>-->
    <!--                                        <?php continue; ?>-->
    <!--                                    <?php endif; ?>-->
    <!--                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
    <!--                                <option value="<?php echo e($row->id); ?>"><?php echo e($row->title); ?></option>-->
    <!--                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
    <!--                        <?php endif; ?>-->
    <!--                    </select>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="panel">
      <div class="panel-heading">
          <span class="panel-title"> Video ID </span>
      </div>
      <div class="panel-body">
          <div class="form-group">
              <div class="col-lg-12">
                  <div class="bs-component">
                      <input type="text" class="form-control" name="category_video" value="<?php echo e($data->category_video); ?>"
                        placeholder="Unique Video ID of youtube video"/>
                        <span>https://youtu.be/<b>iwhpS4ow7Zc</b></span>                        
                  </div>
              </div>             
          </div>
      </div>
    </div>
    
    <div class="panel">
     <div class="panel-heading">
      <span class="panel-title">Map and Meta data </span>
    </div>
    <div class="panel-body">

      <div class="form-group">
        <label for="inputStandard" class="col-lg-2 control-label">Meta Key</label>
        <div class="col-lg-9">
          <div class="bs-component">
            <input type="text" id="" name="meta_keyword" class="form-control" value="<?php echo e($data->meta_keyword); ?>" placeholder="Meta Key" />
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 control-label" for="textArea3"> Meta Description </label>
        <div class="col-lg-9">
          <div class="bs-component">
            <textarea class="form-control" id="textArea3" name="meta_description" rows="3"><?php echo e($data->meta_description); ?></textarea>
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
      <!--<a href="<?php echo e(route('activity.banner.index',$data->id)); ?>"class="btn btn-default btn-sm">Manage Banners</a>-->
        <div id="publishing-action">
          <input type="submit" class="btn btn-primary btn-sm" value="Publish" />
        </div>
        <div class="clearfix"></div>
      </footer>
      <div class="clearfix"></div>
    </div> 

     <div class="sid_bvijay mb10">
      <label class="field select">
        <select id="template" name="template">
         <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e($key); ?>" <?php echo e(($template == $data->template)?'selected':''); ?> ><?php echo e(ucfirst($template)); ?> </option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </select>
       <i class="arrow"></i>
     </label>
   </div>  
   <div class="sid_bvijay mb10">
          <h4>Select Parent</h4>
      <label class="field select">
        <select name="activity_parent">
          <option value="expedition" <?php echo e(($data->activity_parent == 'expedition')?'selected':''); ?>>Expedition</option>
          <option value="trekking" <?php echo e(($data->activity_parent == 'trekking')?'selected':''); ?>>Destination</option>
          <option value="activity" <?php echo e(($data->activity_parent == 'activity')?'selected':''); ?> >Activity</option>
          <option value="travel" <?php echo e(($data->activity_parent == 'travel')?'selected':''); ?> >Travels</option>
        </select>
        <i class="arrow"></i>
      </label>
    </div>


<div class="sid_bvijay mb10">
  <label class="field text">
    <input type="number" id="" name="ordering" class="form-control" placeholder="Ordering" value="<?php echo e($data->ordering); ?>" />   
  </label>
</div>

<!--<div class="sid_bvijay mb10">-->
<!--  <div class="hd_show_con">-->
<!--   Show in Home-->
<!--    <input type="checkbox" name="status" value="<?php echo e($data->status); ?>"  <?php echo e(($data->status == 1)?'checked':''); ?>/>-->
<!--  </div>-->
<!--</div>-->

<div class="sid_bvijay mb10">
  <h4> Thumbnail </h4>
  <div class="hd_show_con">
    <?php if($data->thumbnail): ?>
    <span class="thumbid<?php echo e($data->id); ?>">
      <a href="#<?php echo e($data->id); ?>" class="icondelete">X</a>
      <img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/icon/'.$data->thumbnail)); ?>" width="100%" />
      <hr/>
    </span>        
    <?php endif; ?>
    <div id="xedit-demo">
     <input type="file" name="thumbnail" />
      ( Width: 1500px, Height:971px )
   </div>
 </div>
</div>

<div class="sid_bvijay mb10">
<h4> Banner </h4>
<div class="hd_show_con">
 <?php if($data->banner): ?>
<span class="bannerid<?php echo e($data->id); ?>">
<a href="#<?php echo e($data->id); ?>" class="imagedelete">X</a>
<img src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/banners/'.$data->banner)); ?>" width="100%" />
 <hr/>
</span>        
 <?php endif; ?>
<div id="xedit-demo">
<input type="file" name="banner[]" />
</div>
</div>
</div>

</div>         

</div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">

  $('.imagedelete').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'delete',
      url:"<?php echo e(url('delete_activity_thumb') . '/'); ?>" + id,
      data:{_token:csrf},    
      success:function(data){ 
        $('span.bannerid' + id ).remove();
      },
      error:function(data){  
        alert(data + 'Error!');     
      }
    });
  });
       /**/
       $('.icondelete').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'delete',
      url:"<?php echo e(url('delete_activity_icon') . '/'); ?>" + id,
      data:{_token:csrf},
      success:function(data){
        $('span.thumbid' + id ).remove();
      },
      error:function(data){
        alert(data + 'Error!');
      }
    });
  });

  $(document).ready(function(){
    $('#trip_title').on('keyup',function(){
      var trip_title;
      trip_title = $('#trip_title').val();
      trip_title=trip_title.replace(/[^a-zA-Z0-9 ]+/g,"");
      trip_title=trip_title.replace(/\s+/g, "-");
      $('#uri').val(trip_title);
    });
  });

// Go back link
$('.backlink').click(function(){
  var url = '<?=url()->previous(); ?>';
  window.location=url;
});
$('.related-activity').select2();
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('additional-css'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/activities/edit.blade.php ENDPATH**/ ?>