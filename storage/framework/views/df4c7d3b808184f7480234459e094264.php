
<?php $__env->startSection('content'); ?>

 <form class="needs-validation" method="POST" action="<?php echo e(route('login')); ?>">
   <?php echo e(csrf_field()); ?>

     <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response" />
   <div class="form-group">
      <label for="email" class="sr-only">Username</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Enter Username" required>   
      
    
   </div>
   <div class="form-group">
      <label for="password" class="sr-only">Password</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>      
   </div>

   <div class="form-group mb-4">
      <label for="PIN" class="sr-only">PIN</label>
      <input type="password" name="pin" id="pin" maxlength="6" class="form-control" placeholder="PIN" required>      
   </div>
   <button id="login" class="btn btn-block login-btn mb-4" type="submit">Sign In</button>                
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\crown\resources\views/auth/login.blade.php ENDPATH**/ ?>