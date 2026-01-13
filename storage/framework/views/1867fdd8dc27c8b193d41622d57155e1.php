<?php if($banner): ?>
<!-- main video and image banner -->
<?php if($banner->video): ?>
<section class="bg-black-light  uk-hero-banner uk-cover-container uk-position-relative uk-flex uk-flex-bottom 
   uk-background-norepeat uk-background-cover uk-background-top-center" uk-height-viewport
    data-src="https://img.youtube.com/vi/<?php echo e($banner->video); ?>/mqdefault.jpg" uk-img
    uk-scrollspy="target: [uk-scrollspy-class], #ytbg3, video; cls: uk-animation-slide-bottom-small; delay: 50; repeat: false;">
    <!-- youtube video -->
    <div class="uk-position-relative" id="ytbg3" data-ytbg-fade-in="true" data-ytbg-mute-button="true"
        data-youtube="https://youtu.be/<?php echo e($banner->video); ?>"></div>
    <!-- end -->    
    <div class="uk-overlay-banner uk-position-cover"></div>   
</section>
<?php else: ?>
<section class="bg-black-light  uk-hero-banner uk-cover-container uk-position-relative uk-flex uk-flex-bottom 
   uk-background-norepeat uk-background-cover uk-background-top-center" uk-height-viewport
    data-src="<?php echo e(asset(env('PUBLIC_PATH').'uploads/banners/'.$banner->picture)); ?>" uk-img
    uk-scrollspy="target: [uk-scrollspy-class], #ytbg3, video; cls: uk-animation-slide-bottom-small; delay: 50; repeat: false;">    
    <div class="uk-overlay-banner uk-position-cover"></div>   
</section>
<?php endif; ?>
<!-- end main video and image banner -->
<?php endif; ?><?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/common/banner.blade.php ENDPATH**/ ?>