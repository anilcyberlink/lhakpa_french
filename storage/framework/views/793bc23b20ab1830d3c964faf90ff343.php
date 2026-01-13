
<?php $__env->startSection('title','Banner'); ?>
<?php $__env->startSection('breadcrumb'); ?>
     <a href="admin/banner" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form class="form-horizontal" role="form" action="<?php echo e(url('admin/banner', $data->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

<input type="hidden" name="_method" value="PUT" />
<div class="col-md-12">
            <!-- Input Fields -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Edit Banner</span>
              </div>
              <div class="panel-body">

                  <div class="form-group">
                    <label for="inputStandard" class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" id="inputStandard" name="title" class="form-control" placeholder="" value="<?php echo e($data->title); ?>" />
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputStandard" class="col-lg-2 control-label">Caption</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" id="inputStandard" name="caption" class="form-control" placeholder="" value="<?php echo e($data->caption); ?>" />
                      </div>
                    </div>
                  </div>

                 
                  <!--<div class="form-group">-->
                  <!--  <label class="col-lg-2 control-label" for="textArea2">Content</label>-->
                  <!--  <div class="col-lg-6">-->
                  <!--    <div class="bs-component">-->
                  <!--      <textarea class="form-control my-editor" name="brief" rows="9"><?php echo e($data->content); ?></textarea>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->

               <div class="form-group">
                    <label class="col-lg-2 control-label" for="banner">Picture</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="file" class="form-control" name="picture"/>
                      </div> <br />
                       ( Width: 1900px, Height:560px all time fix size )
                    </div>

                  </div>

                  <?php if($data->picture != '' OR $data->picture != null): ?>
                  <div class="form-group">
                    <label class="col-lg-2 control-label" for="banner"></label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <img src="<?php echo e(url(env('PUBLIC_PATH').'uploads/banners/' . $data->picture )); ?>" width="70%" />
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>

                   <div class="form-group">
                    <label class="col-lg-2 control-label" for="link">Link Title</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" class="form-control" name="link_title" value="<?php echo e($data->link_title); ?>" placeholder="Link Title" /> <br />
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-lg-2 control-label" for="link">Link</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" class="form-control" name="link" value="<?php echo e($data->link); ?>" placeholder="http://www.google.com" /> <br />
                          <i><small> Example: https://www.google.com </small></i>
                      </div>

                    </div>
                  </div>


                   <div class="form-group">
                    <label class="col-lg-2 control-label" for="videolink">Video</label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="text" class="form-control" name="video" value="<?php echo e($data->video); ?>" /> <br />
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label" for=""></label>
                    <div class="col-lg-6">
                      <div class="bs-component">
                        <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit" />
                      </div>
                    </div>
                  </div>

              </div>
            </div>
          </div>


          </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/crowneimperial/public_html/resources/views/admin/banner/edit.blade.php ENDPATH**/ ?>