<?php
$img = 'images/breadcrumbs/about.jpg'; 
$bodyClass = 'home-two';
?>


<?php $__env->startSection('title',"About Us"); ?>

<?php $__env->startSection('content'); ?>
 <?php echo $__env->make('banner-2',['img' => $img,'title' => 'About Us'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <!-- Club Section Start -->
 <div class="rs-club sec-spacer">
			<div class="container">
                <h3 class="title-bg">About Our Club</h3>
				<div class="row">
					<div class="col-md-6 col-ms-12">
						<div class="rs-club-text">
							<p>Donec sed pellentesque purus, ut tempus odio. Etiam dapibus non orci vel sodales. Vestibulum dignissim laoreet semper. Phasellus elit felis, vehicula vel porta quis, venenatis ac magna. Sed dapibus placerat nisi nec tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam posuere ex at quam finibus, vitae bibendum nibh mollis. Nunc et velit eget nibh rutrum fringilla eu vitae risus. Nulla in convallis nisl, a ullamcorper nulla.</p>
							<p>There are many variations of passages of Lorem Ipsum available, but they can  majority have suffered alteration in some form, by injected humour, or there randomised words which don't look even slightly believable.and they useings The standard Lorem Ipsum passage, used since the 1500s.</p>
						</div>
					</div>
					<div class="col-md-6  col-ms-12">
						<div class="rs-club-image">
							<img src="images/breadcrumbs/club.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
</div>
<!-- Club Section End -->

 <!--Testimonils Section Start Here-->
 <div class="testimonil-section-page sec-spacer">
            <div class="overly-bg"></div>
            <div class="container">
                <h3 class="title-bg">Users Feedback</h3>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tesitmonial-inner">
							<?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-testimonil text-center">
                                <div class="author-info">
                                    <img src="images/avatar.jpg" width='101' height='101' alt="<?php echo e($t['name']); ?>" />
                                    <h4><?php echo e($t['name']); ?> <span><?php echo e($t['location']); ?></span></h4>
                                    <p><?php echo $t['comment']; ?></p>
                                </div>
                            </div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Testimonils Section End Here-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\bet-predictions\resources\views/about.blade.php ENDPATH**/ ?>