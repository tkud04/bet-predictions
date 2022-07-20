
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title><?php echo $__env->yieldContent('title'); ?> | MySchool - School Management System for Primary Schools</title>
	<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

<link rel="stylesheet" href="assets/css/meanmenu.css" />

<link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css" />

<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css" />

<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css" />

<link rel="stylesheet" type="text/css" href="assets/css/animate.css" />

<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/custom.css" />

<link rel="stylesheet" href="assets/css/responsive.css" />
<link rel="icon" type="image/png" href="assets/images/favicon.ico">

</head>

<body>
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_four"></div>
</div>
</div>
</div>


<div class="navbar-area">
<div class="mobile-nav">
<a href="<?php echo e(url('/')); ?>" class="logo">
<p style="color: #000;">My School</p>
</a>
</div>
<div class="main-nav">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
<p style="color: #000;">My School</p>
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav text-right">
<li class="nav-item">
<a href="<?php echo e(url('/')); ?>" class="nav-link active">Home</a>
</li>
<li class="nav-item">
<a href="<?php echo e(url('about')); ?>" class="nav-link">About</a>
</li>

<li class="nav-item"><a href="<?php echo e(url('classes')); ?>" class="nav-link">Classes</a></li>

<!--
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle">Teachers</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="single-teacher.html" class="nav-link">Teachers</a>
</li>
<li class="nav-item">
<a href="single-teacher.html" class="nav-link">Teachers Details</a>
</li>
</ul>
</li>
-->

<li class="nav-item">
<a href="<?php echo e(url('contact')); ?>" class="nav-link">Contact </a>
</li>

<?php if($user == null): ?>
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle">Account</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="<?php echo e(url('login')); ?>" class="nav-link">Log in</a>
</li>
<li class="nav-item">
<a href="<?php echo e(url('signup')); ?>" class="nav-link">Sign up</a>
</li>
</ul>
</li>
<?php else: ?>
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle">Hi, <?php echo e($user->fname); ?></a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="<?php echo e(url('dashboard')); ?>" class="nav-link">Dashboard</a>
</li>
<li class="nav-item">
<a href="<?php echo e(url('bye')); ?>" class="nav-link">Log out</a>
</li>
</ul>
</li>
<?php endif; ?>
</ul>
</div>
</nav>
</div>
</div>
</div>
		
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
        	
					 
		  <?php echo $__env->yieldContent('slider'); ?>
		  
		  <!--------- Input errors -------------->
                    <?php if(count($errors) > 0): ?>
                          <?php echo $__env->make('input-errors', ['errors'=>$errors], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <?php endif; ?> 
		  
		  <?php echo $__env->yieldContent('content'); ?>
		  
		  <div class="footer-area">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="footer-left">
<a href="<?php echo e(url('/')); ?>" class="logo"><p>My School</p></a>
<p>
Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
<ul class="footer-social">
<li>
<a href="#"><i class="flaticon-facebook"></i></a>
</li>
<li>
<a href="#"><i class="flaticon-twitter"></i></a>
</li>
<li>
<a href="#"><i class="flaticon-envelope"></i></a>
</li>
<li>
<a href="#"><i class="flaticon-google-plus"></i></a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="footer-content fml-25">
<h2>School</h2>
<ul>
<li>
<a href="javascript:void(0)"><i class="flaticon-next"></i> Students</a>
</li>
<li>
<a href="javascript:void(0)"><i class="flaticon-next"></i> Teachers</a>
</li>
<li>
<a href="javascript:void(0)"><i class="flaticon-next"></i> Contact</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6">
<div class="footer-content fml-15">
<h2>Quick Links</h2>
<ul>
<li>
<a href="<?php echo e(url('/')); ?>"><i class="flaticon-next"></i> Home</a>
</li>
<li>
<a href="<?php echo e(url('classes')); ?>"><i class="flaticon-next"></i> Classes</a>
</li>
<li>
<a href="<?php echo e(url('faq')); ?>"><i class="flaticon-next"></i> FAQ</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="footer-content fml-15 fml-20">
<h2>Find Us</h2>
<ul>
<li>
<a href="#"><i class="flaticon-next"></i> 01379 642088</a>
</li>
<a href="#"><i class="flaticon-next"></i> <span class="__cf_email__" data-cfemail="32414742425d4046725756445b1c515d5f">[email&#160;protected]</span></a>
</li>
<li>
<a href="#">
<i class="flaticon-next"></i> 25 Mere Street, Norfolk, UK IP22 4AD
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="copy-area">
<div class="container">
<div class="col-lg-12">
<div class="row">
<div class="copy">
<p>
Copyright &copy;<?php echo e(date("Y")); ?> MySchool. All Rights Reserved by
<a href="javascript:void(0)"> Abiola</a>
</p>
</div>
</div>
</div>
</div>
</div>


<a href="#" class="scroll-top wow bounceInDown">
<i class="fas fa-angle-double-up"></i>
</a>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/mmm.js?ver=<?php echo e(rand(1,4444)); ?>"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/isotope.pkgd.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/main.js"></script>
</body>
</html><?php /**PATH C:\repos\abiola-project\resources\views/layout.blade.php ENDPATH**/ ?>