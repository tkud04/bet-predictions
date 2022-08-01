<?php
$void = 'javascript:void(0)';
?>


<?php $__env->startSection('title',"Welcome"); ?>

<?php $__env->startSection('content'); ?>
 <?php echo $__env->make('banner',['banners' => $banners], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('upcoming-matches',['matches' => $matches], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('news-area',['posts' => $posts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
 <?php echo $__env->make('tips',['tips' => $tips], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
 <?php echo $__env->make('testimonials',['testimonials' => $testimonials], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\bet-predictions\resources\views/index.blade.php ENDPATH**/ ?>