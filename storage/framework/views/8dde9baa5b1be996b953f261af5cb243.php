<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keyword'); ?> " />
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description'); ?>" />
    <title><?php echo $__env->yieldContent('title'); ?> <?php echo e($setting->site_name); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0077b9" />
    <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description'); ?>" />
    <?php if(trim($__env->yieldContent('thumbnail'))): ?>
        <meta property="og:image" content="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/medium/')); ?>/<?php echo $__env->yieldContent('thumbnail'); ?>" />
    <?php else: ?>
        <meta property="og:image" content="<?php echo e(asset('themes-assets/img/logo.png')); ?>" />
    <?php endif; ?>
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo e($setting->site_name); ?>" />
    <meta property="twitter:card" content="" />
    <meta property="twitter:site" content="<?php echo e($setting->site_name); ?>" />
    <meta property="twitter:title" content="<?php echo $__env->yieldContent('title'); ?>" />
    <meta property="twitter:description" content="<?php echo $__env->yieldContent('meta_description'); ?>" />
    <?php if(trim($__env->yieldContent('thumbnail'))): ?>
        <meta property="twitter:image"
            content="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/medium/')); ?>/<?php echo $__env->yieldContent('thumbnail'); ?>" />
    <?php else: ?>
        <meta property="twitter:image" content="<?php echo e(asset('themes-assets/img/logo.png')); ?>" />
    <?php endif; ?>
    <meta property="twitter:url" content="<?php echo e(url()->current()); ?>" />
    <meta name="twitter:image:alt" content="" />

    <link rel="stylesheet" href="<?php echo e(asset('themes-assets/css/uikit.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes-assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes-assets/css/global.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes-assets/css/swiper.min.css')); ?>">

    <!---------------- Fav icon starts by sangam --------------------->
    	<link rel="icon" type="image/x-icon" href="<?php echo e(asset('themes-assets/img/fav/favicon.ico')); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('themes-assets/img/fav/favicon-32x32.png')); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('themes-assets/img/fav/favicon-16x16.png')); ?>">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('themes-assets/img/fav/android-chrome-192x192.png')); ?>">
        <link rel="icon" type="image/png" sizes="512x512" href="<?php echo e(asset('themes-assets/img/fav/android-chrome-512x512.png')); ?>">
        <link rel="apple-touch-icon" href="<?php echo e(asset('themes-assets/img/fav/apple-touch-icon.png')); ?>">
        <link rel="manifest" href="<?php echo e(asset('themes-assets/img/fav/site.webmanifest')); ?>">
    <!---------------- Fav icon stops by sangam ----------------------->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JYJJS0PHCQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JYJJS0PHCQ');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JYJJS0PHCQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JYJJS0PHCQ');
    </script>

    <?php if (! empty(trim($__env->yieldContent('schema_markup')))): ?>
        
        
        <?php echo $__env->yieldContent('schema_markup'); ?>

    <?php endif; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
    <?php echo $__env->make('themes.default.common.response', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header start -->
    <div uk-sticky="start: 300; animation: uk-animation-slide-top; cls-active:uk-navbar-sticky; sel-target:.uk-navbar-container; class:uk-sticky;"
        uk-scrollspy="target: [uk-scrollspy-class], .uk-navbar, li; cls: uk-animation-slide-bottom-small; delay: 50; repeat: false;" style="z-index:900;">
        <!-- Main Menu -->
        <div class="uk-visible@l uk-main-header-transparent uk-navbar-container uk-navbar-transparent">
            <div class="uk-container uk-container-large">
                <nav class="uk-navbar d-flex uk-flex-middle" uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo " href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(asset('themes-assets/img/logo.png')); ?>" alt="" width="180" class="uk-logo-dark">
                            <img src="<?php echo e(asset('themes-assets/img/logo.png')); ?>" alt="" width="180" class="uk-logo-white ">
                        </a>

                    </div>
                    <div class="uk-navbar-center ">
                        <ul class="uk-navbar-nav uk-position-relative">
                            <?php if($navigations->count()): ?>
                                <?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(url('page/' . posttype_url($row->uri))); ?>"><?php echo e($row->post_type); ?> 
                                            <?php if(postType_post_menu_in_header($row->id)->count() > 0): ?>
                                                <span uk-navbar-parent-icon="" class="uk-icon uk-navbar-parent-icon"></span>
                                            <?php endif; ?>
                                        </a>
                                        <?php if(postType_post_menu_in_header($row->id)->count() > 0): ?>
                                            <div class="uk-navbar-dropdown uk-padding-remove" uk-dropdown="  offset: 0; delay-hide: 200;" class="uk-dropdown bg-light">
                                                <ul class="uk-nav uk-navbar-dropdown-nav uk-padding-remove">
                                                    <?php $__currentLoopData = postType_post_menu_in_header($row->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <a href="<?php echo e(url(geturl($_row['uri'], $_row['page_key']))); ?>"><?php echo e($_row->post_title); ?></a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="uk-navbar-right">
                        <a href="<?php echo e(route('book_now')); ?>" class="uk-btn uk-btn-primary">BOOK NOW</a>
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
                                <img alt="" loading="eager" src="<?php echo e(asset('themes-assets/img/logo.png')); ?>" class="uk-mobile-logo">
                            </a>
                        </div>
                        <div class="uk-navbar-right">
                            <a href="tel: +977-1-5234725" class="uk-primary"><i class="fa fa-phone"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
            <div id="uk-dialog-mobile" class="uk-dropbar uk-padding-remove grey-bg" 
                uk-drop="{&quot;clsDrop&quot;:&quot;uk-dropbar&quot;,&quot;flip&quot;:&quot;false&quot;,&quot;container&quot;:&quot;.uk-header-mobile&quot;,&quot;target-y&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;mode&quot;:&quot;click&quot;,&quot;target-x&quot;:&quot;.uk-header-mobile .uk-navbar-container&quot;,&quot;stretch&quot;:true,&quot;bgScroll&quot;:&quot;false&quot;,&quot;animation&quot;:&quot;reveal-top&quot;,&quot;animateOut&quot;:true,&quot;duration&quot;:300,&quot;toggle&quot;:&quot;false&quot;}"  >
                <div class="uk-height-min-1-1 uk-flex uk-flex-column">
                    <div class="uk-margin-auto-bottom">
                        <div class="uk-grid uk-child-width-1-1 uk-grid-stack" uk-grid="">
                            <div>
                                <div class="uk-panel uk-margin-large-top" id="module-menu-dialog-mobile">
                                    <ul class="uk-nav uk-nav-primary  uk-nav-divider uk-nav-accordion"
                                        uk-nav="targets: > .js-accordion">
                                        <li>
                                            <a href="<?php echo e(url('/')); ?>">Home</a>
                                        </li>
                                        <?php if($navigations->count()): ?>
                                            <?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(postType_post_menu_in_header($row->id)->count() > 0): ?>
                                                    <li class="js-accordion uk-parent">
                                                        <a href="<?php echo e(url('page/' . posttype_url($row->uri))); ?>" aria-expanded="false"><?php echo e($row->post_type); ?> <span uk-nav-parent-icon="" class="uk-icon uk-nav-parent-icon"></span></a>
                                                        <ul class="uk-nav-sub" hidden="">
                                                            <?php $__currentLoopData = postType_post_menu_in_header($row->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li>
                                                                    <a href="<?php echo e(url(geturl($_row['uri'], $_row['page_key']))); ?>"><?php echo e($_row->post_title); ?></a>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <a href="<?php echo e(url('page/' . posttype_url($row->uri))); ?>"><?php echo e($row->post_type); ?> </a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </ul>
                                    <div class="uk-padding">
                                        <a href="<?php echo e(route('book_now')); ?>" class="uk-btn uk-btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end mobile menu -->
    </div>
    <!-- Header end -->
<?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/common/header.blade.php ENDPATH**/ ?>