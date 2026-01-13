
<?php $__env->startSection('title', Request::segment(2)); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(url('admin/trips-tag')); ?>" class="btn btn-default btn-sm backlink">
        <i class="fa fa-list" aria-hidden="true"></i> Show List 
    </a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" role="form" action="<?php echo e(url('admin/trips-tag')); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>    

        <div class="col-md-9">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title"> New Trip Tags </span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Tag Name</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="title" name="title" class="form-control" placeholder="Tag Name" value="<?php echo e(old('title')); ?>" required />
                                <input type="hidden" id="uri" name="uri" value="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                  <span class="panel-title"> Map and Meta data </span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Meta Keyword</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="" name="meta_keyword" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea3"> Meta Description </label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <textarea class="form-control" id="textArea3" name="meta_description" rows="3"></textarea>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>

        <div class="col-md-3">
            <div class="admin-form">
                <div class="sid_bvijay mb10">                   
                    <div class="hd_show_con">
                        <div class="publice_edi">
                        Action
                        </div>                    
                    </div>
                    <footer>                        
                        <div id="publishing-action">
                            <input type="submit" class="btn btn-primary btn-sm" value="Publish" />
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <div class="clearfix"></div>
                </div>
            </div>         
        </div>

        
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lhakpa/public_html/resources/views/admin/trips-tag/create.blade.php ENDPATH**/ ?>