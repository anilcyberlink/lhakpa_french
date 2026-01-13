
<?php $__env->startSection('breadcrumb'); ?>
<?php if(Request::segment(3)): ?>
<a href="<?php echo e(url('admin/'.posttype_bypostid(Request::segment(3)))); ?>" class="btn btn-primary btn-sm">Go Back</a>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="alert" id="message" style="display: none"></div>
<form class="form-horizontal" id="upload_image1" role="form" action="<?php echo e(route('multiplephoto.store')); ?>" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>               
	<div class="col-md-8">
		<!-- Input Fields -->
		<div class="panel">
			<div class="panel-heading">
				<span class="panel-title">Add Image</span>
			</div>
			<div class="panel-body">  
				<input type="hidden" name="post_id" value="<?php echo e($post_id); ?>">
				<div class="form-group">
                  <label for="inputStandard" class="col-lg-2 control-label">Title</label>
                  <div class="col-lg-8">
                    <div class="bs-component">
                      <input type="text" id="title" name="title" class="form-control" placeholder="" />
                    </div>
                  </div>
              </div>
				<div class="form-group">
					<label for="inputStandard" class="col-lg-2 control-label"> Image </label>
					<div class="col-lg-8">
						<div class="bs-component">
							<input type="file" name="file_image" id="file_image" class="form-control" /> 	
						</div>
						( Width: 1000px, Height: 500px) <br/>
						Please upload same size all time. Image size must be less than 2048 KB.
					</div>
				</div>  

				<div class="form-group">
					<label for="inputStandard" class="col-lg-2 control-label">  </label>
					<div class="col-lg-8">
						<div class="bs-component">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary">      
						</div>
					</div>
				</div>  
			</div>
		</div> 

		<hr>
        <?php $i =0; ?>
		<?php if($data->count() > 0): ?>               
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-lg-4 id<?php echo e($row->id); ?>">
			<a href="#<?php echo e($row->id); ?>" class="delete_image"><span class="trash" style="color:red;">Delete</span></a> |
			<a href="<?php echo e(url( 'adminimg/'.Request::segment(2) .'/'. $row->post_id.'/'. $row->id. '/edit')); ?>" class="">Edit</a>
			<img src="<?php echo e(asset('/uploads/medium/' . $row->file_name)); ?>" width="100%" height="100%" />
			<p><?php echo e($row->title); ?></p>
		</div>
		<?php $i++; 
		
		if($i%5 == 0){
		    echo '<div class="clearfix"></div>';
		}
		?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?> 
	</div>

	<div class="col-md-4">
		<div class="admin-form">
			<div class="sid_bvijay mb10">  
			</div>
		</div>
	</div>



</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('libraries'); ?>
<script type="text/javascript">
	$('document').ready(function(){

		$('#upload_image').on('submit',function(event){
			event.preventDefault();
			$.ajax({
				url: "<?php echo e(route('multiplephoto.store')); ?>",
				method: "POST",
				data:new FormData(this),
				dataType:'JSON',
				contentType:false,
				cache:false,
				processData:false,
				success:function(data){
					$('#message').css('display','block');
					$('#message').html(data.message);
					$('#message').addClass(data.class_name);
					location.reload();
				},
				error:function(data){					
					alert('Error!!');
				}
			});
		});

// Delete Product Image
  $('.delete_image').on('click',function(e){
    e.preventDefault();
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'delete',
      url:"<?php echo e(url('adminimg/multiplephoto') . '/'); ?>" + id,
      data:{_token:csrf},    
      success:function(data){   
       $('#message').css('display','block');
       $('#message').html(data.message);
       $('#message').addClass(data.class_name);
       $('div .id'+id ).remove();
      },
      error:function(data){       
       alert('Error occurred!');
     }
   });
  });


});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ukeshcom/demo1/resources/views/admin/multiple-photo/create.blade.php ENDPATH**/ ?>