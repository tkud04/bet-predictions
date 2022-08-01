 <!-- Testimonials Sections Start Here-->
 <div class="testimonial-section pb-100">
            <div class="container">
                <h3 class="title-bg">Testimonials</h3>
                <div class="row">
                    <div class="col-md-12">
                            <div id="testimonial-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-autoplay-timeout="6000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
                            
                            <?php
                              foreach($testimonials as $t)
                              {
                                $r = $t['rating'];
                            ?>
                            <div class="testimonial">
                                <div class="testimonial-profile">
                                    <a href="#"><img src="images/avatar.jpg" alt="tom"></a>
                                </div>
                                <div class="testimonial-content">
                                    <h3 class="testimonial-title">{{$t['name']}}</h3>
                                    <span class="testimonial-post">{{$t['location']}}</span>
                                    <div class="client-rating">
                                        @for($i = 0; $i < $r; $i++)
                                        <i class="fa fa-star" aria-hidden="true"></i>  
                                        @endfor
                                        
                                        @if($r < 5)
                                        @for($i = 0; $i < 5 - $r; $i++)
                                         <i class="fa fa-star-o" aria-hidden="true"></i> 
                                        @endfor
                                        @endif
                                    </div>
                                    <p class="testimonial-description">
                                       {{$t['comment']}}
                                    </p>
                                </div>
                            </div>
                           <?php
                              }
                           ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Sections End Here-->