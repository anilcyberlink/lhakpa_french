
<?php $__env->startSection('title','Edit User'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add/Edit Menu Permission -  <?php echo e($user->name); ?></div>

                <div class="panel-body">
                <form action="<?php echo e(route('user.permissionUpdate',$user)); ?>" method="post">
                <?php echo e(@csrf_field()); ?>

<input type="hidden" name="_method" value="put" />
                <?php if($data->count() > 0): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group">                           
                            <div class="col-md-12"> 
                                <input type="checkbox" class="col-md-1 addpermission" name="adminmenu_id[]" value="<?php echo e($row->id); ?>"
                                <?php if($user->adminmenu->pluck('id')->contains($row->id)): ?> checked <?php endif; ?> />                    
                                <label for="title" class="col-md-7 control-label"><?php echo e($row->title); ?></label>
                            </div>
                            
                        </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
                <?php endif; ?>        
       
                <br>
<input type="submit" class="btn btn-primary btn-sm" value="Update Admin Menu"/>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
// jQuery(document).ready(function() {
//   $('.addpermission').on('click',function(e){
//     e.preventDefault();
//     var csrf = $('meta[name="csrf-token"]').attr('content');
// 	var adminmenu_id = $(this).val();
//     var user_id = '';
// 	var url = '';
//         url = url.replace(':user_id',user_id);
//         url = url.replace(':adminmenu_id',adminmenu_id);
//     $.ajax({
//       type:'post',
//       url:url,
//       data:{_token:csrf},    
//       success:function(data){ 
//         console.log(data);
//       },
//       error:function(data){       
//         console.log(data);
//      }
//    });
//   });
// });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/admin/users/permission-edit.blade.php ENDPATH**/ ?>