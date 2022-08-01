<!-- Upcoming Match Section Start Here-->
<div class="upcoming-section">
			<div class="container">
                <h2>Upcoming Match</h2>
                <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
                    <?php
                      foreach($matches as $m)
                      {
                    ?>
                    <div class="item">
                        <div class="col-md-4 col-sm-4 col-xs-12 first">
                            <img src="images/upcoming/home.png" alt="">
                            <h4><?php echo e($m['home']); ?></h4>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <span class="date"><?php echo e($m['date']); ?></span>
                            <span class="vs">VS</span>
                            <span><?php echo e($m['location']); ?></span>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 last">
                            <img src="images/upcoming/away.png" alt="">
                            <h4><?php echo e($m['away']); ?></h4>
                        </div>
                    </div>
                    <?php
                      }
                    ?>
				</div>
			</div>
		</div>
		<!-- Upcoming Match Section end Here--><?php /**PATH C:\repos\bet-predictions\resources\views/upcoming-matches.blade.php ENDPATH**/ ?>