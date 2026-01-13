
<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary btn-sm">Create</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if($data): ?>
<h2>User List</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Pin</th>
      <th scope="col">Roles</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="id<?php echo e($row->id); ?>">
      <th scope="row"> <?php echo e($loop->iteration); ?> </th>
      <td><?php echo e($row->name); ?></td>
      <td><?php echo e($row->email); ?></td>
      <td><?php echo e($row->pin); ?></td>
      <td><?php echo e(implode(', ',$row->roles()->get()->pluck('role')->toArray())); ?>

      </td>
      <td> 
      <a href="<?php echo e(route('user.permissionEdit',$row->id)); ?>" class="btn btn-info btn-sm"> Assing Menu </a>
      <a href="<?php echo e(route('user.assignroles',$row->id)); ?>" class="btn btn-info btn-sm">Assign Roles</a>
      <a href="<?php echo e(route('user.edit',$row->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
      <a data-userid="<?php echo e($row->id); ?>" class="btn btn-danger btn-sm btn-delete">Delete</a>     
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
jQuery(document).ready(function() {
  $('.btn-delete').on('click',function(e){
    e.preventDefault();
    if(!confirm('Are you sure to delete?')) return false;
    var csrf = $('meta[name="csrf-token"]').attr('content');
	var id = $(this).attr('data-userid');
	var url = '<?php echo e(route("user.destroy",':id')); ?>';
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/admin/users/index.blade.php ENDPATH**/ ?>