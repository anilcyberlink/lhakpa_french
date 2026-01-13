<div class="primary-bg uk-section">
    <div class="uk-margin-xlarge uk-container primary-bg">
        <div class="uk-grid-expand uk-grid-large uk-grid" uk-grid="">
            <div class="uk-grid-item-match uk-flex-middle uk-light uk-width-1-2@m ">
                <div class="uk-panel uk-width-1-1" uk-scrollspy="target: h2; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <h2 class="uk-width-xlarge uk-padding-remove"><?php echo e($setting->welcome_text); ?></h2>
                </div>
            </div>
            <div class="uk-grid-item-match uk-flex-middle uk-light uk-width-1-2@m">
                <div class="uk-panel uk-width-1-1">
                    <div class="uk-width-xlarge">
                        <div class="uk-grid-medium" uk-grid uk-scrollspy="target: a; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                            <?php if($setting->facebook_link): ?>
                                <div>
                                    <a href="<?php echo e($setting->facebook_link); ?>" class="uk-social-icon-footer"> <i class="fa fa-facebook"></i> </a>
                                </div>
                            <?php endif; ?>
                            <?php if($setting->instagram_link): ?>
                                <div>
                                    <a href="<?php echo e($setting->instagram_link); ?>" class="uk-social-icon-footer"> <i class="fa fa-instagram"></i> </a>
                                </div>
                            <?php endif; ?>
                            <?php if($setting->twitter_link ): ?>
                                <div>
                                    <a href="<?php echo e($setting->twitter_link); ?>" class="uk-social-icon-footer"> <i class="fa fa-twitter"></i> </a>
                                </div>
                            <?php endif; ?>
                            <?php if($setting->youtube_link): ?>
                                <div>
                                    <a href="<?php echo e($setting->youtube_link); ?>" class="uk-social-icon-footer"> <i class="fa fa-youtube"></i> </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class=" grey-bg  grey-bg uk-background-norepeat uk-background-cover uk-background-center-center " data-src="<?php echo e(asset('themes-assets/img/pattern.png')); ?>" uk-img>
        <div class="uk-grid-collapse" uk-grid>
            <div class="uk-grid-item-match uk-width-1-1 uk-width-1-4@m" uk-scrollspy="target: img; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                <div class="uk-container uk-margin-large-top uk-flex uk-flex-center">
                    <img src="<?php echo e(asset('themes-assets/img/logo.png')); ?>" alt="" style="height:130px;">
                </div>
            </div>
            <?php if($f_navigations->count() > 0): ?>
                <?php
                    $totalItems = count($f_navigations);
                    $firstNavChunkSize = ceil($totalItems / 2);
                    $firstNavItems = $f_navigations->slice(0, $firstNavChunkSize);
                    $secondNavItems = $f_navigations->slice($firstNavChunkSize);
                ?>

                <div class="uk-grid-item-match uk-width-1-1 uk-width-1-4@m" uk-scrollspy="target: li; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <?php if($firstNavItems->count() > 0): ?>
                        <div class="bg-black uk-tile">
                            <ul class="uk-list uk-list-large uk-width-medium@m uk-margin-auto uk-align-left@m uk-align-center@s">
                                <?php $__currentLoopData = $firstNavItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('page/' . posttype_url($row->uri))); ?>"><?php echo e($row->post_type); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="uk-grid-item-match uk-width-1-1 uk-width-1-4@m" uk-scrollspy="target: li; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <?php if($secondNavItems->count() > 0 ): ?>
                        <div class="bg-black uk-tile">
                            <ul class="uk-list uk-list-large uk-width-medium@m uk-margin-auto">
                                <?php $__currentLoopData = $secondNavItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(url('page/' . posttype_url($row->uri))); ?>"><?php echo e($row->post_type); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="uk-grid-item-match uk-width-1-1 uk-width-1-4@m" uk-scrollspy="target: li; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                <div class="bg-black uk-tile">
                    <ul class="uk-list uk-list-large uk-width-medium@m uk-margin-auto">
                        <?php if($setting->location1): ?>
                            <li>
                                <a target="_blank" href="">
                                    <div class="uk-flex uk-flex-middle">
                                        <div><span class="uk-margin-small-right" uk-icon="icon: location; ratio:1;"></span></div>
                                        <div><?php echo e($setting->location1); ?></div>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if($setting->email_primary): ?>
                            <li>
                                <a href="<?php echo e($setting->email_primary); ?>;">
                                    <div class="uk-flex uk-flex-middle">
                                        <div><span class="uk-margin-small-right" uk-icon="icon: mail; ratio:1;"></span></div>
                                        <div><?php echo e($setting->email_primary); ?></div>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if($setting->phone): ?>
                            <li>
                                <a href="tel:<?php echo e($setting->phone); ?>">
                                    <div class="uk-flex uk-flex-middle">
                                        <div><span class="uk-margin-small-right" uk-icon="icon: receiver; ratio:1;"></span></div>
                                        <div> <?php echo e($setting->phone); ?></div>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if($setting->phone2): ?>
                            <li>
                                <a href="tel:<?php echo e($setting->phone2); ?>">
                                    <div class="uk-flex uk-flex-middle">
                                        <div><span class="uk-margin-small-right" uk-icon="icon: phone; ratio:1;"></span></div>
                                        <div><?php echo e($setting->phone2); ?></div>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-bottom-footer primary-bg">
            <div class="uk-container">
                <div class="uk-flex-middle" uk-grid uk-scrollspy="target: li; cls: uk-animation-slide-top-small; delay: 100; repeat: false;">
                    <div class="uk-width-expand@m">
                        <ul class="uk-grid uk-text-small" uk-grid>
                            <li><?php echo e($setting->copyright_text); ?></li>
                        </ul>
                    </div>
                    <div class="uk-width-auto@m uk-margin-remove">
                        <ul class="uk-grid uk-text-small" uk-grid>
                            <li> Website by <a href="https://cyberlink.com.np/">Cyberlink</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="<?php echo e(asset('themes-assets/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('themes-assets/js/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes-assets/js/main.js')); ?>"></script>
</html><?php /**PATH D:\xampp\htdocs\crown\resources\views/themes/default/common/footer.blade.php ENDPATH**/ ?>