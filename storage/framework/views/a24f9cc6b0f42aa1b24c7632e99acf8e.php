
<?php $__env->startSection('title', Request::segment(2)); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(url('admin/activity/create')); ?>" class="btn btn-primary btn-sm">Create</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<section id="" class="table-layout animated fadeIn">
  <!-- begin: .tray-center -->
  <div class="">
   <h4> Activities </h4>
   <!-- recent orders table -->
    <div class="panel-heading">
      <ul class="nav panel-tabs-border panel-tabs panel-tabs-left">
        <li class="active">
          <a href="#tab1_1" data-toggle="tab">Expeditions</a>
        </li>
        <li>
          <a href="#tab1_2" data-toggle="tab">Destination</a>
        </li>
           <li>
          <a href="#tab1_3" data-toggle="tab">Activity</a>
        </li>
        <li>
          <a href="#tab1_4" data-toggle="tab">Travels</a>
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
              <th class="text-center"> SN </th>
              <th>Title</th>
              <?php /* <th>Is Background?</th>*/?>
               <!--<th>Show in Home</th> -->
               <!--<th>Manage Banner</th>-->
                <th>Photo/Video</th>
               <th class="text-center">Order</th>                                                   
              <th>Published</th>
            </tr>
            </thead>
            <tbody>
             <?php if(count($expedition) > 0): ?>
      			 <?php $__currentLoopData = $expedition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="id<?php echo e($row->id); ?>">
                  <td class="text-center">
                    <?php echo e($loop->iteration); ?>

                  </td>
                  <td class=""> 
                   <strong> <?php echo e(ucfirst($row->title)); ?> </strong>                
                    <div class=""><span class="id">ID: <?php echo e($row->id); ?> | </span><span class="edit"><a href="<?php echo e(url( 'admin/'.Request::segment(2) .'/'. $row->id. '/edit')); ?>" aria-label="">Edit</a> 
                     </span>                
                     <?php if($row->id !=  17): ?>
                     | <span class="trash"><a href="#<?php echo e($row->id); ?>" class="submitdelete1">Delete</a> </span>
                     <?php endif; ?>
                    </td>
                   <?php /* <td class="">
                      <form action="{{route('activity.isdefault',$row->id)}}" method="POST">
                      @csrf 
                       @if(($row->isdefault)==0)
                        <button class="btn btn-danger btn btn-sm" name="isdefault" value="0" type="submit"><i
                                class="fa fa-times"></i>
                        </button>
                       @else
                        <button class="btn btn-success btn btn-sm" name="isdefault" value="1" type="submit"><i
                                class="fa fa-check"></i>
                        </button>
                     @endif                                 
                      
                      </form>
                    </td>
                    <td>{{$row->status == '1'?'YES':'NO'}}</td>
                    <td><a href="{{route('activity.banner.index',$row->id)}}" title="Manage Banner"><i class="fa fa-file-image-o fa fa-2x" aria-hidden="true"></i></a></td>*/?>
                    <td>
                      <?php if($row->thumbnail): ?>
                      <img src="<?php echo e(url(env('PUBLIC_PATH').'uploads/icon/' . $row->thumbnail )); ?>" width="100" />
                      <?php endif; ?>                  
                    </td>
    
                    <td class="text-center">                  
                      <?php echo e($row->ordering); ?>

                    </td>
                  
                    <td class="date"> <?php echo e($row->created_at); ?> </td>             
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
                      <th class="text-center"> SN </th>
                      <th>Title</th>
                      <!--<th>Show in Home</th>-->
                      <!--<th>Manage Banner</th>-->
                        <th>Photo/Video</th>
                       <th class="text-center">Order</th>                                                   
                      <th>Published</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php if(count($trekking) > 0): ?>
          			 <?php $__currentLoopData = $trekking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="id<?php echo e($row->id); ?>">
                      <td class="text-center">
                        <?php echo e($loop->iteration); ?>

                      </td>
                      <td class=""> 
                       <strong> <?php echo e(ucfirst($row->title)); ?> </strong>                
                        <div class=""><span class="id">ID: <?php echo e($row->id); ?> | </span><span class="edit"><a href="<?php echo e(url( 'admin/'.Request::segment(2) .'/'. $row->id. '/edit')); ?>" aria-label="">Edit</a> 
                         </span>                
                       
                         | <span class="trash"><a href="#<?php echo e($row->id); ?>" class="submitdelete1">Delete</a> </span>
                        </td>
                        <?php /*<td>{{$row->status == '1'?'YES':'NO'}}</td>
                        <td><a href="{{route('activity.banner.index',$row->id)}}" title="Manage Banner"><i class="fa fa-file-image-o fa fa-2x" aria-hidden="true"></i></a></td> */?>
                        <td>
                          <?php if($row->thumbnail): ?>
                          <img src="<?php echo e(url(env('PUBLIC_PATH').'uploads/icon/' . $row->thumbnail )); ?>" width="100" />
                          <?php endif; ?>                  
                        </td>
        
                        <td class="text-center">                  
                          <?php echo e($row->ordering); ?>

                        </td>
                      
                        <td class="date"> <?php echo e($row->created_at); ?> </td>             
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
          <div class="_row">
            <div class="col-md-12">
             
              <div id="users" class="tab-pane active">
               <div class="table-responsive mhn20 mvn15">
                <table class="table admin-form theme-warning fs13"  id="datatable2">
                  <thead>
                     <tr class="bg-light">
                      <th class="text-center"> SN </th>
                      <th>Title</th>
                      <!--<th>Show in Home</th>-->
                      <!--<th>Manage Banner</th>-->
                        <th>Photo/Video</th>
                       <th class="text-center">Order</th>                                                   
                      <th>Published</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php if(count($activity) > 0): ?>
          			 <?php $__currentLoopData = $activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="id<?php echo e($row->id); ?>">
                      <td class="text-center">
                        <?php echo e($loop->iteration); ?>

                      </td>
                      <td class=""> 
                       <strong> <?php echo e(ucfirst($row->title)); ?> </strong>                
                        <div class=""><span class="id">ID: <?php echo e($row->id); ?> | </span><span class="edit"><a href="<?php echo e(url( 'admin/'.Request::segment(2) .'/'. $row->id. '/edit')); ?>" aria-label="">Edit</a> 
                         </span>                
                       
                         | <span class="trash"><a href="#<?php echo e($row->id); ?>" class="submitdelete1">Delete</a> </span>
                        </td>
                        <?php /*<td>{{$row->status == '1'?'YES':'NO'}}</td>
                        <td><a href="{{route('activity.banner.index',$row->id)}}" title="Manage Banner"><i class="fa fa-file-image-o fa fa-2x" aria-hidden="true"></i></a></td> */?>
                        <td>
                          <?php if($row->thumbnail): ?>
                          <img src="<?php echo e(url(env('PUBLIC_PATH').'uploads/icon/' . $row->thumbnail )); ?>" width="100" />
                          <?php endif; ?>                  
                        </td>
        
                        <td class="text-center">                  
                          <?php echo e($row->ordering); ?>

                        </td>
                      
                        <td class="date"> <?php echo e($row->created_at); ?> </td>             
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

        <div id="tab1_4" class="tab-pane">
          <div class="_row">
            <div class="col-md-12">
              <div id="users" class="tab-pane active">
               <div class="table-responsive mhn20 mvn15">
                <table class="table admin-form theme-warning fs13"  id="datatable2">
                  <thead>
                    <tr class="bg-light">
                      <th class="text-center"> SN </th>
                      <th>Title</th>
                      <!--<th>Show in Home</th>-->
                      <!--<th>Manage Banner</th>-->
                      <th>Photo/Video</th>
                      <th class="text-center">Order</th>                                                   
                      <th>Published</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(count($travels) > 0): ?>
          			      <?php $__currentLoopData = $travels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="id<?php echo e($row->id); ?>">
                          <td class="text-center"> <?php echo e($loop->iteration); ?> </td>
                          <td class=""> 
                            <strong> <?php echo e(ucfirst($row->title)); ?> </strong>                
                            <div class="">
                              <span class="id">ID: <?php echo e($row->id); ?> | </span>
                              <span class="edit">
                                <a href="<?php echo e(url( 'admin/'.Request::segment(2) .'/'. $row->id. '/edit')); ?>" aria-label="">Edit</a> 
                              </span>  | 
                              <span class="trash"><a href="#<?php echo e($row->id); ?>" class="submitdelete1">Delete</a> </span>
                          </td>
                          <?php /*<td>{{$row->status == '1'?'YES':'NO'}}</td>
                          <td><a href="{{route('activity.banner.index',$row->id)}}" title="Manage Banner"><i class="fa fa-file-image-o fa fa-2x" aria-hidden="true"></i></a></td> */?>
                          <td>
                            <?php if($row->thumbnail): ?>
                              <img src="<?php echo e(url(env('PUBLIC_PATH').'uploads/icon/' . $row->thumbnail )); ?>" width="100" />
                            <?php endif; ?>                  
                          </td>
                          <td class="text-center">                  
                            <?php echo e($row->ordering); ?>

                          </td>
                          <td class="date"> <?php echo e($row->created_at); ?> </td>             
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
  <!-- end: .tray-center -->
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('libraries'); ?>
<!-- Datatables -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/media/js/jquery.dataTables.js')); ?>"></script>

<!-- Datatables Tabletools addon -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>

<!-- Datatables ColReorder addon -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')); ?>"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="<?php echo e(asset(env('PUBLIC_PATH').'vendor/plugins/datatables/media/js/dataTables.bootstrap.js')); ?>"></script>
<script type="text/javascript">
(function ( $ ) { 
  $('.submitdelete1').on('click',function(e){
    e.preventDefault();
    if(confirm('Are you sure to delete??')){
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var str = $(this).attr('href');
    var id = str.slice(1);
    $.ajax({
      type:'delete',
      url:"<?php echo e(url('admin').'/'.Request::segment(2).'/'); ?>" + id,
      data:{_token:csrf},    
      success:function(data){  
      $('tbody tr.id' + id ).remove();
     },
     error:function(data){       
       alert('Error occurred!');
     }
   });
   }
  });
 
}( jQuery ));

/********/
  $('document').ready(function(){
    $('#checkAll').on('click',function(e){
      if($(this).is(':checked', true)){
        $('.check_box').prop('checked', true);
      }else{
        $('.check_box').prop('checked', false);
      }
    });
    $('.deleteAll').on(function(){

    });
  });


  /************/
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
    "iDisplayLength": 10,
    "aLengthMenu": [
    [5, 10, 25, 50, -1],
    [5, 10, 25, 50, "All"]
    ],
    "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
    "oTableTools": {
      "sSwfPath": "<?php echo e(asset(env('PUBLIC_PATH'))); ?>vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
    }
  });
 /************/
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
    "iDisplayLength": 10,
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/activities/index.blade.php ENDPATH**/ ?>