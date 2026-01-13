
<?php $__env->startSection('title', Request::segment(2)); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <?php if($data->post_parent == 0): ?>
        <a href="<?php echo e(route('admin.post.index', Request::segment(2))); ?>" class="btn btn-primary btn-sm">List</a>
    <?php else: ?>
        <a href="<?php echo e(route('admin.post.index', Request::segment(2))); ?>/<?php echo e($data->post_parent); ?>"
            class="btn btn-primary btn-sm">List</a>
    <?php endif; ?>
    <a href="<?php echo e(route('admin.post.index', Request::segment(2))); ?>/create" class="btn btn-primary btn-sm">Create</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" role="form" action="<?php echo e(url('admin/' . Request::segment(2) . '/' . $data->id)); ?>"
        method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="PUT" />
        <input type="hidden" name="post_type" value="<?php echo e(Request::segment(2)); ?>" />
        <input type="hidden" name="post_date" value="<?= date('Y-m-d h:i:s') ?>" />

        <div class="col-md-9">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Post</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="post_title" name="post_title" class="form-control"
                                    value="<?php echo e($data->post_title); ?>" />
                                <input type="hidden" id="uri" name="uri" class="form-control"
                                    value="<?php echo e($data->uri); ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Sub Title</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="" name="sub_title" class="form-control"
                                    value="<?php echo e($data->sub_title); ?>" />
                            </div>
                        </div>
                    </div>

                    <?php if($category->count() > 0): ?>
                        <div class="form-group">
                            <label for="inputSelect" class="col-lg-2 control-label"> Category </label>
                            <div class="col-lg-9">
                                <div class="bs-component">

                                    <select name="category" class="form-control">
                                        <option value="0"> Select Category</option>

                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->id); ?>"
                                                <?php echo e($row->id == $data->category ? 'selected' : ''); ?>> <?php echo e($row->category); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt;
                                        &gt;
                                    </div>
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
                                        <?php $__currentLoopData = $parent_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($row->id == $data->id): ?>
                                                <?php continue; ?>
                                            <?php endif; ?>

                                            <option value="<?php echo e($row->id); ?>"
                                                <?php echo e($row->id == $data->post_parent ? 'selected' : ''); ?>>
                                                <?php echo e($row->post_title); ?></option>
                                            <?php if(has_child_post($row->id)): ?>
                                                <?php $__currentLoopData = has_child_post($row->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($child_row->id); ?>"
                                                        <?php echo e($child_row->id == $data->post_parent ? 'selected' : ''); ?>> —>
                                                        <?php echo e($child_row->post_title); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea3"> Brief </label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <textarea class="form-control my-editor" id="" name="post_excerpt" rows="3"> <?php echo e($data->post_excerpt); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea2">Content</label>
                        <div class="col-lg-10">
                            <div class="bs-component">
                                <textarea class="form-control my-editor" id="editor2" name="post_content" rows="30"> <?php echo e($data->post_content); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Meta Key</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="" name="meta_keyword" class="form-control"
                                    value="<?php echo e($data->meta_keyword); ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea3"> Meta Description </label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <textarea class="form-control" id="" name="meta_description" rows="3"><?php echo e($data->meta_description); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea3"> Schema markup </label>
                        <div class="col-lg-9">

                            <div class="bs-component">
                                <textarea class="form-control" id="textArea3" name="schema_markup" rows="10"><?php echo e($data->schema_markup); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> External Link </label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="" name="external_link" class="form-control"
                                    value="<?php echo e($data->external_link); ?>" />
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
                        <div class="publice_edi">
                            Status: <span class="text-primary"><?php echo e($data->status == 1 ? 'Active' : 'InActive'); ?></span>
                        </div>
                    </div>
                    <footer>
                        <div id="publishing-action">
                            <input type="submit" class="btn btn-primary btn-sm" value="Update" />
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <div class="clearfix"></div>
                </div>

                <div class="sid_ mb10">
                    <label class="field select">
                        <select id="template" name="template">
                            <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>" <?php echo e($template == $data->template ? 'selected' : ''); ?>>
                                    <?php echo e(ucfirst($template)); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <i class="arrow"></i>
                    </label>
                </div>

                <!--   <div class="sid_ mb10">
                            <label class="field select">
                                <select id="template_child" name="template_child">
                                    <?php $__currentLoopData = $templates_child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $template_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($key); ?>" <?php echo e($template_child == $data->template_child ? 'selected' : ''); ?> ><?php echo e(ucfirst($template_child)); ?> </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <i class="arrow"></i>
                            </label>
                        </div> -->

                <div class="sid_ mb10">
                    <label class="field text"> Post Order
                        <input type="number" id="" name="post_order" class="form-control"
                            placeholder="Post Order" value="<?php echo e($data->post_order); ?>" />
                    </label>
                </div>

                <!-- <div class="sid_ mb10">
                            <label class="field text"> Homepage Order
                                <input type="number" id="" name="home_order" class="form-control"
                                       placeholder="Insert Order Here" value="<?php echo e($data->home_order); ?>"/>
                            </label>
                        </div> -->

                <div class="sid_ mb10">
                    <div class="hd_show_con">
                        <input type="checkbox" name="show_in_home" value="<?php echo e($data->show_in_home); ?>"
                            <?php echo e($data->show_in_home == 1 ? 'checked' : ''); ?> />
                        Show in home <br>
                    </div>
                </div>
                <?php if(Request::segment(2) == 'reviews'): ?>
                    <div class="sid_ mb10">
                        <h4>Rating </h4>
                        <label class="field select">
                            <select id="template" name="rating" style="font-family: 'FontAwesome';">
                                <option value="">Choose Stars</option>
                                <option value="1" <?php echo e($data->rating == 1 ? 'selected' : ''); ?>>&#xf005;</option>
                                <option value="2" <?php echo e($data->rating == 2 ? 'selected' : ''); ?>>&#xf005;&#xf005;
                                </option>
                                <option value="3" <?php echo e($data->rating == 3 ? 'selected' : ''); ?>>&#xf005;&#xf005;&#xf005;
                                </option>
                                <option value="4" <?php echo e($data->rating == 4 ? 'selected' : ''); ?>>
                                    &#xf005;&#xf005;&#xf005;&#xf005;</option>
                                <option value="5" <?php echo e($data->rating == 5 ? 'selected' : ''); ?>>
                                    &#xf005;&#xf005;&#xf005;&#xf005;&#xf005;</option>

                            </select> <i class="arrow"></i>
                        </label>
                    </div>
                <?php endif; ?>
                <?php if(Request::segment(2) == 'rooms-suites' ||
                        Request::segment(2) == 'dining' ||
                        Request::segment(2) == 'conference' ||
                        Request::segment(2) == 'health-club'): ?>
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
                                                            value="<?php echo e($row->id); ?>"
                                                            <?php echo e(in_array($row->id, $checked_features) ? 'checked' : ''); ?>>
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
                <?php /*?> ?> ?>

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
                                                        value="{{ $row->id }}"
                                                        {{ in_array($row->id, $checked_portfolio) ? 'checked' : '' }}>
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
                            @if ($data->thumbnail)
                                <span class="thumbnailid{{ $data->id }}">
                                    <a href="#{{ $data->id }}" class="delete_thumbnail">X</a>
                                    <img src="{{ asset(env('PUBLIC_PATH') . 'uploads/medium/' . $data->thumbnail) }}"
                                        width="150" />
                                    <hr>
                                </span>
                            @endif
                            <input type="file" name="thumbnail" />
                        </div>
                    </div>
                </div>

                <div class="sid_ mb10">
                    <h4> Audio </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            @if ($data->audio)
                                <span class="audioid{{ $data->id }}">
                                    <a href="#{{ $data->id }}" class="delete_audio">X</a>
                                    <audio controls>
                                        <source src="{{ asset('audio/' . $data->audio) }}" type="audio/mpeg">
                                    </audio>
                                    <hr>
                                </span>
                            @endif
                            <input type="file" name="audio" />
                        </div>
                    </div>
                </div>
                <div class="sid_ mb10">
                    <h4> Icon </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            @if ($data->icon)
                                <span class="iconid{{ $data->id }}">
                                    <a href="#{{ $data->id }}" class="delete_icon">X</a>
                                    <a href="{{ asset(env('PUBLIC_PATH') . 'uploads/large/' . $data->icon) }}"
                                        target="_blank"><img
                                            src="{{ asset(env('PUBLIC_PATH') . 'uploads/large/' . $data->icon) }}"
                                            width="150" /></a>

                                    <hr>
                                </span>
                            @endif
                            <input type="file" name="icon" /><br>

                        </div>
                    </div>
                </div>
                <?php */?>


                <div class="sid_ mb10">
                    <h4> Featured Image </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            <?php if($data->page_thumbnail): ?>
                                <span class="page_thumbnailid<?php echo e($data->id); ?>">
                                    <a href="#<?php echo e($data->id); ?>" class="delete_pagethumbnail">X</a>
                                    <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/medium/' . $data->page_thumbnail)); ?>"
                                        width="150" />
                                    <hr>
                                </span>
                            <?php endif; ?>
                            <input type="file" name="page_thumbnail" />
                            <br> ( Width: 1500px, Height:1500px maximum fix size:2MB )
                            <!--<div>  <input type="checkbox" name="project_status"-->
                            <!--       value="<?php echo e($data->project_status); ?>" <?php echo e($data->project_status == 1 ? 'checked' : ''); ?> /> Disable From Detail <br></div>-->
                        </div>
                    </div>
                </div>

                <div class="sid_ mb10">
                    <h4> Banner </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            <?php if($data->banner): ?>
                                <span class="bannerid<?php echo e($data->id); ?>">
                                    <a href="#<?php echo e($data->id); ?>" class="delete_banner">X</a>
                                    <img src="<?php echo e(asset(env('PUBLIC_PATH') . 'uploads/medium/' . $data->banner)); ?>"
                                        width="150" />
                                    <hr>
                                </span>
                            <?php endif; ?>
                            <input type="file" name="banner" /><br>( Width: 1500px, Height:500px maximum fix size:2MB
                            )
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('libraries'); ?>
    <script type="text/javascript">
        $('.delete_icon').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
                type: 'delete',
                url: "<?php echo e(url('delete_icon') . '/'); ?>" + id,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.iconid' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });
        /****************/
        $('.delete_thumbnail').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
                type: 'delete',
                url: "<?php echo e(url('delete_thumbnail') . '/'); ?>" + id,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.thumbnailid' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });
        /**************/
        $('.delete_pagethumbnail').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
                type: 'delete',
                url: "<?php echo e(url('delete_pagethumbnail') . '/'); ?>" + id,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.page_thumbnailid' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });
        /****************/
        $('.delete_banner').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
                type: 'delete',
                url: "<?php echo e(url('delete_banner') . '/'); ?>" + id,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.bannerid' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });

        //
        $(document).ready(function() {
            $('#post_title').on('keyup', function() {
                var post_title;
                post_title = $('#post_title').val();
                post_title = post_title.replace(/[^a-zA-Z0-9 ]+/g, "");
                post_title = post_title.replace(/\s+/g, "-");
                $('#uri').val(post_title);
            });
        });
        //delete audio
        $('.delete_audio').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
                type: 'delete',
                url: "<?php echo e(url('delete_audio') . '/'); ?>" + id,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.audioid' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WorkingXampp\htdocs\crownem\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>