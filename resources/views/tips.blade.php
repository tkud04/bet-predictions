<!-- Our Products Start Here-->
<div class="our-products-section sec-spacer">
			<div class="container">
                <h3 class="title-bg">Top Products</h3>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                   <?php
                    foreach($tips as $t)
                    {
                        $color = $t['type'] === 'premium' ? 'label-success' : 'label-info';
                   ?>
                   <div class="single-product text-center">
                        <div class="product-image">
                            <div class="overly"></div>
                            <a href="#"><img src="{{$t['img']}}" alt="Tip" /></a>
                        </div>
                        <div class="product-details">
                            <div class="product-tile">
                                <a href="{{$t['url']}}">{!! $t['title'] !!}</a>
                                <span class='label {{$color}} p-5 text-uppercase'>{!! $t['type'] !!}</span>
                            </div>
                            <div class="product-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Get tip</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

				</div>
			</div>
		</div>
		<!-- Our Products end Here-->