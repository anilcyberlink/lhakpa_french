<aside id="sidebar_left" class="nano nano-primary affix">

<!-- Start: Sidebar Left Content -->
<div class="sidebar-left-content nano-content">

<!-- Start: Sidebar Header -->
<header class="sidebar-header">
    <!-- Sidebar Widget - Search (hidden) -->
    <div class="sidebar-widget search-widget hidden">
        <div class="input-group">
      <span class="input-group-addon">
        <i class="fa fa-search"></i>
      </span>
            <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
        </div>
    </div>
</header>

<!-- Start: Sidebar Left Menu -->
<ul class="nav sidebar-menu">
    <li class="sidebar-label pt15"> Navigations</li>
    <li class="<?php echo e((Request::segment(2) == 'dashboard')?'active':''); ?>">
        <a href="<?php echo e(url('admin/dashboard')); ?>">
            <span class="glyphicon glyphicon-home"></span>
            <span class="sidebar-title">Dashboard</span>
        </a>
    </li>

    <?php if(checkAuth(1)): ?>
        <li class="<?php echo e((Request::segment(2) == 'banner')?'active':''); ?>">
            <a href="<?php echo e(url('admin/banner')); ?>">
                <span class="fa fa-file-image-o text-info" aria-hidden="true"></span>
                <span class="sidebar-title"> Manage Banner</span>
            </a>
        </li>
    <?php endif; ?>
    <?php if(checkAuth(2)): ?>
        <li>
             <?php if(Request::segment(2) == 'posttype' ||Request::segment(2) == 'postcategory'||Request::segment(2) =='about-us' ||Request::segment(2) =='reviews' ||Request::segment(2) =='rooms-suites' ||Request::segment(2) =='dining' ||Request::segment(2) =='conference'||Request::segment(2) =='health-club'||Request::segment(2) =='blog'||Request::segment(2) == 'contact-us'||Request::segment(2) =='emenu'||Request::segment(2) =='poup' ): ?>
            <a class="accordion-toggle menu-open">
            <?php else: ?>
             <a class="accordion-toggle">
                     <?php endif; ?>
                <span class="fa fa-files-o text-info"></span>
                <span class="sidebar-title"> Manage Posts </span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
            <li class="<?php echo e((Request::segment(2) == 'posttype')?'active':''); ?>">
                <a href="<?php echo e(url('type/posttype')); ?>">
                    <span class="fa fa-arrows"></span>
                    Post Types
                </a>
            </li>
            <li class="<?php echo e((Request::segment(2) == 'postcategory')?'active':''); ?>">
                <a href="<?php echo e(url('admin/postcategory')); ?>">
                    <span class="fa fa-arrows"></span>
                    Post Categories
                </a>
            </li>

            <!-- Post Type List -->
                <?php if($posttype): ?>
                    <?php $__currentLoopData = $posttype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="<?php echo e((Request::segment(2) == $row->uri)?'active':''); ?>">
                        <?php if(has_posts($row->id)): ?>
                        <a href="<?php echo e(url('admin/'.$row->uri)); ?>">
                            <?php else: ?>
                            <a href="<?php echo e(url('type/posttype/'.$row->id.'/edit')); ?>">
                                <?php endif; ?>
                            <span class="fa fa fa-arrows-h"></span>
                            <?php echo e($row->post_type); ?>

                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </li>
    <?php endif; ?>
    <?php if(checkAuth(3)): ?>
    <li class="">
         <?php if(Request::segment(2) == 'portfolio'||Request::segment(2) == 'portfoliocategory'): ?>
        <a class="accordion-toggle menu-open">
        <?php else: ?>
         <a class="accordion-toggle">
                 <?php endif; ?>
            <span class="fa fa-files-o text-info" aria-hidden="true"></span>
            <span class="sidebar-title"> Manage Portfolio </span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
             <li class="<?php echo e((Request::segment(2) == 'portfoliocategory')?'active':''); ?>">
            <a href="<?php echo e(url('admin/portfoliocategory')); ?>">
              <span class="fa fa fa-arrows-h"></span>
              Portfolio Category
            </a>
          </li> 

             <li class="<?php echo e((Request::segment(2) == 'portfolio')?'active':''); ?>">
                <a href="<?php echo e(url('admin/portfolio')); ?>">
                    <span class="fa fa fa-arrows-h"></span>
                    Portfolio
                </a>
            </li>
        </ul>
        </li>
    <?php endif; ?>
     <?php if(checkAuth(15)): ?>
     <li>
     <?php if(Request::segment(2) == 'featuretype' || Request::segment(2) == 'features'): ?>
            <a class="accordion-toggle menu-open">
            <?php else: ?>
             <a class="accordion-toggle">
                 <?php endif; ?>
      <span class="fa fa-dot-circle-o text-info"></span>
      <span class="sidebar-title">  Manage Features </span>
      <span class="caret"></span>
    </a>
    <ul class="nav sub-nav">
         <li class="<?php echo e((Request::segment(2) == 'featuretype')?'active':''); ?>">
        <a href="<?php echo e(url('admin/featuretype')); ?>">
          <span class="fa fa fa-arrows-h"></span>
         Feature Type               
        </a>                
      </li>               
         <li class="<?php echo e((Request::segment(2) == 'features')?'active':''); ?>">
        <a href="<?php echo e(url('admin/features')); ?>">
          <span class="fa fa fa-arrows-h"></span>
          Features                 
        </a>                
      </li>              
      </ul>
  </li>
  <?php endif; ?>
     <?php if(checkAuth(13)): ?>
    <li class="">
    <?php if(Request::segment(2) == 'imagecategory' || Request::segment(2) == 'imagegallery'): ?>
            <a class="accordion-toggle menu-open">
            <?php else: ?>
             <a class="accordion-toggle">
                     <?php endif; ?>
      <span class="fa fa-dot-circle-o text-info"></span>
      <span class="sidebar-title">  Manage Photo Gallery </span>
      <span class="caret"></span>
    </a>
    <ul class="nav sub-nav">
      <!--  <li class="<?php echo e((Request::segment(2) == 'imagecategory')?'active':''); ?>">
        <a href="<?php echo e(url('admin/imagecategory')); ?>">
          <span class="fa fa fa-arrows-h"></span>
          Gallery Album                
        </a>                
      </li>      -->          
       <li class="<?php echo e((Request::segment(2) == 'imagegallery')?'active':''); ?>">
        <a href="<?php echo e(url('admin/imagegallery')); ?>">
          <span class="fa fa fa-arrows-h"></span>
          Photos                 
        </a>                
      </li>              
      </ul>
  </li>
    <?php endif; ?>
     <?php if(checkAuth(14)): ?>
  <li class="">
     <?php if(Request::segment(2) == 'videocategory' || Request::segment(2) == 'videogallery'): ?>
        <a class="accordion-toggle menu-open">
        <?php else: ?>
         <a class="accordion-toggle">
                 <?php endif; ?>
          <span class="fa fa-dot-circle-o text-info"></span>
          <span class="sidebar-title">  Manage Video Gallery </span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
         
          <li class="<?php echo e((Request::segment(2) == 'videocategorys')?'active':''); ?>">
           <a href="<?php echo e(url('admin/videocategory')); ?>">
              <span class="fa fa fa-arrows-h"></span>
             Video Album               
           </a>                
            </li>        
               
          <li class="<?php echo e((Request::segment(2) == 'videogallery')?'active':''); ?>">
            <a href="<?php echo e(url('admin/videogallery')); ?>">
              <span class="fa fa fa-arrows-h"></span>
              Videos                 
            </a>                
          </li>              
          </ul>
      </li> 
      <?php endif; ?>

    <?php if(checkAuth(9)): ?>
    <li class="">
    <a class="accordion-toggle">
        <span class="glyphicon glyphicon-user text-info"></span>
        <span class="sidebar-title"> Manage Users </span>
        <span class="caret"></span>
    </a>
    <ul class="nav sub-nav">
        <li>
            <a href="<?php echo e(route('user.index')); ?>">
                <span class="fa fa fa-arrows-h"></span>
                Users
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('role.index')); ?>">
                <span class="fa fa fa-arrows-h"></span>
                User Roles
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('adminmenu.index')); ?>">
                <span class="fa fa fa-arrows-h"></span>
                Admin Menus
            </a>
        </li>
    </ul>
    </li>
    <?php endif; ?>

    <?php if(checkAuth(16)): ?>
    <li class="<?php echo e((Request::segment(2) == 'members-registration')?'active':''); ?>">
      <a href="<?php echo e(route('members-list')); ?>">
          <span class="fa fa-cogs text-info"></span>
          <span class="sidebar-title">Members List </span>
      </a>
  </li>
  <?php endif; ?>

   <?php if(checkAuth(12)): ?>
      <li class="<?php echo e((Request::segment(2) == 'settings')?'active':''); ?>">
        <a href="<?php echo e(route('settings.index')); ?>">
            <span class="fa fa-cogs text-info"></span>
            <span class="sidebar-title"> Settings </span>
        </a>
    </li>
    <?php endif; ?>


    <div class="sidebar-toggle-mini">
        <a href="avoid:javascript;">
            <span class="fa fa-sign-out"></span>
        </a>
    </div>
</div>

</aside>
<?php /**PATH D:\WorkingXampp\htdocs\crownem\resources\views/admin/common/sidebar.blade.php ENDPATH**/ ?>