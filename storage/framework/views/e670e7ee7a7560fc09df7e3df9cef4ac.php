
<?php $__env->startSection('breadcrumb'); ?>
     <a href="<?php echo e(route('adminmenu.create')); ?>" class="btn btn-primary btn-sm">Create</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h2>Admin Menu</h2>
<div class="tray tray-center" style="height: 647px;">
<div class="panel">         
	<div class="panel-body ph20">
		<div class="tab-content">
			<div id="users" class="tab-pane active">
				<div class="table-responsive mhn20 mvn15">
					<table class="table admin-form theme-warning fs13">
						<thead>
							<tr class="bg-light">
								<th class="">SN</th>
								<th class="">Title</th>                            
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
           
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr class="id<?php echo e($row->id); ?>">
								<td class=""><?php echo e($loop->iteration); ?></td>
								<td class=""><?php echo e(ucfirst($row->title)); ?></td>
								<td class="text-center"> 								
									<a href="<?php echo e(route('adminmenu.edit',$row->id)); ?>">Edit</a> |
									<a href="#<?php echo e($row->id); ?>" class="btn-delete">Delete</a>
								</td> 
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
jQuery(document).ready(function() {
  $('.btn-delete').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
	var url = '<?php echo e(route("adminmenu.destroy",':id')); ?>';
	url = url.replace(':id',id);
    $.ajax({
      type:'DELETE',
      url:url,
      data:{_token:csrf},    
      success:function(data){ 
        $('tbody tr.id' + id ).remove();
      },
      error:function(data){       
       alert('Error occurred!');
     }
   });
  });
});
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/admin/admin-menu/index.blade.php ENDPATH**/ ?>