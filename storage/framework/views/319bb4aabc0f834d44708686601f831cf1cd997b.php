<?php
$phone = '023 233 455 55';
?>

<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title><?php echo $__env->yieldContent('title'); ?> | Andover Gadgets</title>
<!-- SEO Meta
  ================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="global">
<meta name="revisit-after" content="2 Days">
<meta name="robots" content="ALL">
<meta name="rating" content="8 YEARS">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/fotorama.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>
<body class="homepage">
<div class="se-pre-con"></div>
<div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
  <div class="nl-popup-main">
    <div class="nl-popup-inner">
      <div class="newsletter-inner">
        <span>Sign up & get 10% off</span>
        <h2 class="main_title">Subscribe Emails</h2>
        <form>
          <input type="email" placeholder="Email Here...">
          <button class="btn-black" title="Subscribe">Subscribe</button>
        </form>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
      </div>
    </div>
  </div>
</div>

<div class="main">
    
   <!-- HEADER START -->
  <header class="navbar navbar-custom container-full-sm" id="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="top-link top-link-left">
              <ul>
                <li class="language-icon">
                  <select>
                    <option selected="selected" value="">English</option>
                    <!--<option value="">French</option>
                    <option value="">German</option>-->
                  </select>
                </li>
                <li class="sitemap-icon">
                  <select>
                    <option selected="selected" value="">USD</option>
                    <!--<option value="">AUD</option>
                    <option value="">EUR</option>-->
                  </select>
                </li> 
              </ul>
            </div>
          </div>
          <div class="col-6">
            <div class="top-link right-side">
              <div class="help-num" >Need Help? :<?php echo e($phone); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle">
      <div class="container">
        <hr>
        <div class="header-inner">
          <div class="row">
            <div class="col-xl-2 col-lg-3">
              <div class="header-middle-left">
                <div class="navbar-header float-none-sm">
                  <a class="navbar-brand page-scroll" href="<?php echo e(url('/')); ?>">
                    <img alt="Andover Gadgets" src="images/logo.png">
                  </a> 
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-9">
              <div class="header-middle-right navbar-expand-lg">
                <div class="row">
                  <div class="col-xl-7 col-lg-9 ">
                    <div class="header-bottom">
                      <div class="position-r">          
                        <div class="nav_sec position-r">
                          <div class="mobilemenu-title mobilemenu">
                            <span>Menu</span>
                            <i class="fa fa-bars pull-right"></i>
                          </div>
                          <div class="mobilemenu-content">
                            <ul class="nav navbar-nav" id="menu-main">
                              <li class="active">
                                <a href="<?php echo e(url('/')); ?>">Home</a>
                              </li>
                              <li>
                                <a href="<?php echo e(url('shop')); ?>">Shop</a>
                              </li>
                              <li>
                                <a href="<?php echo e(url('about')); ?>">About Us</a>
                              </li>
                              <li>
                                <a href="<?php echo e(url('contact')); ?>">Contact</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-5 col-lg-3">
                    <div class="middle-link right-side">
                      <ul>
                        <li class="login-icon content">
                          <a class="content-link">
                          <span class="content-icon"></span> 
                          </a> 
                          <?php
                            if($user == null){
                          ?>
                          <a href="<?php echo e(url('login')); ?>" title="Login">Login</a> or
                          <a href="<?php echo e(url('register')); ?>" title="Register">Register</a>
                          <div class="content-dropdown">
                            <ul>
                              <li class="login-icon"><a href="<?php echo e(url('login')); ?>" title="Login"><i class="fa fa-user"></i> Login</a></li>
                              <li class="register-icon"><a href="<?php echo e(url('login')); ?>" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
                            </ul>
                          </div>
                          <?php
                            }
                            else {
                          ?>
                           <a href="<?php echo e(url('dashboard')); ?>" title="Dashboard">Dashboard</a>
                           <a href="<?php echo e(url('orders')); ?>" title="Orders">Orders</a>
                          <a href="<?php echo e(url('logout')); ?>" title="Logout">Logout</a>
                          <div class="content-dropdown">
                            <ul>
                              <li class="login-icon"><a href="<?php echo e(url('login')); ?>" title="Login"><i class="fa fa-user"></i> Login</a></li>
                              <li class="register-icon"><a href="<?php echo e(url('login')); ?>" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
                            </ul>
                          </div>
                           <?php
                            }
                          ?>
                        </li>
                        <li class="track-icon">
                          <a title="Track your order" href="<?php echo e($void); ?>"><span></span> Track your order</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-8 col-lg-8">
                    <div class="header-right-part">
                      <div class="category-dropdown">
                        <select id="search-category" name="search-category">
                          <option value="">All Categories</option>
                          <option value="20">Electrronics</option>
                          <option value="26">■ PC</option>
                          <option value="43">&nbsp;&nbsp;&nbsp;- Dell Inspiron</option>
                          <option value="44">&nbsp;&nbsp;&nbsp;- Hp Notebook</option>
                          <option value="47">&nbsp;&nbsp;&nbsp;- Sony Vio</option>
                          <option value="55">&nbsp;&nbsp;&nbsp;- Samsung Tablet</option>
                          <option value="27">■ Mac</option>
                          <option value="48">&nbsp;&nbsp;&nbsp;- Desktop Mac</option>
                          <option value="49">&nbsp;&nbsp;&nbsp;- Laptop Mac</option>
                          <option value="50">&nbsp;&nbsp;&nbsp;- Samsung Mac</option>
                          <option value="38">&nbsp;&nbsp;&nbsp;- Android tablets</option>
                          <option value="51">■ Laptops</option>
                          <option value="52">&nbsp;&nbsp;&nbsp;- Accer laptop</option>
                          <option value="56">&nbsp;&nbsp;&nbsp;- apple ipad</option>
                          <option value="53">&nbsp;&nbsp;&nbsp;- HP Laptop</option>
                          <option value="54">&nbsp;&nbsp;&nbsp;- DELL Laptop</option>
                         
                        </select>
                      </div>
                      <div class="main-search">
                        <div class="header_search_toggle desktop-view">
                          <form>
                            <div class="search-box">
                              <input class="input-text" type="text" placeholder="Search entire store here...">
                              <button class="search-btn"></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4">
                    <div class="right-side header-right-link">
                      <ul>
                        <li class="compare-icon">
                          <a href="compare.html">
                            <span></span>
                          </a>
                        </li>
                        <li class="wishlist-icon">
                          <a href="wishlist.html">
                            <span></span>
                          </a>
                        </li>
                        <li class="cart-icon"> <a href="#"> <span> <small class="cart-notification">2</small> </span> </a>
                          <div class="cart-dropdown header-link-dropdown">
                            <ul class="cart-list link-dropdown-list">
                              <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                                <div class="media"> <a class="pull-left"> <img alt="Electrro" src="images/1.jpg"></a>
                                  <div class="media-body"> <span><a>Black African Print Skirt</a></span>
                                    <p class="cart-price">$14.99</p>
                                    <div class="product-qty">
                                      <label>Qty:</label>
                                      <div class="custom-qty">
                                        <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                                <div class="media"> <a class="pull-left"> <img alt="Electrro" src="images/2.jpg"></a>
                                  <div class="media-body"> <span><a>Black African Print Skirt</a></span>
                                    <p class="cart-price">$14.99</p>
                                    <div class="product-qty">
                                      <label>Qty:</label>
                                      <div class="custom-qty">
                                        <input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                            <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
                            <div class="clearfix"></div>
                            <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
                          </div>
                        </li>
                        <li class="side-toggle">
                          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <i class="fa fa-bars"></i>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </header>
  <!-- HEADER END --> 

   <!--------- Input errors -------------->
   <?php if(count($errors) > 0): ?>
                          <?php echo $__env->make('input-errors', ['errors'=>$errors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php endif; ?> 
		  
		  <?php echo $__env->yieldContent('content'); ?>

  <!-- FOOTER START -->
  <div class="footer">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-middle">
          <div class="row mb-60">
            <div class="col-lg-4 f-col footer-middle-left">
              <div class="f-logo"> 
                <a href="<?php echo e(url('/')); ?>" class=""> 
                  <img src="images/footer-logo.png" alt="Electrro"> 
                </a> 
              </div>
              <div class="footer-static-block"> <span class="opener plus"></span>
                <ul class="footer-block-contant address-footer">
                  <li class="item"> <i class="fa fa-map-marker"> </i>
                    <p>150-A Appolo aprtment, opp. Hopewell Junction, <br>Allen st Road, new york-405001.</p>
                  </li>
                  <li class="item"> <i class="fa fa-envelope"> </i>
                    <p> <a>infoservices@electrro.com </a> </p>
                  </li>
                  <li class="item"> <i class="fa fa-phone"> </i>
                    <p>(+91) 9834567890</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-8 footer-middle-right">
              <div class="row">
                <div class="col-lg-4 f-col">
                  <div class="footer-static-block"> <span class="opener plus"></span>
                    <h3 class="title">Help <span></span></h3>
                    <ul class="footer-block-contant link">
                      <li><a>Gift Cards</a></li>
                      <li><a>Order Status</a></li>
                      <li><a>Free Shipping</a></li>
                      <li><a>Return & Exchange </a></li>
                      <li><a>International</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 f-col">
                  <div class="footer-static-block"> <span class="opener plus"></span>
                    <h3 class="title">Guidance <span></span></h3>
                    <ul class="footer-block-contant link">
                      <li><a> Delivery information</a></li>
                      <li><a> Privacy Policy</a></li>
                      <li><a> Terms & Conditions</a></li>
                      <li><a> Contact</a></li>
                      <li><a> Sitemap</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 f-col">
                  <div class="footer-static-block"> <span class="opener plus"></span>
                    <h3 class="title">Information <span></span></h3>
                    <ul class="footer-block-contant link">
                      <li><a> Delivery information</a></li>
                      <li><a> Privacy Policy</a></li>
                      <li><a> Terms & Conditions</a></li>
                      <li><a>Contact</a></li>
                      <li><a> Sitemap</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="footer-bottom ">
          <div class="row mtb-30">
            <div class="col-lg-6 ">
              <div class="copy-right ">© 2017  All Rights Reserved. Design By <a href="#">Aaryaweb</a></div>
            </div>
            <div class="col-lg-6 ">
              <div class="footer_social pt-xs-15 center-sm">
                <ul class="social-icon">
                  <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                  <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                  <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                  <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                  <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <hr>
          <div class="row mtb-30">
            <div class="col-xl-8 col-lg-12 ">
              <div class="site-link">
                <ul>
                  <li><a>About Us</a></li>
                  <li><a>Contact Us</a></li>
                  <li><a>Customer </a></li>
                  <li><a>Service</a></li>
                  <li><a>Privacy</a></li>
                  <li><a>Policy </a></li>
                  <li><a>Accessibility</a></li>
                  <li><a>Directory </a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12 ">
              <div class="payment">
                <ul class="payment_icon">
                  <li class="visa"><a><img src="images/pay1.png" alt="Electrro"></a></li>
                  <li class="discover"><a><img src="images/pay2.png" alt="Electrro"></a></li>
                  <li class="paypal"><a><img src="images/pay3.png" alt="Electrro"></a></li>
                  <li class="vindicia"><a><img src="images/pay4.png" alt="Electrro"></a></li>
                  <li class="atos"><a><img src="images/pay5.png" alt="Electrro"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-top">
    <div id="scrollup"></div>
  </div>
  <!-- FOOTER END --> 
</div>
<script src="js/jquery-1.12.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script>  
<script src="js/jquery-ui.min.js"></script> 
<script src="js/fotorama.js"></script>
<script src="js/jquery.magnific-popup.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/custom.js"></script>

<script>
  /* ------------ Newslater-popup JS Start ------------- */
  $(window).load(function() {
    $.magnificPopup.open({
      items: {src: '#newslater-popup'},type: 'inline'}, 0);
  });
    /* ------------ Newslater-popup JS End ------------- */
</script>

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

</body>
</html><?php /**PATH C:\repos\andover\resources\views/layout.blade.php ENDPATH**/ ?>