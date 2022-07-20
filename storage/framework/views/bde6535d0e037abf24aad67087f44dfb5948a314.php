<?php
$void = 'javascript:void(0)';
$statuses = ['none' => "Select status", 'station' => "ARRIVED AT STATION", 'hold' => "ON HOLD", 'transit' => "IN TRANSIT", 'delivery' => "OUT FOR DELIVERY", 'delivered' => "DELIVERED"];
?>


<?php $__env->startSection('title',"Trackings"); ?>


<?php $__env->startSection('content'); ?>
<section class="block">
<div class="container">
      <div class="row">
        <?php echo $__env->make('_admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <?php echo $__env->make('_admin-header',['title' => "Trackings",'btn' => "<a href='add-tracking' class='btn btn-primary'>Add New Tracking</a>"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         
          <div class="table-responsive">
            <table class="table table-striped table-sm data-table">
              <thead>
                <tr>
                 <th>Transaction No.</th>
                  <th>Details</th>
                  <th>Shipper Information</th>
                  <th>Receiver Information</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                   foreach($trackings as $t)
                   {
                     $tu = url('tracking')."?xf=".$t['tnum'];
                     $ru = url('remove-tracking')."?xf=".$t['tnum'];
                     $shipper = $t['shipper'];
                     $receiver = $t['receiver'];
                  ?>
                <tr>
                  <td><?php echo e($t['tnum']); ?></td>
                  <td>
                    <ul class="no-dot">
                      <li>Ship Type: <?php echo e($t['stype']); ?></li>
                      <li>Weight: <?php echo e($t['weight']); ?>kg</li>
                      <li>Origin office: <?php echo e($t['origin']); ?></li>
                      <li>Destination office: <?php echo e($t['dest']); ?></li>
                    </ul>
                   </td>
                  <td>
                    <ul class="no-dot">
                      <li>Name: <?php echo e($shipper['name']); ?></li>
                      <li>Phone: <?php echo e($shipper['phone']); ?></li>
                      <li>Address: <?php echo e($shipper['address']); ?></li>
                    </ul>
                   </td>
                   <td>
                    <ul class="no-dot">
                      <li>Name: <?php echo e($receiver['name']); ?></li>
                      <li>Phone: <?php echo e($receiver['phone']); ?></li>
                      <li>Address: <?php echo e($receiver['address']); ?></li>
                    </ul>
                  </td>
                  <td><span class="badge bg-info"><?php echo e($statuses[$t['status']]); ?></span></td>
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo e($tu); ?>" class="btn btn-primary">View</a>
                      <a href="<?php echo e($ru); ?>" class="btn btn-danger">Remove</a>
                   </div>  
                  </td>
                </tr>
                <?php
                   }
                ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\dgs-couriers\resources\views/trackings.blade.php ENDPATH**/ ?>