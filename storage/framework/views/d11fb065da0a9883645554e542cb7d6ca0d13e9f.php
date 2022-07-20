<?php
$void = 'javascript:void(0)';
?>


<?php $__env->startSection('title',"Add Tracking"); ?>


<?php $__env->startSection('content'); ?>
<section class="block">
<div class="container">
      <div class="row">
        <?php echo $__env->make('_admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <?php echo $__env->make('_admin-header',['title' => "Add New Tracking"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         
         <form id="add-tracking-form" action="<?php echo e(url('add-tracking')); ?>" method="post">
           <?php echo csrf_field(); ?>

           <div class="row">
              <div class="mb-3 form-group col-md-12">
               <h2 class="">Shipper Information</h2>
			   </div>
               <div class="form-group col-md-6">
                 <label class="control-label">Name</label>
                 <input type="text" class="form-control" id="sname" name="sname" placeholder="Shipper name">
               </div>
               <div class="form-group col-md-6">
                 <label class="control-label">Phone number</label>
                 <input type="text" class="form-control" id="sphone" name="sphone" placeholder="Shipper phone number">
               </div>
               <div class="form-group col-md-12 mt-3">
                 <label class="control-label">Address</label>
                 <input type="text" class="form-control" id="sadd" name="sadd" placeholder="Shipper address">
               </div>
           </div>

           <div class="row mt-5">
              <div class="mb-3 form-group col-md-12">
               <h2 class="">Receiver Information</h2>
			   </div>
               <div class="form-group col-md-6">
                 <label class="control-label">Name</label>
                 <input type="text" class="form-control" id="rname" name="rname" placeholder="Receiver name">
               </div>
               <div class="form-group col-md-6">
                 <label class="control-label">Phone number</label>
                 <input type="text" class="form-control" id="rphone" name="rphone" placeholder="Receiver phone number">
               </div>
               <div class="form-group col-md-12 mt-3">
                 <label class="control-label">Address</label>
                 <input type="text" class="form-control" id="radd" name="radd" placeholder="Receiver address">
               </div>
           </div>


           <div class="row mt-5">
              <div class="mb-3 form-group col-md-12">
               <h2 class="">Shipping Information</h2>
			   </div>
               <div class="form-group col-md-6">
                 <label class="control-label">Ship Type</label>
                 <input type="text" class="form-control" id="stype" name="stype" placeholder="Ship type">
               </div>
               <div class="form-group col-md-6">
                 <label class="control-label">Weight (kg)</label>
                 <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight (kg)">
               </div>
               <div class="form-group col-md-6 mt-3">
                 <label class="control-label">Origin Office</label>
                 <input type="text" class="form-control" id="origin" name="origin" placeholder="Origin office">
               </div>
               <div class="form-group col-md-6 mt-3">
                 <label class="control-label">Destination Office</label>
                 <input type="text" class="form-control" id="dest" name="dest" placeholder="Destination office">
               </div>
               <div class="form-group col-md-12 mt-3">
                 <label class="control-label">Description</label>
                 <textarea class="form-control" id="description" name="description" placeholder="Description" rows="15"></textarea>
               </div>
               <div class="form-group col-md-6 mt-3">
                 <label class="control-label">Freight ($)</label>
                 <input type="text" class="form-control" id="freight" name="freight" placeholder="Freight ($)">
               </div>
               <div class="form-group col-md-6 mt-3">
                 <label class="control-label">Booking mode</label>
                 <?php
				    $bmodes = ['none' => "Select booking mode", 'paid' => "Paid", 'unpaid' => "Unpaid"];
				  ?>
                 <select class="form-control" id="bmode" name="bmode">
                     <?php
                      foreach($bmodes as $key => $value)
                      {
                     ?>
                      <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php
                      }
                    ?>
                 </select>
               </div>
               <div class="form-group col-md-6 mt-3">
                 <label class="control-label">Mode</label>
                 <input type="text" class="form-control" id="mode" name="mode" placeholder="Mode">
               </div>
               <div class="form-group col-md-6 mt-3">
                 <label class="control-label">Tracking Status</label>
                 <?php
				    $statuses = ['none' => "Select status", 'station' => "ARRIVED AT STATION", 'hold' => "ON HOLD", 'transit' => "IN TRANSIT", 'delivery' => "OUT FOR DELIVERY", 'delivered' => "DELIVERED"];
				  ?>
                 <select class="form-control" id="tracking-status" name="status">
                     <?php
                      foreach($statuses as $key => $value)
                      {
                     ?>
                      <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php
                      }
                    ?>
                 </select>
               </div>
               <div class="form-group col-md-12 mt-3">
                 <label class="control-label">Pickup Date</label>
                 <input type="text" class="form-control" id="pickup-at" name="pickup_at" placeholder="Pickup date (dd/mm/YYYY)">
               </div>

               <div class="form-group col-md-12 mt-3">
                 <button class="btn btn-primary" id="add-tracking-submit">SUBMIT</button>
               </div>
           </div>

           
         </form>
        </main>
      </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\dgs-couriers\resources\views/add-tracking.blade.php ENDPATH**/ ?>