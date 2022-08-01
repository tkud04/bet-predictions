<?php
$phone = '023 233 455 55';
$email = 'support@betpredictions.com';
?>


<!doctype html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $__env->yieldContent('title'); ?> | Home</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav.png">    
		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Main Menu css -->
		<link rel="stylesheet" href="css/rsmenu-main.css">
		<!-- rsmenu transitions css -->
		<link rel="stylesheet" href="css/rsmenu-transitions.css">
		<!-- hover-min css -->
		<link rel="stylesheet" href="css/hover-min.css">
		  <!-- magnific-popup css -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/time-circles.css">
		<!-- Slick css -->
		<link rel="stylesheet" href="css/slick.css">
		<!-- style css -->
		<link rel="stylesheet" href="css/style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
    <!-- custom css -->
		<link rel="stylesheet" href="css/custom.css">
	</head>
	<body class="home-two">
		<!--Preloader start here-->
		<div id="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
		<!--Preloader area end here-->
        
		<!--Header area start here-->
		<header>
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="header-top-left">                            
								<ul>
									<li><a href="mailto:<?php echo e($email); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo e($email); ?></a></li>
									<li><img src="images/logo/flag.jpg" alt="Logo">
                                        <a href="#">English 
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="social-media-area">
								<nav>
									<ul>
										<li><a href="#" class="active"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<!--
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <sup>1</sup></a></li>
                    -->
                    <?php if($user == null): ?>
                    <li class="log"><a href="<?php echo e(url('login')); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li> 
										<li class="sign"><a href="<?php echo e(url('signup')); ?>"><span>/</span> Sign Up</a></li>
                    <?php else: ?>
                    <li class=""><a href="<?php echo e(url('dashboard')); ?>"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>             
                    <?php endif; ?>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle-area menu-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 col-xs-12 logo">
                            <a href="<?php echo e(url('/')); ?>"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xs-12 mobile-menu">
                            <div class="main-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li class="current-menu-item current_page_item">
                                            <a href="<?php echo e(url('/')); ?>">Home</a>
                                        </li>
                                        <!-- End Home -->

                                        <li><a href="<?php echo e(url('about')); ?>">About</a></li>
                                        <li><a href="<?php echo e(url('subscribe')); ?>">Subscribe</a></li>
                                        <li><a href="<?php echo e(url('blog')); ?>">Blog</a></li>
                                        
                                        <?php if($user == null): ?>
                                        <li class=""><a href="<?php echo e(url('login')); ?>">Login</a></li>
                                        <?php else: ?>
                                        <!-- Drop Down -->
                                        <li class="menu-item-has-children">
                                            <a href="#">Hi <?php echo e($user->fname); ?>,</a>
                                            <ul class="sub-menu">
                                               <li><a href="<?php echo e(url('dashboard')); ?>">Dashboard</a></li> 
                                               <li><a href="<?php echo e(url('bye')); ?>">Logout</a></li> 
                                            </ul>
                                        </li>
                                         <!-- Drop Down -->
                                        <?php endif; ?>
                                        <li><a href="<?php echo e(url('contact')); ?>">Contact</a></li>
                                    </ul>
                               </nav>
                              <!--Header Search Start  here-->
                                <div class="search">
                                    <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                                </div>
                               <!--Header Search End  here--> 
                           </div>
                       </div>
                    </div>
                </div>
            </div>
		</header>
		<!--Header area end here-->

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

<?php echo $__env->yieldContent('content'); ?>


		<!-- Client Logo Section Start Here-->
		<div class="clicent-logo-section sec-spacer">
            <div class="overly-bg"></div>
            <div class="container">
                <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="20" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                   <?php for($i = 0; $i < 5; $i++): ?>
                   <div class="item">
                        <div class="single-logo">
                            <a href="#"><img src="images/brand.png" alt=""></a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!-- Client Logo Section End Here-->

		<!-- Footer Start -->
    <footer id="footer-section" class="footer-section">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
						<h4 class="footer-title">about us</h4>
                            <div class="about-widget">
                                <p> We provide free and premium (subscription) tips.</p>
                                <p class="margin-remove">Out team are experts in the '<b>big money, small odds</b>' pattern in betting. Our tips are usually between 5.0 to 6.0 odds that are GUARANTEED to cash out.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-title">Recent Posts</h4>
                            <div class="recent-post-widget">
                                <div class="post-item">
                                    <div class="post-date">
                                        <span>28</span>
                                        <span>June</span>
                                    </div>
                                    <div class="post-desc">
                                        <h5 class="post-title"><a href="blog-single.html">Welcome to Soccer Template</a></h5>
                                        <span class="post-category">Design</span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-date">
                                        <span>30</span>
                                        <span>July</span>
                                    </div>
                                    <div class="post-desc">
                                        <h5 class="post-title"><a href="blog-single.html">Welcome to sports template</a></h5>
                                        <span class="post-category">Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-title">Useful Links</h4>
                            <ul class="sitemap-widget">
                                <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(url('about')); ?>">About</a></li>
                                <li><a href="<?php echo e(url('blog')); ?>">Blog</a></li> 
                                <li><a href="<?php echo e(url('contact')); ?>">Contact</a></li>
                                <li><a href="<?php echo e(url('terms')); ?>">Terms &amp; Conditions</a></li>
                                <li><a href="<?php echo e(url('privacy')); ?>">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-title">newsletter</h4>
                            <form class="footer-subscribe">
	                            <input type="text" class="form-input" placeholder="Name">
	                            <input type="email" class="form-input" placeholder="Email">
	                            <input type="submit" class="form-input" value="Send">
	                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="copyright">
                                <p>&copy; <?php echo e(date('Y')); ?>, All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="text-right ft-bottom-right">
                                <div class="footer-bottom-share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
        
        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Soccer News" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
		<!-- Start scrollUp  -->
		<div id="return-to-top">
			<span>Top</span>
		</div>
		<!-- End scrollUp  -->

		<!-- all js here -->
		<!-- jquery latest version -->
		<script src="js/jquery.min.js"></script>
		<!-- Menu js -->
		<script src="js/rsmenu-main.js"></script> 
		 <!-- jquery-ui js -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- meanmenu js -->
		<script src="js/jquery.meanmenu.js"></script>
		<!-- wow js -->
		<script src="js/wow.min.js"></script>
		<!-- Slick js -->
		<script src="js/slick.min.js"></script>
		<!-- masonry js -->
		<script src="js/masonry.js"></script>
		<!-- magnific-popup js -->
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/time-circle.js"></script>
		<!-- magnific-popup js -->
		<script src="js/jquery.magnific-popup.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
	</body>
</html><?php /**PATH C:\repos\bet-predictions\resources\views/layout.blade.php ENDPATH**/ ?>