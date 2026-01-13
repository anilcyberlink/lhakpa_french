<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $__env->yieldContent('title'); ?> <?php echo e($setting->site_name); ?> </title>
<meta name="keywords" content="<?php echo $__env->yieldContent('meta_keyword'); ?> "/>
<meta name="description" content="<?php echo $__env->yieldContent('meta_description'); ?>"/>
 <?php if(trim($__env->yieldContent('thumbnail'))): ?>
<meta property="og:image" content="<?php echo e(asset( env('PUBLIC_PATH') . 'uploads/medium/' )); ?>/<?php echo $__env->yieldContent('thumbnail'); ?>" />
<?php else: ?>
<meta property="og:image" content="<?php echo e(asset(env('PUBLIC_PATH').'/themes-assets')); ?>/images/logo.png" />
<?php endif; ?>
<meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
<meta property="og:description" content="<?php echo $__env->yieldContent('meta_description'); ?>" />
<meta property="og:url" content="<?php echo e(url()->current()); ?>" />
<meta property="og:locale" content="en_US" />
<meta property="og:site_name" content="<?php echo e($setting->site_name); ?>" />
<meta property="og:type" content="website" />
 <?php if(trim($__env->yieldContent('thumbnail'))): ?>
<meta property="twitter:image" content="<?php echo e(asset( env('PUBLIC_PATH') . 'uploads/medium/' )); ?>/<?php echo $__env->yieldContent('thumbnail'); ?>" />
<?php else: ?>
<meta property="twitter:image" content="<?php echo e(asset(env('PUBLIC_PATH').'/themes-assets')); ?>/images/logo.png" />
<?php endif; ?>  
 <meta name="twitter:url" content="<?php echo e(url()->current()); ?>">
 <meta name="twitter:title" content="<?php echo $__env->yieldContent('title'); ?>">
 <meta name="twitter:description" content="<?php echo $__env->yieldContent('meta_description'); ?>">
 <meta name="twitter:card" content="summary_large_image" />
<link href="<?php echo e(asset('themes-assets')); ?>/images/favicon.ico" rel="shortcut icon" />
<meta name="theme-color" content="#736541">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes-assets')); ?>/css/menu.css"/> 
</head>
<body>
<div class="preloader-wrapper">
      <div class="loader"></div>
   </div>
<header class="uk-box-shadow-small uk-padding-small  bg-pattern" >
  <!-- mobile menue -->
<div class="uk-header-mobile uk-hidden@l" uk-sticky="show-on-up: true; cls-active: uk-navbar-sticky bg-pattern; animation: uk-animation-slide-top">
  <div class="bg-pattern">
     <nav uk-navbar="container: .uk-header-mobile" class="uk-navbar">
        <div class="uk-navbar-left">
           <a href="" class="uk-navbar-item uk-logo uk-display-block">
           <img alt="" width="150" src="<?php echo e(asset('themes-assets/images/logo.png')); ?>"></a>
        </div>
        <div class="uk-navbar-right">
           <a class="uk-navbar-toggle text-primary" href="#uk-mobile" uk-toggle="" aria-expanded="false">
              <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"> </div>
           </a>
        </div>
     </nav>
  </div>
 
</div>
<!-- end mobile menue -->  
<!--  -->
<div id="uk-mobile" uk-offcanvas="" mode="" overlay="" flip="" class="uk-offcanvas" tabindex="-1" style="">
     <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close uk-icon uk-close-large text-white" type="button" uk-close=""></button>
        <div class="uk-child-width-1-1 uk-grid uk-grid-stack uk-margin-large-top" uk-grid="">
           <div>
              <div class="uk-panel" id="module-menu-mobile">
                 <ul class="uk-menu-list uk-nav uk-nav-default f-18">
                      <?php if($menu->count()>0): ?>
                  <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                 <li><a href="<?php echo e(route('category.navigation',$value->uri)); ?>"><?php echo e($value->category); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                 </ul>
              </div>
           </div>
           
        </div>
     </div>
  </div>
  <!--  -->
  <!-- main menu -->
  <div class="uk-container uk-container-xlarge uk-text-center uk-visible@l">
     <a href="<?php echo e(url('/')); ?>" class=" uk-display-block"><img src="<?php echo e(asset('themes-assets/images/logo.png')); ?>" width="" class="logo"></a>
     <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar uk-sticky="show-on-up: true; cls-active: uk-navbar-sticky bg-pattern; animation: uk-animation-slide-top">
        
        <!-- <div class="uk-navbar-center">...</div> -->
        <div class="uk-navbar-center">
           <nav class="uk-flex-middle" uk-navbar>
              <ul class="uk-menu-list uk-navbar-nav no-border uk-no-border uk-position-relative">
                   <?php if($menu->count()>0): ?>
               <?php $__currentLoopData = $menu->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li><a href="<?php echo e(route('category.navigation',$value->uri)); ?>"><?php echo e($value->category); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
              </ul>
              <a class="uk-navbar-toggle text-primary" href="#uk-mobile" uk-toggle="" aria-expanded="false">
              <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"> </div>
           </a>
           </nav>
        </div>
     </nav>
  </div>
  <!-- end main menu -->
</header>
<?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/common/menu-header.blade.php ENDPATH**/ ?>