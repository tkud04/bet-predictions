<?php
$void = "javascript:void(0)";
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> | DGS Couriers Worldwide</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" /><!-- Owl Carousal -->	
    <link rel="stylesheet" href="css/icons.css" type="text/css" /><!-- Font Awesome -->
    <link rel="stylesheet" href="css/select2.min.css" type="text/css" /><!-- Select2 -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" /><!-- Scroll Bar -->
    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->		
    <link rel="stylesheet" href="css/colors/color.css" type="text/css" /><!-- Color -->	
    <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css"><!-- Layer Slider -->
    <link rel="stylesheet" href="css/custom.css?ver=<?php echo e(rand(12454494,2237347438)); ?>" type="text/css"><!-- Custom style -->

    <!--SweetAlert CSS--> 
    <link href="lib/sweet-alert/sweetalert2.css" rel="stylesheet">

    <!--Datatables CSS--> 
    <link href="lib/datatables/datatables.min.css" rel="stylesheet">

</head>

<body itemscope="">
    <div class="theme-layout">
        <header class="fancy-header scrollup stick">
            <div class="top-sec">
                <div class="top-bar">
                    <div class="container">
                        <span class="cargo-time"><i class="fa fa-clock-o"></i>Working Time : 08:00AM - 9:00PM</span>
                        <div class="connect-us">
                            <ul class="social-btn">
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-reddit"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="extra-links">
                            <a itemprop="url" href="#" title="">Support</a>   /  
                             <?php if($user == null): ?>
                               <a itemprop="url" href="#" title="" class="popup1">Sign In</a>
                             <?php else: ?>
                             &nbsp;Hi <?php echo e($user->fname); ?>, <a itemprop="url" href="<?php echo e(url('dashboard')); ?>" title="" class="">Dashboard</a> | <a itemprop="url" href="<?php echo e(url('bye')); ?>" title="" class="">Sign out</a>
                             <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div><!-- Top Sec -->
            <div class="logo-menu-sec">
                <div class="logo-menu">
                    <div class="logo">
                        <a itemprop="url" href="<?php echo e(url('/')); ?>" title=""><img itemprop="image" src="images/resource/logo.png" class="logooo" alt="" /></a>
                    </div>
                    <div class="quick-contact">
                        <ul>
                            <li>
                                <img src="images/resource/phone.png" alt="" />
                                <span>954-462-1006</span>
                                <p>London's Office</p>
                            </li>
                            <li>
                                <img src="images/resource/sms.png" alt="" />
                                <span>example @ gmail.com</span>
                                <p>Have Any Question?</p>
                            </li>
                            <li>
                                <a href="#" title="" itemprop="url" class="theme-btn popup2">TRACK A SHIPMENT</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="menu-curve">
                    <ul>
                      <li><a itemprop="url" href="<?php echo e(url('/')); ?>" title="">Home</a></li>
                      <li class="menu-item-has-children"><a itemprop="url" href="#" title="">Know More</a>
                            <ul>
                                <li><a itemprop="url" href="<?php echo e(url('about')); ?>" title="">About Us</a></li>
                                <li><a itemprop="url" href="<?php echo e(url('why-us')); ?>" title="">What Makes Us Different</a></li>
                            </ul>
                      </li>
                      <li><a itemprop="url" href="<?php echo e(url('contact')); ?>" title="">Contact Us</a></li>
                    </ul>
                </nav>
            </div><!-- Logo Menu Sec -->
        </header>

        <div class="responsive-header">
            <span class="top-sec-btn"><i class="fa fa-angle-double-down"></i></span>
            <div class="responsive-top-sec">
                <div class="responsive-top-bar top-bar">
                    <div class="container">
                        <span class="cargo-time">Opening Time :<i>08:00AM - 9:00PM</i></span>
                        <div class="connect-us">
                            <ul class="social-btn">
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Responsive Top Bar -->
                <div class="responsive-quick-contact">
                    <div class="container">
                        <div class="quick-contact">
                            <ul>
                                <li>
                                    <img src="images/resource/phone.png" alt="" />
                                    <span>954-462-1006</span>
                                    <p>London's Office</p>
                                </li>
                                <li>
                                    <img src="images/resource/sms.png" alt="" />
                                    <span>example @ gmail.com</span>
                                    <p>Have Any Question?</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Responsive Quick Contact -->
            </div>
            <div class="responsive-nav">
                <div class="container">
                    <div class="responsive-logo">
                        <div class="logo">
                            <a itemprop="url" href="<?php echo e(url('/')); ?>" title=""><img itemprop="image" src="images/resource/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <span class="responsive-btn"><i class="fa fa-list"></i></span>
                    <div class="responsive-menu">
                        <span class="close-btn"><i class="fa fa-close"></i></span>
                        <ul class="responsive-popup-btns">
                            <li><i class="fa fa-user"></i><a itemprop="url" href="#" title="" class="popup1">Sign In</a></li>
                            <li><i class="fa fa-paper-plane"></i><a itemprop="url" href="#" title="" class="popup2">TRACK A SHIPMENT</a></li>
                        </ul>
                        <ul>
                         <li><a itemprop="url" href="<?php echo e(url('/')); ?>" title="">Home</a></li>
                         <li class="menu-item-has-children"><a itemprop="url" href="#" title=""></a>
                            <ul>
                                <li><a itemprop="url" href="<?php echo e(url('about')); ?>" title="">About Us</a></li>
                                <li><a itemprop="url" href="<?php echo e(url('why-us')); ?>" title="">What Makes Us Different</a></li>
                            </ul>
                         </li>
                        
                         <li><a itemprop="url" href="<?php echo e(url('contact')); ?>" title="">Contact Us</a></li>
                       </ul>
                    </div><!-- Responsive Menu -->
                </div>
            </div>
        </div><!--Responsive header-->

        <?php if($user == null): ?>
        <div id="signup-popup">
            <div class="region2"  id="signup">
                <div class="modal-dialog1">
                    <div class="modal-content1">
                        <div class="modal-body1">
                            <div class="signup-form">
                                <button type="submit"><img src="images/close1.png" alt="" /></button>
                                <div class="row">
                                    <div class="col-md-12" id="signin-div">
                                        <div class="sign-in banner-detail1">
                                            <div class="heading2">
                                                <span>DGS Couriers</span>
                                                <h3>Sign In Now</h3>
                                            </div>
                                            <p>Acess your account (staff and admin)</p>
                                            <form id="login-form" method="post" action="<?php echo e(url('login')); ?>">
                                                <?php echo csrf_field(); ?>

                                                <label>
                                                    <i class="fa fa-user"></i>
                                                    <input type="text" id="login-email" name="email" class="text-field" placeholder="Email address">
                                                </label>
                                                <label>
                                                    <i class="fa fa-anchor"></i>
                                                    <input type="password" id="login-password" name="password" class="text-field" placeholder="Password">
                                                </label>
                                                <div class="terms-services">
                                                    <span>
                                                        <input tabindex="23" type="checkbox" id="field15" checked />
                                                        <label for="field15">Remember My Password</label>
                                                    </span>
                                                </div>
                                                
                                                <ul>
                                                    <li><a href="#" id="login-btn" title="" class="theme-btn" itemprop="url"><i class="fa fa-paper-plane"></i>SIGN IN</a></li>
                                                    <li><a href="#" title="" itemprop="url"></a></li>
                                                </ul>
                                                
                                            </form>
                                        </div><!-- Sign In -->
                                    </div>
                                    <div class="col-md-12" id="signup-div">
                                        <div class="sign-in banner-detail1 si">
                                            <div class="heading2">
                                                <span>DGS Couriers</span>
                                                <h3>Sign Up</h3>
                                            </div>
                                            <p>Create a new account (for staff and admin)</p>
                                            <form id="signup-form" method="post" action="<?php echo e(url('signup')); ?>">
                                                <?php echo csrf_field(); ?>

                                                <label>
                                                    <input type="text" class="text-field" id="signup-fname" name="fname" placeholder="First Name" required>
                                                </label>
                                                <label>
                                                    <input type="text" class="text-field" id="signup-lname" name="lname" placeholder="Last Name" required>
                                                </label>
                                                <label>
                                                    <i class="fa fa-envelope"></i>
                                                    <input type="email" class="text-field" id="signup-email" name="email" placeholder="Email Address" required>
                                                </label>
                                                <label>
                                                    <i class="fa fa-anchor"></i>
                                                    <input type="password" id="signup-password" name="password" class="text-field" placeholder="New Password:">
                                                </label>
                                                <label>
                                                    <i class="fa fa-anchor"></i>
                                                    <input type="password" id="signup-password2" name="password_confirmation" class="text-field" placeholder="Re-Type Password:">
                                                </label>
                                                <div class="terms-services">
                                                    <span>
                                                        <input tabindex="23" type="checkbox" id="field16" />
                                                        <label for="field16">I agree to the Unload <a href="#" title="">Terms of Service</a> and <a href="#" title="">Privacy Policy</a></label>
                                                    </span>
                                                </div>
                                                <a href="#" id="signup-btn" title="" class="theme-btn" itemprop="url"><i class="fa fa-paper-plane"></i>SIGN UP</a>
                                            </form>
                                        </div><!-- Sign Up -->
                                    </div>
                                </div>
                            </div><!-- Signup Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Signup Popup -->
        <?php endif; ?>

        <div id="calculate-form-popup">
            <div class="calculate-form-popup">
                <div class="modal-dialog2">
                    <div class="modal-content2">
                        <div class="modal-body2">
                            <button type="submit"><img src="images/close1.png" alt="" /></button>
                            <div class="cargo-shipment">
                                <div class="calculate-shipping">
                                    <div class="dark-title">
                                        <span><i class="fa fa-steam"></i>Track a shipment; get live status of your order</span>
                                        <h3>TRACK SHIPMENT</h3>
                                    </div>

                                    <div class="calculate-shipping-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="select-service select-box">
                                                        <input type="text" class="text-field" placeholder="Tracking number" id="track-popup-tnum"/>
                                                    </div>
                                                </div>

                                               
                                                <div class="col-md-12">
                                                    <div class="total">
                                                        <div class="cargo-total"><a id="track-popup-submit" href="javascript:void(0)" class="btn btn-primary">SUBMIT</a></div>
                                                    </div>
                                                    <p id="track-popup-tnum-error" class="text-danger text-bold">This field is required</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- Calculate Shipping -->
                            </div><!-- Cargo Shipment -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
			
					 
		  <?php echo $__env->yieldContent('slider'); ?>
		  
		  <!--------- Input errors -------------->
                    <?php if(count($errors) > 0): ?>
                          <?php echo $__env->make('input-errors', ['errors'=>$errors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php endif; ?> 
		  
		  <?php echo $__env->yieldContent('content'); ?>
		  
      <footer>
            <section class="block">
                <div class="parallax dark" data-velocity="-.2" style="background: rgba(0, 0, 0, 0) url(images/parallax2.jpg) no-repeat 50% 0;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 column">
                                    <div class="widget">
                                        <div class="about-widget">
                                            <div class="logo">
                                                <a itemprop="url" href="<?php echo e(url('/')); ?>" title=""><img itemprop="image" src="images/resource/logo-2.png" class="logoo" alt="" /></a>
                                            </div>
                                            <p itemprop="description">Vestibulum id ligula porta felis euismod sem per. Aenean eu leo quam. Pellen tesque orn are sem lacinia quam venenatis. Fusce dap ibus, tellus ac cursus commodo ut fermentu massa. mentum sit amet risus.</p>
                                            <ul class="social-btn">
                                                <li><a href="#" title="" itemprop="url"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="" itemprop="url"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" title="" itemprop="url"><i class="fa fa-facebook"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 column">
                                    <Div class="row">
                                        <div class="col-md-6 column">
                                            <div class="widget">
                                                <div class="heading2">
                                                    <span>Fast And Safe</span>
                                                    <h3>USEFUL LINKS</h3>
                                                </div>
                                                <div class="links-widget">
                                                    <ul>
                                                        <li><a itemprop="url" href="<?php echo e(url('about')); ?>" title="">About Us</a></li>
                                                        <li><a itemprop="url" href="<?php echo e(url('why-us')); ?>" title="">What Makes us Different</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- Widget -->
                                        </div>
                                        <div class="col-md-6 column">
                                            <div class="widget">
                                                <div class="heading2">
                                                    <span>Fast And Safe</span>
                                                    <h3>SHIPPING SERVICES</h3>
                                                </div>
                                                <div class="links-widget">
                                                    <ul>
                                                        <li><a itemprop="url" href="<?php echo e($void); ?>" title="">Ground Transport</a></li>
                                                        <li><a itemprop="url" href="<?php echo e($void); ?>" title="">Cargo</a></li>
                                                        <li><a itemprop="url" href="<?php echo e($void); ?>" title="">Warehousing</a></li>
                                                        <li><a itemprop="url" href="<?php echo e($void); ?>" title="">Logistic Service</a></li>
                                                        <li><a itemprop="url" href="<?php echo e($void); ?>" title="">Trucking Service</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- Widget -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 column">
                                    <div class="widget blue1">
                                        <div class="heading2">
                                            <span>FAST AND SAFE</span>
                                            <h3>NEWSLETTER</h3>
                                        </div>
                                        <div class="subscription-form">
                                            <p itemprop="description">Subscribe to our newsletter for the latest updates</p>
                                            <form>
                                                <input type="text" placeholder="Enter Your Email Address" />
                                                <a title="" href="#" class="theme-btn" data-toggle="modal" data-target="#submission-message"><i class="fa fa-paper-plane"></i>SUBMIT</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 column">
                            <span>&copy; <?php echo e(date("Y")); ?> <a itemprop="url" title="" href="<?php echo e(url('/')); ?>">DSG Couriers</a> - All Rights Reserved</span>
                        </div>
                        <div class="col-md-6 column">
                            <ul>
                                <li><a itemprop="url" href="<?php echo e(url('/')); ?>" title="">HOME</a></li>
                                <li><a itemprop="url" href="<?php echo e(url('about')); ?>" title="">ABOUT US</a></li>
                                <li><a itemprop="url" href="<?php echo e(url('contact')); ?>" title="">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank"></div>
        </footer>	

    </div>

    <div class="modal fade" id="submission-message" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="submission-data">
                        <span><img src="images/resource/submission.png" alt="" /></span>
                        <h1>SUBMISSION SUCCESSFUL</h1>
                        <p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
                        <a href="#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-paper-plane"></i>BACK TO MAIN</a>
                    </div><!-- Submission-data -->
                </div>
            </div>
        </div>
    </div>

<!-- Script -->
<script type="text/javascript" src="js/modernizr-2.0.6.js"></script><!-- Modernizr -->
<script type="text/javascript" src="js/jquery-2.2.2.js"></script><!-- jQuery -->
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="js/scrolltopcontrol.js"></script><!-- Scroll To Top -->
<script type="text/javascript" src="js/scroll-up-bar.js"></script><!-- Scroll Up Bar -->
<script type="text/javascript" src="js/jquery.scrolly.js"></script><!-- Scrolly -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript" src="js/icheck.js"></script><!-- iCheck -->
<script type="text/javascript" src="js/select2.full.js"></script><!-- Select2 -->
<script type="text/javascript" src="js/jquery.counterup.min.js"></script><!-- CounterUp -->
<script type="text/javascript" src="js/waypoints.js"></script><!-- Waypoints -->
<script type="text/javascript" src="js/perfect-scrollbar.js"></script><!-- Scroll Bar -->
<script type="text/javascript" src="js/perfect-scrollbar.jquery.js"></script><!-- Scroll Bar -->

<!-- External libraries: jQuery & GreenSock -->
<script src="layerslider/js/greensock.js" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/script.js"></script>
<script src="js/mmm.js?ver=<?php echo e(rand(12454494,2237347438)); ?>"></script>
<script src="js/helpers.js?ver=<?php echo e(rand(12454494,2237347438)); ?>"></script>
<!--SweetAlert JS--> 
<script src="lib/sweet-alert/sweetalert2.js"></script>

<!--Datatables JS--> 
<script src="lib/datatables/datatables.min.js"></script>

<?php echo $__env->yieldContent('scripts'); ?>

 <!--------- Session notifications-------------->
 <?php
               $pop = ""; $val = "";
               
               if(isset($signals))
               {
                  foreach($signals['okays'] as $key => $value)
                  {
                    if(session()->has($key))
                    {
                  	$pop = $key; $val = session()->get($key);
                    }
                 }
              }
              
             ?> 

                 <?php if($pop != "" && $val != ""): ?>
                   <?php echo $__env->make('session-status',['pop' => $pop, 'val' => $val], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                 <?php endif; ?>

<?php if($user == null): ?>
<!--------- Plugins: DO NOT EDIT ------>
<?php
foreach($plugins as $p)
{
?>
<?php echo $p['value']; ?>

<?php
}
?>
<!------------------------------------->
<?php endif; ?>

<script>
    $(document).ready(function () {
        "use strict";

        $('.scrollup').scrollupbar();

        //** Counter Up **//
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        //** Slider  **//
        $("#layerslider").layerSlider({
            responsive: true,
            responsiveUnder: 1170,
            layersContainer: 1170,
            skin: 'v5',
            hoverPrevNext: true,
            navPrevNext: true,
            navStartStop: false,
            navButtons: false,
            skinsPath: 'layerslider/skins/'
        });

        //** Company Projects **//
        $("#company-projects-list").addClass("loaded");

        var l = $("#company-projects-list > ul li").length;
        for (var i = 0; i <= l; i++) {
            var room_list = $("#company-projects-list > ul li").eq(i);
            var room_img_height = $(room_list).find(".company-project > img").innerHeight();
            $(room_list).css({
                "height": room_img_height
            });
            $(room_list).find(".company-project > img").css({
                "width": "100%"
            });
        }

        $("#company-projects-list > ul li.start").addClass("active");
        $("#company-projects-list > ul li").on("mouseenter", function () {
            $("#company-projects-list > ul li").removeClass("active");
            $(this).addClass("active");
        });

        //** Blog Post Carousel **//	
        $("#blog-post-carousel").owlCarousel({
            autoplay: false,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 10,
            items: 1,
            singleItem: true,
        });

        // Post // 
        $(".post-thumb > span").on("click", function () {
            $(this).parent("div").toggleClass("slide-down");
            return false;
        });
    });

    

</script>
</body>
</html><?php /**PATH C:\repos\dgs-couriers\resources\views/layout.blade.php ENDPATH**/ ?>