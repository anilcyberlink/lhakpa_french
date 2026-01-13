<?php if($paginator->hasPages()): ?>
    <div class="uk-padding-small"
        uk-scrollspy="target: [uk-scrollspy-class], li; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
        <ul class="uk-pagination uk-flex-center uk-margin-remove">
            <?php if($paginator->onFirstPage()): ?>
                <li><span uk-pagination-previous disabled style="margin-top: 5px;"></span></li>
            <?php else: ?>
                <li><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" class="prev page-numbers">Prev</a></li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li><span class="pagination-ellipsis"><span><?php echo e($element); ?></span></span></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="uk-active"><span><?php echo e($page); ?></span></li>
                        <?php else: ?>
                            <li><a href="<?php echo e($url); ?>" class="page-numbers"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($paginator->hasMorePages()): ?>
                <li> <a class="next page-numbers" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">Next</a></li>
            <?php else: ?>
                <li> <span uk-pagination-next disabled style="margin-top: 5px;"></span></li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/common/pagination.blade.php ENDPATH**/ ?>