
<?php $__env->startSection('title', Request::segment(2)); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <button type="button" class="btn btn-default btn-sm backlink"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
        Back </button>
    <a href="<?php echo e(route('admin.post.index', Request::segment(2))); ?>" class="btn btn-default btn-sm backlink"><i
            class="fa fa-list" aria-hidden="true"></i> Show List </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" role="form" action="<?php echo e(route('admin.post.store', Request::segment(2))); ?>" method="post"
        enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>


        <div class="col-md-9">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">New Post</span>
                </div>
                <div class="panel-body">
                    <input type="hidden" name="post_date" value="<?= date('Y-m-d h:i:s') ?>" />
                    <input type="hidden" name="post_type" value="<?php echo e(Request::segment(2)); ?>" />
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"><?php echo e((Request::segment(2) == 'board-of-directors' || Request::segment(2) == 'reviews') ? 'Name' : 'Title'); ?></label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="post_title" name="post_title" class="form-control"
                                    placeholder="" />
                                <input type="hidden" id="uri" name="uri" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"><?php echo e(Request::segment(2) == 'board-of-directors' ? 'Positon' : 'Sub Title'); ?></label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="" name="sub_title" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <?php if(Request::segment(2) == 'room'): ?>
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-2 control-label">Price</label>
                            <div class="col-lg-9">
                                <div class="bs-component">
                                    <input type="number" id="" placeholder="Price In NRS" name="associated_title" class="form-control" />
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    
                    <?php if(Request::segment(2) == 'others'): ?>
                        <div class="form-group">
                            <label for="inputSelect" class="col-lg-2 control-label">Select Parent</label>
                            <div class="col-lg-9">
                                <div class="bs-component">
                                    <select name="post_parent" class="form-control">
                                        <option value="0"> Choose Parent</option>
                                        <?php if($parent_post): ?>
                                            <?php $__currentLoopData = $parent_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->id); ?>"><?php echo e($row->post_title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt;
                                        &gt;
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <input type="hidden" id="" name="post_parent" class="form-control" placeholder=""
                            value="0" />
                    <?php endif; ?>
                    
                    <?php if(Request::segment(2) != 'board-of-directors'): ?>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="textArea3"><?php echo e(Request::segment(2) == 'reviews' ? 'Review' : 'Brief'); ?> </label>
                            <div class="col-lg-9">
                                <div class="bs-component">
                                    <textarea class="form-control my-editor" id="" name="post_excerpt" rows="9"></textarea>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if(Request::segment(2) != 'board-of-directors' && Request::segment(2) != 'reviews'): ?>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="textArea2">Content</label>
                            <div class="col-lg-10">
                                <div class="bs-component">
                                    <textarea class="form-control my-editor" id="" name="post_content" rows="30"></textarea>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Meta Key</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="" name="meta_keyword" class="form-control"
                                    placeholder="" />
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
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea3"> Schema markup </label>
                        <div class="col-lg-9">

                            <div class="bs-component">
                                <textarea class="form-control" id="textArea3" name="schema_markup" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="admin-form">
                <div class="sid_ mb10">
                    <div class="hd_show_con">

                    </div>
                    <footer>
                        <div id="publishing-action">
                            <input type="submit" class="btn btn-primary btn-sm" value="Publish" />
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <div class="clearfix"></div>
                </div>

                <div class="sid_ mb10">
                    <label class="field select">
                        <select id="template" name="template">
                            <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>"><?php echo e(ucfirst($template)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <i class="arrow"></i>
                    </label>
                </div>

                <!-- <div class="sid_ mb10">
                                           <label class="field select">
                                               <select id="template_child" name="template_child">
                                                   <?php $__currentLoopData = $templates_child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $template_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($key); ?>"><?php echo e(ucfirst($template_child)); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                               <i class="arrow"></i>
                                           </label>
                                        </div> -->

                <div class="sid_ mb10">
                    <label class="field text"> Post Order
                        <input type="number" id="" name="post_order" class="form-control"
                            placeholder="Insert Number Here" value="<?php echo e($post_order); ?>" />
                    </label>
                </div>

                <!-- <div class="sid_ mb10">
                                            <label class="field text"> Homepage Order
                                                <input type="number" id="" name="home_order" class="form-control"
                                                       placeholder="Insert Order Here"/>
                                            </label>
                                        </div> -->
                <?php if(Request::segment(2) != 'board-of-directors'): ?>
                    <div class="sid_ mb10">
                        <div class="hd_show_con">
                            <input type="checkbox" name="show_in_home" value="1" /> Show in home <br>

                        </div>
                    </div>
                <?php endif; ?>
                <?php if(Request::segment(2) != 'board-of-directors' && Request::segment(2) != 'reviews'): ?>
                    <div class="sid_ mb10">
                        <div class="hd_show_con">
                            <input type="checkbox" name="is_menu" value="1" /> Is Menu? <br>

                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if(Request::segment(2) == 'room' ||
                        Request::segment(2) == 'dining' ||
                        Request::segment(2) == 'meeting'): ?>
                    <div class="sid_bvijay mb10">
                        <h4> Features </h4>
                        <div class="hd_show_con">


                            <div class=" has-feedback has-search">
                                <input class="category-search1 form-control" type="text" placeholder="Search..">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                            <div class="tab-content mb15">
                                <div id="tab1" class="tab-pane active">
                                    <?php if($post_feature->count() > 0): ?>
                                        <ul class="ctgor category-list1" style="height:300px">
                                            <?php $__currentLoopData = $post_feature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="features[]"
                                                            value="<?php echo e($row->id); ?>">
                                                        <?php echo e($row->title); ?>

                                                    </label>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php /*?> ?> ?> ?> ?> ?> ?> ?>
                <div class="sid_bvijay mb10">
                    <h4> Logos </h4>
                    <div class="hd_show_con">


                        <div class=" has-feedback has-search">
                            <input class="category-search form-control" type="text" placeholder="Search..">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                        <div class="tab-content mb15">
                            <div id="tab1" class="tab-pane active">
                                @if ($post_portfolio->count() > 0)
                                    <ul class="ctgor category-list">
                                        @foreach ($post_portfolio as $row)
                                            <li>
                                                <label>
                                                    <input type="checkbox" name="portfolios[]"
                                                        value="{{ $row->id }}">
                                                    {{ $row->title }}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sid_ mb10">
                    <h4> Thumbnail </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            <input type="file" name="thumbnail" />
                        </div>
                    </div>
                </div>

                <div class="sid_ mb10">
                    <h4> Audio </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            <input type="file" name="audio" />
                        </div>
                    </div>
                </div>
                <div class="sid_ mb10">
                    <h4> Icon </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            <input type="file" name="icon" />
                        </div><br>
                        <div>
                        </div>
                    </div>

                </div>
                <?php */?>

                <div class="sid_ mb10">
                    <h4> Thumbnail Image </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            <input type="file" name="page_thumbnail" />
                        </div><br>( Width: 1500px, Height:1500px maximum fix size:2MB )
                        <!-- <div> <input type="checkbox" name="project_status" value="0"/> Disable From Detail <br></div> -->
                    </div>
                </div>
                <?php if(Request::segment(2) != 'board-of-directors' && Request::segment(2) != 'reviews'): ?>
                    <div class="sid_ mb10">
                        <h4> Banner </h4>
                        <div class="hd_show_con">
                            <div id="xedit-demo">
                                <input type="file" name="banner" /><br>( Width: 1500px, Height:500px maximum fix size:2MB
                                )
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(Request::segment(2) == 'dining' || Request::segment(2) == 'meeting'): ?>
                    <div class="sid_ mb10">
                        <label class="field text"> Opening Hours
                            <input type="text" id="" name="opening_hours" class="form-control"
                                placeholder="Opening Hours" />
                        </label>
                    </div>
                    <div class="sid_ mb10">
                        <label class="field text"> Occupancy
                            <input type="text" id="" name="occupancy" class="form-control"
                                placeholder="Occupancy" />
                        </label>
                    </div>
                    <div class="sid_ mb10">
                        <label class="field text"> Smoking 
                            <input type="text" id="" name="smoking" class="form-control"
                                placeholder="Smoking " />
                        </label>
                    </div>
                    <div class="sid_ mb10">
                        <label class="field text"> Wifi  
                            <input type="text" id="" name="wifi" class="form-control"
                                placeholder="Wifi" />
                        </label>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#post_title').on('keyup', function() {
                var post_title;
                post_title = $('#post_title').val();
                post_title = post_title.replace(/[^a-zA-Z0-9 ]+/g, "");
                post_title = post_title.replace(/\s+/g, "-");
                $('#uri').val(post_title);
            });
        });

        // Go back link
        $('.backlink').click(function() {
            var url = '<?= url()->previous() ?>';
            window.location = url;
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/admin/posts/create.blade.php ENDPATH**/ ?>