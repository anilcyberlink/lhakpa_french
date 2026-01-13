<div class="uk-flex uk-flex-center uk-margin-top uk-margin-bottom">
    <nav aria-label="Pagination">
        <ul class="uk-pagination" uk-margin>
            
            <?php if($data->onFirstPage()): ?>
                <li class="uk-disabled"><span uk-pagination-previous></span></li>
            <?php else: ?>
                <li><a href="<?php echo e($data->previousPageUrl()); ?>"><span uk-pagination-previous></span></a></li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $data->getUrlRange(1, $data->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($page == $data->currentPage()): ?>
                    <li class="uk-active"><span aria-current="page"><?php echo e($page); ?></span></li>
                <?php else: ?>
                    <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($data->hasMorePages()): ?>
                <li><a href="<?php echo e($data->nextPageUrl()); ?>"><span uk-pagination-next></span></a></li>
            <?php else: ?>
                <li class="uk-disabled"><span uk-pagination-next></span></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<?php /**PATH /home/lhakpa/public_html/resources/views/themes/default/user/pagination.blade.php ENDPATH**/ ?>