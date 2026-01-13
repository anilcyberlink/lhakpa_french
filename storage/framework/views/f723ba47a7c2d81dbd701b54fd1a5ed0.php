
<?php $__env->startSection('title','Post Category'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(url('admin/associated/'.Request::segment(3).'/'.Request::segment(4))); ?>" class="btn btn-primary btn-sm">List</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" role="form"
          action="<?php echo e(url('admin/associated/'.Request::segment(3).'/'.Request::segment(4).'/store')); ?>" method="post"
          enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="col-md-12">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Create Associated Post</span>
                </div>
                <div class="panel-body">
                    <input type="hidden" name="post_id" value="<?php echo e(Request::segment(4)); ?>"/>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label"><?php echo e((Request::segment(4) == 119) ? 'Name' : 'Title'); ?></label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="title" name="title" class="form-control"/>
                                <input type="hidden" id="uri" name="uri" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label"><?php echo e(( Request::segment(4) == 119) ? 'Position' : 'Sub Title'); ?></label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                 <input type="text" id="" name="sub_title" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <?php if(Request::segment(4) != 119): ?>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-2 control-label">Brief</label>
                            <div class="col-lg-8">
                                <div class="bs-component">
                                    <div class="bs-component">
                                        <textarea class="form-control" id="" name="brief" rows="3"
                                                  autocomplete="off"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"><?php echo e((Request::segment(4) == 119) ? 'Message' : 'Content'); ?></label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <div class="bs-component">
                                    <textarea class="form-control my-editor" id="" name="content" rows="15" autocomplete="off"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php /*?>
                  
                    
                   
                      @if(Request::segment(3)=='core-companies')
                    <div class="form-group">
                        <label for="inputSelect" class="col-lg-2 control-label"> Category </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <select name="category" class="form-control">
                                    <option disabled selected> Select Category</option>
                                    <option value="1">Slider</option>
                                    <option value="2">Lightbox</option>
                                </select>
                                <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt;
                                    &gt;
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">External Link</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="ordering" name="phone" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="ordering" name="email" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Facebook Link</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="ordering" name="facebook_link" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Twitter Link</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="ordering" name="twitter_link" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">LinkedIn Link</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="ordering" name="linked_in_link" class="form-control"/>
                            </div>
                        </div>
                    </div>
                <?php */?>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Ordering</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="number" id="ordering" name="ordering" class="form-control" value="<?php echo e($ordering); ?>"/>
                            </div>
                       </div>
                    </div>
                    <?php if(Request::segment(4) != 119): ?>
                        <div class="form-group">
                            <label for="title" class="col-lg-2 control-label" style="padding-top: 0px;">Show in home</label>
                            <div class="col-lg-8">
                                <div class="bs-component">
                                    <input type="checkbox" name="show_in_home" value="1" />
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(Request::segment(4) != 119): ?>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-2 control-label">Banner</label>
                            <div class="col-lg-8">
                                <div class="bs-component">
                                    <div class="bs-component">
                                        <div id="xedit-demo">
                                            <input type="file" name="banner"/><br>( Width: 1500px, Height:1500px maximum fix size:2MB )
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"><?php echo e(( Request::segment(4) == 119) ? 'Profile' : 'Thumbnail'); ?></label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <div class="bs-component">
                                    <div id="xedit-demo">
                                        <input type="file" name="thumbnail"/><br>( Width: 1500px, Height:1500px maximum fix size:2MB )
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for=""> </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="submit" class="btn btn-primary btn-lg" value="Submit"/>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-4"></div>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#title').on('keyup', function () {
                var title;
                title = $('#title').val();
                title = title.replace(/[^a-zA-Z0-9 ]+/g, "");
                title = title.replace(/\s+/g, "-");
                $('#uri').val(title);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ukeshcom/demo1/resources/views/admin/associated-post/create.blade.php ENDPATH**/ ?>