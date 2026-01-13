
<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<?php if($data): ?>
Name : <?php echo e($data->name); ?> <br/>
Email: <?php echo e($data->email); ?> <br/>
PIN  : <?php echo e($data->pin); ?> <br/>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/admin/users/userprofile.blade.php ENDPATH**/ ?>