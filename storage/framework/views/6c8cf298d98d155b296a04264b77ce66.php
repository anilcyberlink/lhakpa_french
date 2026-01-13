
<?php $__env->startSection('title','Create User'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h3><?php echo e($user->name); ?></h3>
<form action="<?php echo e(route('user.update_roles',$user)); ?>" method="post">
<?php echo e(@csrf_field()); ?>

<input type="hidden" name="_method" value="put" />
<?php if($data->count() > 0): ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<input type="checkbox" class="_form-control" name="roles[]" value="<?php echo e($row->id); ?>" 
<?php if($user->roles->pluck('id')->contains($row->id)): ?> checked <?php endif; ?> /> <?php echo e($row->role); ?> <br/>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<br>
<input type="submit" class="btn btn-primary btn-sm" value="Update Roles"/>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/admin/users/assign-roles.blade.php ENDPATH**/ ?>