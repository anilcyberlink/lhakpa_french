<?php
    $notificationTypes = ['success', 'error', 'info', 'warning'];
?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php $__currentLoopData = $notificationTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(Session($type) === true): ?>
        <?php if(is_array(Session::get('message'))): ?>
            <?php $__currentLoopData = Session::get('message'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <script>
                    toastr.<?php echo e($type); ?>("<?php echo e($item); ?>");
                </script>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <script>
                console.log('test')
                toastr.<?php echo e($type); ?>("<?php echo e(Session('message')); ?>");
            </script>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
    function ajax_response(response) {
        const notificationTypes = ['success', 'error', 'info', 'warning'];

        notificationTypes.forEach(function(type) {
            if (response[type]) {
                if (Array.isArray(response.message)) {
                    response.message.forEach(function(msg) {
                        toastr[type](msg);
                    });
                } else {
                    toastr[type](response.message);
                }
            }
        });
    }
</script><?php /**PATH /home/ukeshcom/demo1/resources/views/themes/default/common/response.blade.php ENDPATH**/ ?>