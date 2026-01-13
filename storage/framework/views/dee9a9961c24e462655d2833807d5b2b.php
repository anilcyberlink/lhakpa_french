
<?php $__env->startSection('breadcrumb'); ?>
     <a href="<?php echo e(Request::segment(1)); ?>/imagegallery/create" class="btn btn-primary btn-sm">Create</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tray tray-center" style="height: 647px;">
<div class="panel">         
	<div class="panel-body ph20">
		<div class="tab-content">
			<div id="users" class="tab-pane active">
				<div class="table-responsive mhn20 mvn15">
			  <table class="table admin-form table-striped dataTable" id="datatable3">
						<thead>
							<tr class="bg-light">
								<th class="">SN</th>
								<th class="">Picture</th>  
								<th class="">Post Type</th>                            
								<th class="">Created at</th>                            
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php if(count($data) > 0): ?>	            
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr class="id<?php echo e($row->id); ?>">
								<td class=""><?php echo e($loop->iteration); ?></td>
								<td class="">
								<?php if(file_exists(public_path('uploads/galleries/' . $row->picture))): ?>
								 <img src="<?php echo e(url(env('PUBLIC_PATH').'uploads/galleries/'. $row->picture )); ?>" width="150" height="100" /> 
								 <?php elseif(!file_exists(public_path('uploads/galleries/' . $row->picture))): ?>
								 [No Image]
								 <?php endif; ?>
								</td>
								<td class=""><?php echo e(posttypeById($row->post_type)->post_type); ?></td>
								<td class=""><?php echo e(ucfirst($row->created_at)); ?></td>
								<td class="text-center">  
									<a href="<?php echo e(url('admin/imagegallery/'.$row->id.'/edit')); ?>">Edit</a> |
									<a href="#<?php echo e($row->id); ?>" class="btn-delete">
										Delete
									</a>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>  
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
<script src="<?php echo e(asset('/vendor/plugins/datatables/media/js/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>
<script src="<?php echo e(asset('/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')); ?>"></script> 
<script type="text/javascript">
jQuery(document).ready(function() { 
  $('.btn-delete').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'DELETE',
      url:"<?php echo e(url('admin/imagegallery') . '/'); ?>" + id,
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
/************/
  $('#datatable3').dataTable({
    "aoColumnDefs": [{
      'bSortable': true,
      'aTargets': [-1]

    }],
    "oLanguage": {
      "oPaginate": {
        "sPrevious": "Previous",
        "sNext": "Next"
      }
    },
    "iDisplayLength": 30,
    "aLengthMenu": [
    [5, 10, 25, 50, -1],
    [5, 10, 25, 50, "All"]
    ],
    "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
    "oTableTools": {
      "sSwfPath": "<?php echo e(asset('vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf')); ?>"
    }
  });

  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ukeshcom/demo1/resources/views/admin/image-gallery/index.blade.php ENDPATH**/ ?>