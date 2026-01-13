
<?php $__env->startSection('title', $data->post_type); ?>
<?php $__env->startSection('meta_keyword', $data->meta_keyword); ?>
<?php $__env->startSection('meta_description', $data->meta_description); ?>
<?php $__env->startSection('thumbnail', $data->banner); ?>
<?php $__env->startSection('content'); ?>
    <!-- banner section start -->
        <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center uk-background-fixed" uk-height-viewport data-src="<?php echo e($data->banner ? asset('uploads/original/' . $data->banner) : ''); ?>" alt="<?php echo e($data->post_type); ?>" uk-img>
            <div class="uk-overlay-banner uk-position-cover"></div>
            <div class="uk-container uk-width-1-1  uk-position-relative">
                <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse uk-text-center" uk-grid>
                    <div class="uk-width-1-2@m">
                        <ul class="uk-breadcrumb center-underline" uk-scrollspy="cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                            <li><a href="<?php echo e(url('/')); ?>" class="uk-white">Home</a></li>
                            <li><span class="uk-primary"><?php echo e($data->post_type); ?></span></li>
                        </ul>
                        <div class="uk-banner-font" uk-scrollspy="target: h1,p,a; cls:uk-animation-slide-top-small; delay: 100; repeat: false;">
                            <h1 class="uk-white"><?php echo e($data->post_type); ?></h1>
                            <?php if($data->caption): ?>
                                <p class="uk-white uk-text-center"><?php echo e($data->caption); ?></p>
                            <?php endif; ?>
                            <a class="uk-content uk-btn uk-button-text uk-white f-500" href="#section" uk-scroll=""> Scroll To Discover <span uk-icon="icon:arrow-right; ratio: 1.5"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- banner section end -->


    <!-- about another hotel start -->
    <section class="uk-section light-bg" id="section">
        <div class="uk-container uk-margin-bottom">
            <div uk-grid>
                <div class="uk-width-1-3@m uk-flex uk-flex-middle">
                    <div href="" class="uk-media-380">
                        <img src="<?php echo e($data->thumbnail ? asset('uploads/original/' . $data->thumbnail) : asset('themes-assets/img/default.png')); ?>" alt="<?php echo e($data->post_type); ?>">
                    </div>
                    <div class="shadow4"></div>
                </div>
                <div class="uk-width-2-3@m uk-flex uk-flex-middle">
                    <div class="uk-banner-font">
                        <h2 class="uk-primary uk-margin-remove"><?php echo e($data->uid); ?></h2>
                        <?php echo $data->content; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about another hotel end -->

    <!-- team section start -->
    <?php if($posts->count()>0 && $posts[0]): ?>
        <section class="uk-section">
            <div class="uk-container">
                <div class="uk-banner-font uk-text-center">
                    <h2 class="uk-primary center-underline"><?php echo e($posts[0]->post_title); ?></h2>
                </div>
                <ul class=" uk-child-width-1-4@m uk-child-width-1-2 uk-grid-medium uk-grid-match" uk-grid>
                    <!--  -->
                    <?php if(associated_posts($posts[0]->id)->count() > 0 ): ?>
                        <?php $__currentLoopData = associated_posts($posts[0]->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="uk-margin-top">
                                <div class=" uk-text-center uk-card uk-card-default uk-padding light-bg uk-flex uk-flex-column uk-flex-center uk-flex-middle ">
                                    <h1 class="uk-margin-remove uk-primary"><?php echo e($loop->iteration < 10 ? '0'. $loop->iteration : $loop->iteration); ?></h1>
                                    <h3 class="uk-margin-remove"><?php echo e($row->title); ?></h3>
                                    <p class="uk-text-center"><?php echo e($row->brief); ?></p>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </section>
    <?php endif; ?>
    <!-- team section end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/posttypeTemplate-services.blade.php ENDPATH**/ ?>