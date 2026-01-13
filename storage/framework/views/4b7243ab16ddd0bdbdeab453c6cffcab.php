
<?php $__env->startSection('title', 'Post Category'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <?php if(Request::segment(3)): ?>
        <a href="<?php echo e(url('admin/associated/' . Request::segment(3) . '/' . $data->post_id)); ?>" class="btn btn-primary btn-sm">Go Back</a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" action="<?php echo e(url('admin/associated/' . Request::segment(3) . '/' . Request::segment(4))); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="_method" value="PUT" />
    
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">Edit Associated Post</span>
            </div>
            <div class="panel-body">
                <input type="hidden" name="post_id" value="<?php echo e(Request::segment(4)); ?>" />
                
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-8">
                        <input type="text" id="title" name="title" class="form-control" value="<?php echo e($data->title); ?>" />
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="sub_title" class="col-lg-2 control-label">Sub Title</label>
                    <div class="col-lg-8">
                        <input type="text" id="sub_title" name="sub_title" class="form-control" value="<?php echo e($data->sub_title); ?>" />
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="brief" class="col-lg-2 control-label">Brief</label>
                    <div class="col-lg-8">
                        <textarea class="form-control" name="brief" rows="3"><?php echo e($data->brief); ?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="content" class="col-lg-2 control-label">Content</label>
                    <div class="col-lg-8">
                        <textarea class="form-control my-editor" id="editor2" name="content" rows="30"><?php echo e($data->content); ?></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="ordering" class="col-lg-2 control-label">Ordering</label>
                    <div class="col-lg-8">
                        <input type="text" id="ordering" name="ordering" class="form-control" value="<?php echo e($data->ordering); ?>" />
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-2 control-label">Show in home</label>
                    <div class="col-lg-8">
                        <input type="checkbox" name="show_in_home" value="1" <?php echo e($data->show_in_home == 1 ? 'checked' : ''); ?> />
                    </div>
                </div>

                <div class="form-group">
                    <label for="banner" class="col-lg-2 control-label">Banner</label>
                    <div class="col-lg-8">
                        <?php if($data->banner): ?>
                            <div class="id<?php echo e($data->id); ?>">
                                <a href="#<?php echo e($data->id); ?>" class="imagedelete"></a>
                                <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/medium/' . $data->banner)); ?>" width="150" />
                                <hr>
                            </div>
                        <?php endif; ?>
                        <input type="file" name="banner" /><br>( Width: 1500px, Height:1500px maximum fix size:2MB )
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="thumbnail" class="col-lg-2 control-label">Thumbnail</label>
                    <div class="col-lg-8">
                        <?php if($data->thumbnail): ?>
                            <div class="id<?php echo e($data->id); ?>">
                                <a href="#<?php echo e($data->id); ?>" class="imagedelete"></a>
                                <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/medium/' . $data->thumbnail)); ?>" width="150" />
                                <hr>
                            </div>
                        <?php endif; ?>
                        <input type="file" name="thumbnail" /><br>( Width: 1500px, Height:1500px maximum fix size:2MB )
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-8">
                        <input type="submit" class="btn btn-primary btn-lg" value="Submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/admin/associated-post/edit.blade.php ENDPATH**/ ?>