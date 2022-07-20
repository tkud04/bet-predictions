<?php
$void = 'javascript:void(0)';
?>


<?php $__env->startSection('title',"Tracking"); ?>

<?php $__env->startSection('content'); ?>
<?php
if($valid)
{
?>
 <?php echo $__env->make('tracking-found',['result' => $result], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
}

else{
?>
  <?php echo $__env->make('tracking-not-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
}
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\dgs-couriers\resources\views/track.blade.php ENDPATH**/ ?>