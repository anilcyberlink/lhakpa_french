
<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<!-- Dashboard Tiles -->
<div class="row mb10">
          <div class="col-sm-6 col-md-3">
            <div class="panel bg-alert light of-h mb10">
              <div class="pn pl20 p5">
                <div class="icon-bg">
                  <i class="fa fa-file-o"></i>
                </div>
                <h2 class="mt15 lh15">
                  <b><?php echo e($total_posts); ?></b>
                </h2>
                <h5 class="text-muted">Total Posts</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="panel bg-info light of-h mb10">
              <div class="pn pl20 p5">
                <div class="icon-bg">
                  <i class="fa fa-circle-o"></i>
                </div>
                <h2 class="mt15 lh15">
                  <b><?php echo e($total_category); ?></b>
                </h2>
                <h5 class="text-muted">Total Post Categories</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="panel bg-danger light of-h mb10">
              <div class="pn pl20 p5">
                <div class="icon-bg">
                  <i class="fa fa-bar-envelope"></i>
                </div>
                <h2 class="mt15 lh15">
                  <b><?php echo e($num_of_inquiries); ?></b>
                </h2>
                <h5 class="text-muted">Number of Inquiries</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="panel bg-warning light of-h mb10">
              <div class="pn pl20 p5">
                <div class="icon-bg">
                  <i class="fa fa-bar-chart-o"></i>
                </div>
                <h2 class="mt15 lh15">
                  <b><?php echo e($post_visiters); ?></b>
                </h2>
                <h5 class="text-muted">Post Visitors</h5>
              </div>
            </div>
          </div>
        </div>

      

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>