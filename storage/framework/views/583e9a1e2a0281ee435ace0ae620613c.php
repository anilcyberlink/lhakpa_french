<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keyword'); ?> "/>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description'); ?>"/>
    <title><?php echo $__env->yieldContent('post_title'); ?> - <?php echo e($setting->site_name); ?> </title>   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0077b9" />
    <meta property="og:title" content="<?php echo $__env->yieldContent('post_title'); ?>" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('post_excerpt'); ?>" />
    <?php if(trim($__env->yieldContent('page_thumbnail'))): ?>
    <meta property="og:image" content="<?php echo e(asset( env('PUBLIC_PATH') . 'uploads/medium/' )); ?>/<?php echo $__env->yieldContent('page_thumbnail'); ?>" />
    <?php else: ?>
    <meta property="og:image" content="<?php echo e(asset(env('PUBLIC_PATH').'/themes-assets')); ?>/images/logo.png" />
    <?php endif; ?>
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="<?php echo e($setting->site_name); ?>" />
    <meta property="twitter:card" content="" />
    <meta property="twitter:site" content="" />
    <meta property="twitter:title" content="<?php echo $__env->yieldContent('post_title'); ?>" />
    <meta property="twitter:description" content="<?php echo $__env->yieldContent('post_excerpt'); ?>" />
    <?php if(trim($__env->yieldContent('page_thumbnail'))): ?>
    <meta property="twitter:image" content="<?php echo e(asset( env('PUBLIC_PATH') . 'uploads/medium/' )); ?>/<?php echo $__env->yieldContent('page_thumbnail'); ?>" />
    <?php else: ?>
    <meta property="twitter:image" content="<?php echo e(asset(env('PUBLIC_PATH').'/themes-assets')); ?>/images/logo.png" />
    <?php endif; ?>   
    <meta property="twitter:url" content="" />
    <meta name="twitter:image:alt" content="" />
    <link href="<?php echo e(asset('themes-assets')); ?>/css/app.css" rel="stylesheet">
    <link href="<?php echo e(asset('themes-assets')); ?>/images/favicon.ico" rel="shortcut icon" />
    <meta name="theme-color" content="#736541">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JYJJS0PHCQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JYJJS0PHCQ');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JYJJS0PHCQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JYJJS0PHCQ');
</script>
</head>
<body>
   <?php echo $__env->make('themes.default.common.action-buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header start -->
    <div uk-sticky="start: 300; animation: uk-animation-slide-top; cls-active:uk-navbar-sticky; sel-target:.uk-navbar-container; class:uk-sticky;"
        uk-scrollspy="target: [uk-scrollspy-class], .uk-navbar, li; cls: uk-animation-slide-bottom-small; delay: 50; repeat: false;">
        <!-- Main Menu -->
        <div class="uk-visible@l uk-main-header-white bg-white">
            <div class="uk-container uk-container-large">
                <nav class="uk-navbar d-flex uk-flex-middle" uk-navbar>
                    <div class="uk-navbar-left">
                        <?php if( $navigations->count() ): ?>
                        <ul class="uk-navbar-nav uk-position-relative">
                             <?php $__currentLoopData = $navigations->slice(0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(url('page/'.posttype_url($row->uri))); ?>"><?php echo e($row->post_type); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <div class="uk-navbar-center ">
                        <a class="uk-navbar-item uk-logo " href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(asset('themes-assets')); ?>/images/logo.png" alt="" width="180">
                        </a>
                    </div>
                    <div class="uk-navbar-right">
                         <?php if( $navigations->count() ): ?>
                         <ul class="uk-navbar-nav uk-position-relative">
                             <?php $__currentLoopData = $navigations->slice(4,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(url('page/'.posttype_url($row->uri))); ?>"><?php echo e($row->post_type); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>      
                    </div>
                </nav>
            </div>
        </div>
        <!-- end main menu -->
        <!-- mobile menu -->
        <div class="uk-header-mobile uk-hidden@l" uk-header="">
            <div class="uk-navbar-container bg-white">
                <div class="uk-container uk-container-expand">
                    <nav class="uk-navbar" uk-navbar="{&quot;container&quot;:&quot;.uk-header-mobile&quot;}">
                        <div class="uk-navbar-left">
                            <a uk-toggle aria-label="Open Menu" href="#uk-dialog-mobile"
                                class="uk-navbar-toggle uk-navbar-toggle-animate" aria-expanded="false">
                                <div uk-navbar-toggle-icon class="uk-icon uk-navbar-toggle-icon"></div>
                            </a>
                        </div>
                        <div class="uk-navbar-center">
                            <a href="<?php echo e(url('/')); ?>" class=" uk-navbar-item">
                                <img alt="" loading="eager" src="<?php echo e(asset('themes-assets')); ?>/images/logo.png" width="150">
                            </a>
                        </div>
                        <div class="uk-navbar-right">
                            <a href="tel: <?php echo e($setting->phone); ?>}"><i class="fa fa-phone"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
            <div id="uk-dialog-mobile" class="uk-dropbar uk-padding-remove bg-light"
                uk-drop="{&quot;clsDrop&quot;:&quot;uk-dropbar&quot;,&quot;flip&quot;:&quot;false&quot;,&quot;container&quot;:&quot;.uk-header-mobile&quot;,&quot;target-y&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;mode&quot;:&quot;click&quot;,&quot;target-x&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;stretch&quot;:true,&quot;bgScroll&quot;:&quot;false&quot;,&quot;animation&quot;:&quot;reveal-top&quot;,&quot;animateOut&quot;:true,&quot;duration&quot;:300,&quot;toggle&quot;:&quot;false&quot;}">
                <div class="uk-height-min-1-1 uk-flex uk-flex-column">
                    <div class="uk-margin-auto-bottom">
                        <div class="uk-grid uk-child-width-1-1 uk-grid-stack" uk-grid="">
                            <div>
                                <div class="uk-panel" id="module-menu-dialog-mobile">
                                     <?php if( $navigations->count() ): ?>
                                    <ul class="uk-nav uk-nav-primary  uk-nav-divider uk-nav-accordion"
                                        uk-nav="targets: > .js-accordion">
                                         <li>
                                            <a href="<?php echo e(url('/')); ?>">Home</a>
                                        </li>
                                             <?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(url('page/'.posttype_url($row->uri))); ?>"><?php echo e($row->post_type); ?></a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                        
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end mobile menu -->
    </div>
    <!-- end header    --><?php /**PATH D:\xampp\htdocs\crown\resources\views/themes/default/common/inner-header.blade.php ENDPATH**/ ?>