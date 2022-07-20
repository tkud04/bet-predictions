  <?php
  $signal = $signals['okays'];
   $class = "alert-warning";   
   $icon = "info";
           
   if($val == "error"){
   	$signal = $signals['errors'];
   	$class = "alert-danger";         
       $pop .= "-error";
       $icon = "error";
   } 
  ?>                


  <script>
    Swal.fire({
      icon: "<?php echo e($icon); ?>",
      title: "<?php echo e($signal[$pop]); ?>"
    });
  </script><?php /**PATH C:\repos\dgs-couriers\resources\views/session-status.blade.php ENDPATH**/ ?>