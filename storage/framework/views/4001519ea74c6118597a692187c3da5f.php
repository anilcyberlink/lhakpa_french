<!-- HEADER START -->
<?php if($data->banner): ?>
<section class="uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover 
   uk-background-top-center" uk-parallax="media: @m; viewport: 0.6;easing: 0.5; opacity: 1,1;y: 0, 250"
    uk-height-viewport data-src="<?php echo e(asset('uploads/original/'.$data->banner)); ?>" uk-img>
    <div class="uk-overlay-innerpage uk-position-cover"></div>
    <?php else: ?>
    <section class="uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover  uk-background-top-center" uk-parallax="media: @m; viewport: 0.6;easing: 0.5; opacity: 1,1;y: 0, 250" uk-height-viewport data-src="<?php echo e(asset('themes-assets')); ?>/images/bg/crown.svg" uk-img>
    <div class="uk-overlay-innerpage uk-position-cover"></div>
    <?php endif; ?>
    <div class="uk-width-1-1"
        uk-scrollspy="target: [uk-scrollspy-class], .f-18, h1, p, a; cls: uk-animation-slide-bottom-medium; delay: 50; repeat: true;">
        <div class="uk-container uk-container-large uk-position-relative">
            <div class="inherit-position uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-width-1-1@m">
                    <h1 class="uk-h1 uk-text-center text-white"><?php echo e($data->post_type); ?>

                      <br>
                     </h1>
                  <h5 class="uk-text-center text-white">
                      <?php if(Request::segment(2)=="about-us"): ?>
                GDS Codes:
                <br>
                Amadus : KTMHCI | Sabre : 608453 | Galileo / Appollo : I3778
                <br>
                Worldspan : KTMCI  DHISCO : 46754
                <?php endif; ?>
                </h5>
                    
                    <div class="f-18 uk-margin uk-width-large uk-margin-auto uk-text-center text-white"><?php echo e($data->caption); ?></div>
                </div>
            </div>
            <div class="uk-margin-large uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-width-1-1@m">
                    <div class="uk-margin uk-text-center text-white">
                        <a class="uk-content uk-button uk-button-text text-white" href="#section" uk-scroll=""> Scroll
                            To Discover </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HEADER END --><?php /**PATH D:\xampp\htdocs\crown\resources\views/themes/default/common/innerbanner.blade.php ENDPATH**/ ?>