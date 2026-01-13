<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="keywords" content="<?php echo e(env('APP_KEYWORDS')); ?>" />
    <meta name="description" content="<?php echo e(env('APP_DESCRIPTION')); ?>">
    <meta name="author" content="<?php echo e(env('APP_NAME')); ?>">
    <title><?php echo e(config('app.name', 'Content Management System')); ?></title>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('login/images/favicon.ico')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('login/css/login.css')); ?>">
   </head>
   <body>
      <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
         <div class="container">
            <div class="card login-card">
               <div class="row no-gutters">
                  <div class="col-md-6">
                     <img src="<?php echo e(asset('login/images/crowne-hotel.png')); ?>" alt="login" class="login-card-img">                   
                  </div>
                  <div class="col-md-6">
                     <div class="card-body">
                        <div class="brand-wrapper">
                           <img src="<?php echo e(asset('login/images/logo.png')); ?>" alt="logo" class="">
                        </div>
                        <p class="login-card-description">Sign into your account</p>
                         <?php if(session('status')): ?>
                        <div class="alert alert-warning">
                            <?php echo e(session('status')); ?>

                        </div>
                       <?php endif; ?>
                       <?php echo $__env->yieldContent('content'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(env('SITE_KEY')); ?>"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('<?php echo e(env("SITE_KEY")); ?>', {action: 'homepage'}).then(function(token) {
       document.getElementById('g_recaptcha_response').value=token;
    });
});
</script>
   </body>
</html><?php /**PATH D:\WorkingXampp\htdocs\crownem\resources\views/layouts/app.blade.php ENDPATH**/ ?>