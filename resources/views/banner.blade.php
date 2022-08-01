	  
    <!-- Slider Section Start Here -->
		<div class="slider-section4 slider-main">
			<div id="slider-five" class="owl-carousel">
        <?php
         for($i = 0; $i < count($banners); $i++)
         {
          $active = $i == 0 ? 'active' : '';
          $b = $banners[$i];
        ?>
				<div class="item {{$active}}">
					<img src="{{$b['img']}}" alt="Slider image">
                    <div class="dsc">
					   <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="slider-text text-center">
                                        <h1 data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">{!! $b['line1'] !!}</h1>
                                        <h3 data-animation-in="slideInDown" data-animation-out="animate-out slideOutDown" class='banner-h3'>{!! $b['line2'] !!}</h1>
                                        <div class="btn-slider"> 
                                            <a href="{{url($b['url'])}}" class="btn1" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">Read More</a>
                                            <a href="{{url('subscribe')}}" class="btn2" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">Subscribe</a>
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
		<!-- Slider Section end Here -->