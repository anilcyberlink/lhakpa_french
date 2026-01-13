
<?php $__env->startSection('title','Member Registration'); ?>

<?php $__env->startSection('content'); ?>
<div class="tray tray-center" style="">
<div class="panel">
     <div class="panel-heading">
      <ul class="nav panel-tabs-border panel-tabs panel-tabs-left">
        <li class="active">
          <a href="#tab1_1" data-toggle="tab">All Members</a>
        </li>
        <li>
          <a href="#tab1_2" data-toggle="tab">Pending Payment</a>
        </li>
        <li>
          <a href="#tab1_3" data-toggle="tab">Verified Payment</a>
        </li>
       
       
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content pn br-n">
           <div id="tab1_1" class="tab-pane active">
          <div class="_row">
            <div class="col-md-12">
             
              <div id="users" class="tab-pane active">
               <div class="table-responsive mhn20 mvn15">
          <table class="table admin-form theme-warning fs13"  id="datatable1">
            <thead>
              <tr class="bg-light">
               <th class="">SN</th>
                <th class="">Date</th>
				<th class="">Name</th>
				<th class=""> Email </th>
				<th class="">Status</th>
                <th class="">Details</th>
              </tr>
            </thead>
            <tbody>
             <?php if(count($data) > 0): ?>
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="id<?php echo e($row->id); ?>">
			<td class=""><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($row->updated_at->format('d M Y')); ?></td>
			<td class=""><?php echo e($row->name); ?></td>
			<td> <?php echo e($row->user_email); ?> </td>
			<td>
	    	<?php if($row->verified == 1): ?>
		    <span class="text-success">Verified</span>
		    <?php elseif($row->verified == 0): ?>
		    <span class="text-danger">Not Verified</span>
		    <?php endif; ?>
			</td>
            <td class="text-left">
              <!--<a href="<?php echo e(route('donation-details',$row->id)); ?>">Payment</a>-->
              <a href="<?php echo e(route('member-details',$row->id)); ?>">View Profile</a> |
              <?php if($row->verified == 0): ?>
              <span class="trash"> <a href="<?php echo e(route('deletemember',$row->id)); ?>" onclick="return confirm('Are you sure you want to delete this?')">Delete</a></span>
              <?php endif; ?>
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
        <div id="tab1_2" class="tab-pane">
          <div class="_row">
            <div class="col-md-12">
             
              <div id="users" class="tab-pane active">
               <div class="table-responsive mhn20 mvn15">
          <table class="table admin-form theme-warning fs13"  id="datatable2">
            <thead>
              <tr class="bg-light">
               <th scope="col">SN</th>
                <th>Invoice No.</th>
    			<th class="">Overview</th>
                <th class="">Status</th>
                <th>Date</th>
                <th class="">Invoice</th>
              </tr>
            </thead>
            <tbody>
             	<?php if(count($donation) > 0): ?>
    			<?php $__currentLoopData = $donation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    			<tr class="id<?php echo e($row->id); ?>">
    				<td class=""><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($row->invoice_no); ?></td>
    				<td class="">
    			    <i class="fa fa-user"></i>  <?php echo e($row->full_name); ?> <br> 
                     <i class="fa fa-money"></i> <?php echo e(($row->amount)); ?> <br> 
                      <i class="fa fa-phone"></i> <?php echo e($row->mobile_no); ?> <br>
                    </td>
                    <td class="text-left">
                    <form action="<?php echo e(route('payment-verified',$row->id)); ?>" method="POST">
    					<?php echo csrf_field(); ?>	
    				<?php if(($row->verified)==0): ?>
                    <button class="btn btn-danger btn btn-sm" name="0" type="submit"><i class="fa fa-times"></i></button>
               		 <?php else: ?>
                    <button class="btn btn-success btn btn-sm" name="1" type="submit"><i class="fa fa-check"></i></button>
             	   <?php endif; ?>
             	   </form>
             	   <small>Click to Verify</small>
                   </td>
                     <td><?php echo e($row->updated_at->format('d M Y')); ?></td>
                	<td>
                    <a href="<?php echo e(asset('uploads/members/'.$row->file)); ?>" target="_blank">
                      <span>Click here to view</span>
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
        
        
        <div id="tab1_3" class="tab-pane">
          <div class="row">
            <div class="col-md-12">
              
              <div id="users" class="tab-pane active">
               <div class="table-responsive mhn20 mvn15">
          <table class="table admin-form theme-warning fs13"  id="datatable3">
            <thead>
              <tr class="bg-light">
                  <th scope="col">SN</th>
                <th>Invoice No.</th>
    			<th class="">Overview</th>
                <th class="">Status</th>
                <th>Date</th>
                <th class="">Invoice</th>
              </tr>
            </thead>
            <tbody>
                  <?php if(count($verified_donation) > 0): ?>
    			<?php $__currentLoopData = $verified_donation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    			<tr class="id<?php echo e($row->id); ?>">
    			  <td class=""><?php echo e($loop->iteration); ?></td>
    			<td><?php echo e($row->invoice_no); ?></td>
    			<td class="">
    		    <i class="fa fa-user"></i>  <?php echo e($row->full_name); ?> <br> 
                 <i class="fa fa-money"></i> <?php echo e(($row->amount)); ?> <br> 
                  <i class="fa fa-phone"></i> <?php echo e($row->mobile_no); ?> <br>
                </td>
                <td>	
                <?php if(($row->verified)==0): ?>
                <button class="btn btn-danger btn btn-sm" name="0" type="submit"><i class="fa fa-times"></i></button>
           		 <?php else: ?>
                <button class="btn btn-success btn btn-sm" name="1" type="submit"><i class="fa fa-check"></i></button>
         	   <?php endif; ?>
         	   </td>
                <td><?php echo e($row->created_at->format('d M Y')); ?></td>
    			<td>
                <a href="<?php echo e(asset('uploads/members/'.$row->file)); ?>" target="_blank">
                  <span>Click here to view</span>
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
    </div>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- Datatables -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/media/js/jquery.dataTables.js')); ?>"></script>
<!-- Datatables Tabletools addon -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>
<!-- Datatables ColReorder addon -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')); ?>"></script>
<!-- Datatables Bootstrap Modifications  -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/media/js/dataTables.bootstrap.js')); ?>"></script>
<script type="text/javascript">

$('#datatable1').dataTable({
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
      "sSwfPath": "<?php echo e(asset(env('PUBLIC_PATH'))); ?>vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
    }
  });
  
  $('#datatable2').dataTable({
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
      "sSwfPath": "<?php echo e(asset(env('PUBLIC_PATH'))); ?>vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
    }
  });
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
      "sSwfPath": "<?php echo e(asset(env('PUBLIC_PATH'))); ?>vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
    }
  });

  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/admin/members.blade.php ENDPATH**/ ?>