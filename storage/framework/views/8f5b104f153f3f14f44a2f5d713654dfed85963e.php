<?php
$img = 'images/breadcrumbs/about.jpg'; 
$bodyClass = 'home-two';
?>


<?php $__env->startSection('title',"Blog"); ?>

<?php $__env->startSection('content'); ?>
 <?php echo $__env->make('banner-2',['img' => $img,'title' => 'Blog'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <!-- Home Blog Start Here -->
   <div id="rs-blog" class="rs-blog sec-spacer">
            <div class="container">
                <div class="row">  
                    <?php
                      foreach($posts as $p){
                        $url = 'post?tag='.$p['tag'];
                    ?>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="single-blog-slide">
							<div class="images">
								<a href="<?php echo e($url); ?>"><img src="<?php echo e($p['img']); ?>" alt="<?php echo e($p['title']); ?>"></a>
							</div>
                            <div class="blog-details">
                                <span class="date"><i class="fa fa-calendar-check-o"></i> <?php echo e($p['date']); ?></span>
                                <h3><a href="<?php echo e($url); ?>"><?php echo e($p['title']); ?> </a></h3>
                                <p><?php echo e($p['summary']); ?></p>
                                <div class="read-more">
                                    <a href="<?php echo e($url); ?>">Read More</a>
                                </div>
                            </div>
						</div> 
					</div>
                    <?php
                      }
                    ?>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="default-pagination text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i>Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <!--
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                 -->
                                <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Blog End Here -->
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\bet-predictions\resources\views/posts.blade.php ENDPATH**/ ?>