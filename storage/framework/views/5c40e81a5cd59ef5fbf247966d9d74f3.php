
<?php $__env->startSection('title', Request::segment(2)); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <?php if(Request::segment(3)): ?>
        <a href="<?php echo e(route('admin.post.index', Request::segment(2))); ?>" class="btn btn-primary btn-sm">Go Back</a>
    <?php endif; ?>
    <a href="<?php echo e(route('admin.post.create', Request::segment(2))); ?>" class="btn btn-primary btn-sm">Create</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section id="" class="table-layout animated fadeIn">
        <!-- begin: .tray-center -->
        <div class="">
            <h4> <?php echo e(posttype(Request::segment(2))->post_type); ?> </h4>
            <!-- recent orders table -->
            <div class="panel">
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table admin-form table-striped dataTable" id="datatable3">
                            <thead>
                                <tr class="bg-light">
                                    <th class="text-center"> SN </th>
                                    <th>Post Name</th>
                                    <!-- <th class="text-center">GP</th>    -->
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Visiter</th>
                                    <th class="text-center">Order</th>
                                    <th class="text-center"> &nbsp; </th>
                                    <th>Published </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="id<?php echo e($row->id); ?>">
                                        <td class="text-center">
                                            <?php echo e($loop->iteration); ?>

                                        </td>
                                        <td class="post_title title_hi_sh">
                                            <?php if(check_child_post($row->id)): ?>
                                                <a href="<?php echo e(url('admin/' . Request::segment(2) . '/' . $row->id)); ?>">
                                                    <strong> <?php echo e($row->post_title); ?> </strong></a>
                                            <?php else: ?>
                                                <strong> <?php echo e($row->post_title); ?> </strong>
                                            <?php endif; ?>
                                            <div class="row_actions"><span class="id">ID: <?php echo e($row->id); ?> |
                                                </span><span class="edit"><a
                                                        href="<?php echo e(url('admin/' . Request::segment(2) . '/' . $row->id . '/edit')); ?>">
                                                        Edit
                                                    </a>
                                                </span>
                                                <?php if(!check_child_post($row->id) > 0 && !has_postdocument($row->id) > 0 && !has_associatedpost($row->id) > 0): ?>
                                                    | <span class="trash"><a href="#<?php echo e($row->id); ?>"
                                                            class="submitdelete1">
                                                            Delete
                                                        </a>
                                                    </span>
                                                <?php endif; ?>
                                        </td>

                                        <td class="text-center">
                                            <input class="CheckStatus" type="checkbox" name="status"
                                                data-rowid="<?php echo e($row->id); ?>"
                                                <?php echo e($row->status == 1 ? 'checked' : ''); ?> />
                                        </td>
                                        <?php /*?> ?> ?> ?>
                                        <td class="text-center"> <input class="GlobalPost" type="checkbox"
                                                name="global_post" data-rowid="{{ $row->id }}"
                                                {{ $row->global_post == 1 ? 'checked' : '' }} /> </td>
                                        <?php */?>
                                        <td class="text-center"><?php echo e($row->visiter); ?></td>

                                        <td class="categories text-center">
                                            <?php echo e($row->post_order); ?>

                                        </td>

                                        <td>
                                            <?php if(Request::segment(2) == 'rooms-suites' || Request::segment(2) == 'dining'): ?>
                                                <a href="<?php echo e(route('admin.multiplephoto', $row->id)); ?>" title="Photo">
                                                    <i class="fa fa-file-image-o fa fa-2x" aria-hidden="true"></i>
                                                </a>
                                            <?php endif; ?>
                                            <?php if(Request::segment(2) == 'emenu'): ?>
                                                <a href="<?php echo e(url('admin/associated/' . Request::segment(2) . '/' . $row->id)); ?>"
                                                    title="Associated posts">
                                                    <i class="fa fa-list fa-lg fa fa-2x"></i>
                                                </a>
                                            <?php endif; ?>

                                            <?php /*?> ?> ?> ?>

                                            <a href="{{ route('doc.multipledocument', $row->id) }}" title="PDF">
                                                <i class="fa fa-file-pdf-o fa fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.multiplevideo.index', $row->id) }}" title="Video">
                                                <i class="fa fa-file-video-o fa fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <?php */?>

                                        </td>
                                        <td class="date"> <?php echo e($row->created_at); ?> </td>
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
    <script src="<?php echo e(asset('/vendor/plugins/datatables/media/js/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')); ?>"></script>
    <script type="text/javascript">
        (function($) {
            $('.submitdelete1').on('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure to delete??')) {
                    var csrf = $('meta[name="csrf-token"]').attr('content');
                    var str = $(this).attr('href');
                    var id = str.slice(1);
                    $.ajax({
                        type: 'delete',
                        url: "<?php echo e(url('admin') . '/' . Request::segment(2) . '/'); ?>" + id,
                        data: {
                            _token: csrf
                        },
                        success: function(data) {
                            $('tbody tr.id' + id).remove();
                        },
                        error: function(data) {
                            alert('Error occurred!');
                        }
                    });
                }
            });

            //
            $('.CheckStatus').on('click', function(e) {
                var csrf = $('meta[name="csrf-token"]').attr('content');
                var id = $(this).attr('data-rowid');
                var url = '<?php echo e(route('admin.poststatus', ['id' => ':id'])); ?>';
                url = url.replace(':id', id);
                $.ajax({
                    type: 'put',
                    url: url,
                    data: {
                        _token: csrf
                    },
                    success: function(data) {
                        colsole.log(data);
                    },
                    error: function(data) {
                        colsole.log(data);
                    }
                });
            });

            //
            $('.GlobalPost').on('click', function(e) {
                var csrf = $('meta[name="csrf-token"]').attr('content');
                var id = $(this).attr('data-rowid');
                var url = '<?php echo e(route('admin.globalpost', ['id' => ':id'])); ?>';
                url = url.replace(':id', id);
                $.ajax({
                    type: 'put',
                    url: url,
                    data: {
                        _token: csrf
                    },
                    success: function(data) {
                        colsole.log('success');
                    },
                    error: function(data) {
                        colsole.log('Error');
                    }
                });
            });

        }(jQuery));

        /********/
        $('document').ready(function() {
            $('#checkAll').on('click', function(e) {
                if ($(this).is(':checked', true)) {
                    $('.check_box').prop('checked', true);
                } else {
                    $('.check_box').prop('checked', false);
                }
            });
            $('.deleteAll').on(function() {

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
            "iDisplayLength": 10,
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WorkingXampp\htdocs\crownem\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>