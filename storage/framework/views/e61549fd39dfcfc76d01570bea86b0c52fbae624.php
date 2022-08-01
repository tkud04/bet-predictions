	  
    <!-- Slider Section Start Here -->
		<div class="slider-section4 slider-main">
			<div id="slider-five" class="owl-carousel">
        <?php
         for($i = 0; $i < count($banners); $i++)
         {
          $active = $i == 0 ? 'active' : '';
          $b = $banners[$i];
        ?>
				<div class="item <?php echo e($active); ?>">
					<img src="<?php echo e($b['img']); ?>" alt="Slider image">
                    <div class="dsc">
					   <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="slider-text text-center">
                                        <h1 data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp"><?php echo $b['line1']; ?></h1>
                                        <h3 data-animation-in="slideInDown" data-animation-out="animate-out slideOutDown" class='banner-h3'><?php echo $b['line2']; ?></h1>
                                        <div class="btn-slider"> 
                                            <a href="<?php echo e(url($b['url'])); ?>" class="btn1" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">Read More</a>
                                            <a href="<?php echo e(url('subscribe')); ?>" class="btn2" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">Subscribe</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                
						</div>
					</div>
				</div>
        <?php
         }
        ?>
		
			</div>
		</div>
		<!-- Slider Section end Here --><?php /**PATH C:\repos\bet-predictions\resources\views/banner.blade.php ENDPATH**/ ?>