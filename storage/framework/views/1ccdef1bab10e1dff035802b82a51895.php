
<?php $__env->startSection('title','Member Registration'); ?>
<?php $__env->startSection('breadcrumb'); ?>
     <a href="<?php echo e(url('admin/members-registration')); ?>" class="btn btn-primary btn-sm">Go Back</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="form-horizontal" enctype="multipart/form-data">
<div class="col-md-6">
    <!-- Input Fields -->
    <div class="panel">
      <div class="panel-heading">
        <span class="panel-title">निवेदक को विवरण</span>
      </div>

      <div class="panel-body">                 
        <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label">निवेदक को नाम ,थर</label>
          <div class="col-lg-9">
            <div class="bs-component">
                 <input type="text" value=" <?php echo e($data->name); ?>" class="form-control" readonly />
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label">जन्म मिति</label>
           <div class="col-lg-9">
            <div class="bs-component">
            <input type="text" value=" <?php echo e($data->birth_date); ?>" class="form-control" readonly />
            </div>
          </div>
        </div>
       
        <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label">इमेल </label>
           <div class="col-lg-9">
            <div class="bs-component">
            <input type="text" value=" <?php echo e($data->user_email); ?>" class="form-control" readonly />
            </div>
          </div>
        </div>
       
        
         <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label">ठेगाना</label>
          <div class="col-lg-9">
            <div class="bs-component">
             <ul>
                  <li>प्रदेश : <?php echo e(getprovince($data->province_id)); ?></li>
                   <li>जिल्ला : <?php echo e(getdistrict($data->district_id)); ?></li>
                   <li>म.न.पा./उ.म.न.पा./न.पा/गा.पा: <?php echo e(getmunicipal($data->municipal_id)); ?></li>
                   <li>वार्ड न : <?php echo e(getprovince($data->province_id)); ?></li>
                       
             </ul>       
            </div>
          </div>
        </div>
        
        
      </div>
    </div> 
   </div>
    <div class="col-md-6">
    
  <div class="panel">
      <div class="panel-heading">
        <span class="panel-title">अबस्थित देशको को विवरण</span>
      </div>

      <div class="panel-body">                 
        <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label"> देशको नाम </label>
          <div class="col-lg-9">
            <div class="bs-component">
                 <input type="text" value=" <?php echo e($data->full_name); ?>" class="form-control" readonly />
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label"> ठेगाना</label>
           <div class="col-lg-9">
            <div class="bs-component">
            <input type="text" value=" <?php echo e($data->current_country); ?>" class="form-control" readonly />
            </div>
          </div>
        </div>
          <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label"> टेलिफोन न	</label>
           <div class="col-lg-9">
            <div class="bs-component">
            <input type="text" value=" <?php echo e($data->phone); ?>" class="form-control" readonly />
            </div>
          </div>
        </div>
          <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label"> इमेल</label>
           <div class="col-lg-9">
            <div class="bs-component">
            <input type="text" value=" <?php echo e($data->email); ?>" class="form-control" readonly />
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label"> अबस्थित देश प्रबेस मिति  :</label>
           <div class="col-lg-9">
            <div class="bs-component">
            <input type="text" value=" <?php echo e($data->entrance_date); ?>" class="form-control" readonly />
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputStandard" class="col-lg-2 control-label"> नेपाल मा सम्पर्क व्यक्तिको को विवरण</label>
           <div class="col-lg-9">
            <div class="bs-component">
                <ul>
                    <li>  नाम, थर : <?php echo e($data->full_name); ?></li>
                    <li> ठेगाना : <?php echo e($data->address2); ?></li>
                    <li>नाता  : <?php echo e($data->relation); ?></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>

  <?php if($payment->count()>0): ?>
         <section id="" class="table-layout animated fadeIn">
          <!-- begin: .tray-center -->
          <div class=""> 
            <div class="panel">
              <div class="panel-body pn">
                <div class="table-responsive">
                      <div class="panel-heading">
                        <span class="panel-title">भुक्तानी विवरण</span>
                     </div>
        		     <table class="table admin-form table-striped dataTable" >
        					<thead>
        						<tr class="bg-light">
        						<th class="">SN</th>
                                 <th>Invoice ID</th>
        						<th class="">Mobile No.</th>
        						<th class=""> Amount </th>
        						<th class="">File</th>
                                <th class="">Verified</th>
                                <th class="">Delete</th>
        						</tr>
        					</thead>
        					<tbody>
        						<?php if(count($payment) > 0): ?>
        						<?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        						<tr class="id<?php echo e($row->id); ?>">
        						<td class=""><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($row->invoice_no); ?></td>
        						<td class=""><?php echo e($row->mobile_no); ?></td>
        						<td> <?php echo e($row->amount); ?> </td>
        						<td><?php echo e($row->file); ?> - <a href="<?php echo e(asset('uploads/members/'.$row->file)); ?>" target="_blank">View File</a></td>
                                <td class="text-left">
                                <form action="<?php echo e(route('payment-verified',$row->id)); ?>" method="POST">
									<?php echo csrf_field(); ?>	
								<?php if(($row->verified)==0): ?>
                                <button class="btn btn-danger btn btn-sm" name="0" type="submit"><i
                                        class="fa fa-times"></i>
                                </button>
                           		 <?php else: ?>
                                <button class="btn btn-success btn btn-sm" name="1" type="submit"><i
                                        class="fa fa-check"></i>
                                </button>
                         	   <?php endif; ?>
                         	   </form>
                               </td>
                               <td>  <span class="trash"><a href="#<?php echo e($row->id); ?>" class="deletepayment">Delete</a></span></td>
        						</tr>
        						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        						<?php endif; ?>
        						
        					</tbody>
        				</table>
		            	</div>
		        	</div>
			    </div>
			</div>
		</section>
       
        <?php else: ?>
        <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
           <span class="panel-title"> भुक्तानी विवरण </span>
      </div>
       <div class="panel-body">                 
        <div class="form-group">
        <h3>Payment Not Made</h3>
        </div>
        </div>
        </div>
        </div>
        <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
jQuery(document).ready(function() {
  $('.deletepayment').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'DELETE',
      url:"<?php echo e(url('payment-delete') . '/'); ?>" + id,
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
<!-- Datatables -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/media/js/jquery.dataTables.js')); ?>"></script>

<!-- Datatables Tabletools addon -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>

<!-- Datatables ColReorder addon -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')); ?>"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/media/js/dataTables.bootstrap.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/admin/details.blade.php ENDPATH**/ ?>