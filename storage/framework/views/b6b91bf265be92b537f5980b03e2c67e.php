<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> <?php echo e(config('app.name', '')); ?> - <?php echo $__env->yieldContent('title'); ?> </title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Cyberlink">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <base href="<?= url('/') ?>" />
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
  <?php echo $__env->yieldContent('additional-css'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset(env('PUBLIC_PATH') . 'assets/skin/default_skin/css/theme.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset(env('PUBLIC_PATH') . 'assets/skin/default_skin/css/theme2.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset(env('PUBLIC_PATH') . 'assets/skin/default_skin/css/theme3.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset(env('PUBLIC_PATH') . 'assets/admin-tools/admin-forms/css/admin-forms.css')); ?>">
  <link rel="shortcut icon" href="<?php echo e(asset('themes-assets')); ?>/images/favicon.ico">
  <!--<script src="<?php echo e(asset('js/tinymce/tinymce.min.js')); ?>" referrerpolicy="origin"></script>-->
  <!--  <script src="<?php echo e(asset('tinymce/init-tinymce.js')); ?>"></script>-->
  <!--  <style>-->
  <!--      .tox-editor-container .tox-promotion {-->
  <!--          visibility: hidden !important;-->
  <!--      }-->
  <!--  </style>-->
   <script src="<?php echo e(asset('js/tinymce/tinymce.min.js')); ?>" referrerpolicy="origin"></script>
 <script>
   var editor_config = {
     path_absolute: "/",
     selector: 'textarea.my-editor',
     relative_urls: false,
     plugins: 'code table lists advlist charmap emoticons fullscreen hr image insertdatetime link media nonbreaking pagebreak paste preview print searchreplace spellchecker tabfocus toc visualblocks visualchars wordcount fontfamily fontsize style',
     toolbar: 'undo redo | blocks | bold italic underline removeformat | fontfamily fontsize style | alignleft aligncenter alignright alignjustify | indent outdent | bullist numlist | link unlink image media code hr | table fullscreen insertdatetime',
     toolbar_mode: 'sliding',
     force_br_newlines: false,
     force_p_newlines: false,
     forced_root_block: '',
     cleanup: true,
     remove_linebreaks: true,
     convert_newlines_to_brs: false,
     inline_styles: false,
     entity_encoding: 'raw',
     paste_auto_cleanup_on_paste: true,
     entities: '160,nbsp,38,amp,60,lt,62,gt',

     file_picker_callback: function (callback, value, meta) {
       var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
         'body')[0].clientWidth;
       var y = window.innerHeight || document.documentElement.clientHeight || document
         .getElementsByTagName('body')[0].clientHeight;

       var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
       if (meta.filetype == 'image') {
         cmsURL = cmsURL + "&type=Images";
       } else {
         cmsURL = cmsURL + "&type=Files";
       }
   
       tinyMCE.activeEditor.windowManager.openUrl({
         url: cmsURL,
         title: 'Filemanager',
         width: x * 0.8,
         height: y * 0.8,
         resizable: "yes",
         close_previous: "no",
         onMessage: (api, message) => {
           callback(message.content);
         }
       });
     }
   };

   tinymce.init(editor_config);
 </script>
 <style>
   .tox-editor-container .tox-promotion{
     visibility: hidden!important;
   }
 </style>
</head>
  <body class="dashboard-page sb-l-o sb-r-c">
  <!-- Start: Main -->
  <div id="main">

   <!-- Start: Header -->
    <header class="navbar navbar-fixed-top">
      <div class="navbar-branding">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>" target="_blank">
         Admin Panel
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="avoid:javascript;" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'assets/img/avatars/1.png')); ?>" alt="avatar" class="mw30 br64 mr15">

         <?php echo e(Auth::user()->name); ?>


            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
          <li><a href="<?php echo e(route('admin.userprofile')); ?>">User Profile</a></li>
          <li><a href="<?php echo e(route('admin.changepassword')); ?>">Change Password </a></li>
                        <?php if(auth()->guard()->guest()): ?>
                                    <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                                    <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
                        <?php else: ?>

                    <li class="dropdown-footer">
                        <a class="animated animated-short fadeInUp" href="<?php echo e(route('logout')); ?>"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                             <span class="fa fa-power-off pr5"></span>


                                                <?php echo e(__('Logout')); ?>

                                            </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                           <?php echo e(csrf_field()); ?>

                        </form>

                    </li>
            <?php endif; ?>

          </ul>
        </li>
      </ul>
    </header>

    <!-- Start: Sidebar Left -->
    <?php echo $__env->make('admin.common.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="content_wrapper">

      <!-- End: Topbar-Dropdown -->
      <!-- Start: Topbar -->
     
      <!-- End: Topbar -->
      <header id="topbar">
        <div class="topbar-left">
        </div>
<div class="topbar-right">
<?php echo $__env->yieldContent('breadcrumb'); ?>
</div>
</header>
<!-- Begin: Content -->
<section id="content" class="animated fadeIn">
<!-- // -->

        <!-- Admin-panels -->
        <?php echo $__env->make('admin.common.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <!-- <div class="admin-panels fade-onload">
          <div class="row">
         </div>
        </div>  -->

      <!-- Begin: Page Footer -->

       <!-- <footer id="content-footer">
        <div class="row">
          <div class="col-md-6">
            <span class="footer-legal">
              &copy; <?php
            //echo date('Y');
            ?>
              Cyberlink Pvt. Ltd. </span>
          </div>
          <div class="col-md-6 text-right">
            <span class="footer-meta"></span>
            <a href="#content" class="footer-return-top">
              <span class="fa fa-arrow-up"></span>
            </a>
          </div>
        </div>
      </footer>  -->

      <!-- End: Page Footer -->
      </section>

    </section>
    <!-- End: Content-Wrapper -->

    <!-- Start: Right Sidebar -->
  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
   <script src="<?php echo e(asset('vendor/jquery/jquery-1.11.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/jquery/jquery_ui/jquery-ui.min.js')); ?>"></script>

  <!-- HighCharts Plugin -->
  <script src="<?php echo e(asset('vendor/plugins/highcharts/highcharts.js')); ?>"></script>

  <!-- Sparklines Plugin -->
  <script src="<?php echo e(asset('vendor/plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>

  <!-- Simple Circles Plugin -->
  <script src="<?php echo e(asset('vendor/plugins/circles/circles.js')); ?>"></script>

  <!-- JvectorMap Plugin + US Map (more maps in plugin/assets folder) -->
  <script src="<?php echo e(asset('vendor/plugins/jvectormap/jquery.jvectormap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js')); ?>"></script>
  <script src="<?php echo e(asset('/js/app.js')); ?>"></script>
  <?php echo $__env->yieldContent('libraries'); ?>

  <!-- Theme Javascript -->
  <script src="<?php echo e(asset('assets/js/utility/utility.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/demo/demo.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

  <!-- Widget Javascript -->
  <script src="<?php echo e(asset('assets/js/demo/widgets.js')); ?>"></script>

<?php echo $__env->yieldContent('scripts'); ?>


    <script>
$(document).ready(function(){
$(".category-search").on("keyup", function() {
var value = $(this).val().toLowerCase();
$(".category-list li").filter(function() {
$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
});
});
});


$(document).ready(function(){
$(".category-search1").on("keyup", function() {
var value = $(this).val().toLowerCase();
$(".category-list1 li").filter(function() {
$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
});
});
});

</script>

    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(env('SITE_KEY')); ?>"></script>
    <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('<?php echo env('SITE_KEY'); ?>', {
            action: 'homepage'
        }).then(function(token) {
            document.getElementById('g_recaptcha_response').value = token;
        });
    });
    </script>

  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();

     // Init Admin Panels on widgets inside the ".admin-panels" container
    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      mobile: false,
      onStart: function() {
        // Do something before AdminPanels runs
      },
      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

        // Init the rest of the plugins now that the panels
        // have had a chance to be moved and organized.
        // It's less taxing to organize empty panels
        demoHighCharts.init();
        runVectorMaps(); // function below
      },
      onSave: function() {
        $(window).trigger('resize');
      }
    });

    // Widget VectorMap
    function runVectorMaps() {

      // Jvector Map Plugin
      var runJvectorMap = function() {
        // Data set
        var mapData = [900, 700, 350, 500];
        // Init Jvector Map
        $('#WidgetMap').vectorMap({
          map: 'us_lcc_en',
          //regionsSelectable: true,
          backgroundColor: 'transparent',
          series: {
            markers: [{
              attribute: 'r',
              scale: [3, 7],
              values: mapData
            }]
          },
          regionStyle: {
            initial: {
              fill: '#E5E5E5'
            },
            hover: {
              "fill-opacity": 0.3
            }
          },
          markers: [{
            latLng: [37.78, -122.41],
            name: 'San Francisco,CA'
          }, {
            latLng: [36.73, -103.98],
            name: 'Texas,TX'
          }, {
            latLng: [38.62, -90.19],
            name: 'St. Louis,MO'
          }, {
            latLng: [40.67, -73.94],
            name: 'New York City,NY'
          }],
          markerStyle: {
            initial: {
              fill: '#a288d5',
              stroke: '#b49ae0',
              "fill-opacity": 1,
              "stroke-width": 10,
              "stroke-opacity": 0.3,
              r: 3
            },
            hover: {
              stroke: 'black',
              "stroke-width": 2
            },
            selected: {
              fill: 'blue'
            },
            selectedHover: {}
          },
        });
        // Manual code to alter the Vector map plugin to
        // allow for individual coloring of countries
        var states = ['US-CA', 'US-TX', 'US-MO',
          'US-NY'
        ];
        var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
        var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
        $.each(states, function(i, e) {
          $("#WidgetMap path[data-code=" + e + "]").css({
            fill: colors[i]
          });
        });
        $('#WidgetMap').find('.jvectormap-marker')
          .each(function(i, e) {
            $(e).css({
              fill: colors2[i],
              stroke: colors2[i]
            });
          });
      }

      if ($('#WidgetMap').length) {
        runJvectorMap();
      }
    }

  });

  // Date picker for tender form
  $( function() {
    // $( "#datepicker1" ).datepicker({dateFormat:'dd-mm-yy'});
    // $( "#datepicker2" ).datepicker({dateFormat:'dd-mm-yy'});
  } );
  </script>

  <!-- END: PAGE SCRIPTS -->
</body>
</html>
<?php /**PATH D:\xampp\htdocs\crown\resources\views/admin/master.blade.php ENDPATH**/ ?>