
<?php $__env->startSection('title', Request::segment(2)); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(url('admin/trips-tag/create')); ?>" class="btn btn-primary btn-sm">Create</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section id="" class="table-layout animated fadeIn">
  <!-- begin: .tray-center -->
  <div class="">
    <h4> Trip Tags </h4>
    <!-- recent orders table -->
    <div class="panel">
      <div class="panel-body pn">
        <div class="table-responsive">
          <table class="table admin-form table-striped dataTable" id="datatable3">
            <thead>
              <tr class="bg-light">
                <th class="text-center"> SN </th>  
                <th>Title</th>
                <th>Published</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $tripsTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="id<?php echo e($row->id); ?>">
                <td class="text-center">
                  <?php echo e($loop->iteration); ?>

                </td>
                <td class="post_title title_hi_sh">
                  <strong> <?php echo e(ucfirst($row->title)); ?> </strong>
                  <div class="row_actions">
                    <span class="id">ID: <?php echo e($row->id); ?> | </span>
                    <span class="edit">
                      <a href="<?php echo e(url('admin/trips-tag/' . $row->id . '/edit')); ?>" aria-label="">Edit</a>
                    </span>
                    | <span class="trash">
                      <!-- Attach data-id to the delete link -->
                      <a href="#" class="submitdelete1" data-id="<?php echo e($row->id); ?>">Delete</a>
                    </span>
                  </div>
                </td>
                <td class="date">
                  <?php echo e($row->created_at); ?>

                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
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
  (function ($) {
    // Handle delete request
    $('.submitdelete1').on('click', function (e) {
      e.preventDefault();

      var id = $(this).data('id');
      var csrfToken = $('meta[name="csrf-token"]').attr('content');

      if (confirm('Are you sure you want to delete this trip tag?')) {
        $.ajax({
          url: "<?php echo e(url('admin/trips-tag')); ?>/" + id,
          type: 'DELETE',
          data: {
            _token: csrfToken,
          },
          success: function (response) {
            $('tr.id' + id).remove();
          },
          error: function () {
            alert('Error occurred while deleting the trip tag.');
          }
        });
      }
    });
  })(jQuery);

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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/trips-tag/index.blade.php ENDPATH**/ ?>