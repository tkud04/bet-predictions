<?php
$void = 'javascript:void(0)';
?>


<?php $__env->startSection('title',"Welcome"); ?>

<?php $__env->startSection('content'); ?>
<section class="slider-area">
<div class="home-slider owl-carousel owl-theme">
<div class="single-slider single-slider-bg-1">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12 text-center">
<div class="slider-tittle one">
<h1>
We Focus on Your <span>Children’s Development</span>
</h1>
<p>
In addition to these core schools, students in a given country may also attend schools before and after primary elementary in the and secondary middle school in the us education. Kindergarten or preschool.
</p>
</div>
<div class="slider-btn bnt1 text-center">
<a href="<?php echo e($void); ?>" class="box-btn">Admission</a>
<a href="<?php echo e($void); ?>" class="border-btn">View Courses</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="single-slider single-slider-bg-2">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12 text-center">
<div class="slider-tittle two">
<h1>
We Focus on Your <span>Children’s Development</span>
</h1>
<p>
In addition to these core schools, students in a given country may also attend schools before and after primary elementary in the and secondary middle school in the us education. Kindergarten or preschool.
</p>
</div>
<div class="slider-btn bnt2">
<a href="<?php echo e($void); ?>" class="box-btn">Admission</a>
<a href="<?php echo e($void); ?>" class="border-btn">View Courses</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="service-area"> 
<div class="container">
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="single-service text-center">
<div class="service-icon">
<i class="flaticon-clock"></i>
</div>
<div class="service-content">
<h2>Opening Hours</h2>
<p>Sun - Thu : 8:00AM - 2:00PM</p>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="single-service text-center">
<div class="service-icon">
<i class="flaticon-pin"></i>
</div>
<div class="service-content">
<h2>Address</h2>
<p>25 Mere Street, Norfolk, UK IP22 4AD</p>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-12">
<div class="single-service text-center sst-10">
<div class="service-icon">
<i class="flaticon-telephone"></i>
</div>
<div class="service-content">
<h2>Phone</h2>
<p>01379 642088</p>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="shape-ellips">
<img src="assets/images/shape.png" alt="shape" />
</div>

<section class="home-ragular-course pb-100">
<div class="container-fluid">
<div class="section-tittle text-center">
<h2>Our Regular Classes</h2>
<p>
A course is a class offered by our school. These courses are usually part of a program leading.
</p>
</div>
<div class="home-course-slider owl-carousel owl-theme">

<?php
if(count($courses) > 0)
{
    foreach($courses as $course)
    {
        $cu = url('class')."?xf=".$course['id'];
?>
<div class="single-home-special-course" onclick="window.location='<?php echo e($cu); ?>';">
<div class="course-img">
<img src="<?php echo e($course['img']); ?>" alt="course">
<div class="course-content">
<h2><?php echo e($course['name']); ?></h2>
<p>
<?php echo e($course['description']); ?>

</p>
<a href="<?php echo e($cu); ?>" class="box-btn">Read More</a>
</div>
</div>
</div>
<?php
    }
}
?>
</div>
</div>
</section>

<section class="choose-area">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6 ps-0">
<div class="home-choose-img">
<img src="assets/images/choose1.png" alt="choose" />
</div>
</div>
<div class="col-lg-6 home-choose">
<div class="home-choose-content">
<div class="section-tittle">
<h2>Why Choose us?</h2>
<p>
School choice theory assumes that parents are rational actors that can gather and consume information to find a school that matches their child's needs. Parents' desires and ability to choose quality schools.
</p>
</div>
<div class="row">
<div class="col-lg-4 col-sm-12 col-md-5">
<ul class="choose-list-left">
<li><i class="flaticon-check-mark"></i>Top 10 Rated School in UK</li>
<li> <i class="flaticon-check-mark"></i>Great Behaviour</li>
<li><i class="flaticon-check-mark"></i>Helpful & Kindnesss</li>
<li><i class="flaticon-check-mark"></i>Learning With Fun</li>
<li><i class="flaticon-check-mark"></i>Children Safety</li>
</ul>
</div>
<div class="col-lg-8 col-sm-12 col-md-7">
<div class="choose-list-home">
<ul>
<li> <i class="flaticon-check-mark"></i>Eco Freindly Environment</li>
<li> <i class="flaticon-check-mark"></i>Healthy Food & Water in Canteen</li>
<li> <i class="flaticon-check-mark"></i>Health Care With Certified Dorctors</li>
<li><i class="flaticon-check-mark"></i>Huge Playground With Children Park</li>
<li><i class="flaticon-check-mark"></i>Physically Fit Buses With Experienced Driver</li>
</ul>
</div>
</div>
<a href="" class="box-btn">Know More</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="home-admission">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="single-addmission">
<div class="row">
<div class="col-lg-4 col-md-5">
<div class="admission-circle">
<h2>Admission <span> on Going</span></h2>
<div class="admission-shape1">
<img src="assets/images/admission/shape1.png" alt="shape" />
</div>
<div class="admission-shape2">
<img src="assets/images/admission/shape2.png" alt="shape" />
</div>
<div class="admission-shape3">
<img src="assets/images/admission/shape3.png" alt="shape" />
</div>
<div class="admission-shape4">
<img src="assets/images/admission/shape4.png" alt="shape" />
</div>
</div>
</div>
<div class="col-lg-8 col-md-7">
<div class="admission-content">
<h2>Spring Term 2021 Admission for All Standard</h2>
<p>Admission will Close 30th March 2021. Time Remaining:</p>
<ul class="admission-list">
<li>
<p id="days">21</p>
<span>Days</span>
</li>
<li>
<p id="hours">15</p>
<span>Hours</span>
</li>
<li>
<p id="minutes">10</p>
<span>Minute</span>
</li>
<li>
<p id="seconds">50</p>
<span>Seconds</span>
</li>
</ul>
<a href="admission.html" class="box-btn">Admission Now</a>
</div>
</div>
</div>
<span class="loon">
<img src="assets/images/admission/shape5.png" alt="shape" />
</span>
</div>
</div>
</div>
</div>
</section>

<span class="left-shape">
<img src="assets/images/left-shape.png" alt="shape" />
</span>

<section class="home-news pb-100 pt-100">
<div class="container">
<div class="section-tittle text-center">
<h2>Our Daily News Update</h2>
<p>
A college course is a class offered by a college or university. These courses are usually part of a program leading.
</p>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-home-news">
<a href="single-news.html">
<img src="assets/images/news/img1.png" alt="news" />
</a>
<div class="single-home-content">
<h2>Soccer completed successfully</h2>
<p class="calender">
<i class="flaticon-calendar"></i> 01 April, 2021
</p>
<p>
It is a long established fact that a reader will be distracted by the readable content of a page.
</p>
<a href="single-news.html" class="line-bnt">Read More <i class="flaticon-next"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-home-news">
<a href="single-news.html">
<img src="assets/images/news/img2.png" alt="news" />
</a>
<div class="single-home-content">
<h2>Top Resuslt Holder 2021</h2>
<p class="calender">
<i class="flaticon-calendar"></i> 01 April, 2021
</p>
<p>
It is a long established fact that a reader will be distracted by the readable content of a page.
</p>
<a href="single-news.html" class="line-bnt">Read More <i class="flaticon-next"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 sst-10">
 <div class="single-home-news">
<a href="single-news.html">
<img src="assets/images/news/img3.png" alt="news" />
</a>
<div class="single-home-content">
<h2>Leaning About Virus COVID-19</h2>
<p class="calender">
<i class="flaticon-calendar"></i> 01 April, 2021
</p>
<p>
It is a long established fact that a reader will be distracted by the readable content of a page.
</p>
<a href="single-news.html" class="line-bnt">Read More <i class="flaticon-next"></i></a>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="home-contact-area pb-100 pt-100">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6 ps-0">
<div class="contact-img">
<img src="assets/images/contact.png" alt="contact" />
</div>
</div>
<div class="col-lg-6">
<div class="home-contact-content">
<h2>What Do You Want to Know?</h2>
<form id="contactForm">
<div class="row">
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name" />
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email" />
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone" />
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject" />
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
<div class="help-block with-errors"></div>
 </div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn page-btn box-btn">
Send Message
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\abiola-project\resources\views/index.blade.php ENDPATH**/ ?>