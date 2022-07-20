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
      icon: "{{$icon}}",
      title: "{{$signal[$pop]}}"
    });
  </script>