<?php
$void = 'javascript:void(0)';
$statuses = ['none' => "Select status", 'station' => "ARRIVED AT STATION", 'hold' => "ON HOLD", 'transit' => "IN TRANSIT", 'delivery' => "OUT FOR DELIVERY", 'delivered' => "DELIVERED"];
?>


<?php $__env->startSection('title',"Tracking History"); ?>


<?php $__env->startSection('content'); ?>
<section class="block">
<div class="container">
      <div class="row">
        <?php echo $__env->make('_admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <?php echo $__env->make('_admin-header',['title' => "Tracking History for #".$tnum,'btn' => "<a href='#add-history' class='btn btn-primary'>Add History</a>"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <div class="table-responsive">
            <table class="table table-striped table-sm data-table">
            <thead>
                                           <tr>
                                             <th>Tracking #</th>
						                     <th>Location</th>
						                     <th>Status</th>
						                     <th>Date/Time</th>
						                     <th>Remarks</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                          <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						                  <tr>
						                    <td><?php echo e($h['tnum']); ?></td>
						                    <td><?php echo e($h['location']); ?></td>
						                    <td><?php echo e($statuses[$h['status']]); ?></td>
						                    <td><?php echo e($h['date']); ?></td>
						                    <td><?php echo e($h['remarks']); ?></td>
						                  </tr>
						                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
            </table>
          </div>

          <div class="row mt-5" id="add-history">
              <form id="add-tracking-history-form" method="post" action="add-tracking-history">
                  <?php echo csrf_field(); ?>

                  <input type="hidden" name="tnum" value="<?php echo e($tnum); ?>"/>

                  <div class="row">
              <div class="mb-3 form-group col-md-12">
               <h2 class="">Add Tracking History</h2>
			   </div>
               <div class="form-group col-md-6">
                 <label class="control-label">Location</label>
                 <input type="text" class="form-control" id="h-location" name="location" placeholder="Location">
               </div>
               <div class="form-group col-md-6">
                 <label class="control-label">Status</label>
                 <select class="form-control" id="h-status" name="status">
                     <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
               </div>
               <div class="form-group col-md-12 mt-3">
                 <label class="control-label">Remarks</label>
                 <textarea class="form-control" id="h-remarks" name="remarks" placeholder="Remarks"></textarea>
               </div>
               <div class="form-group col-md-12 mt-3">
                 <button class="btn btn-primary" id="add-tracking-history-submit">SUBMIT</button>
               </div>
           </div>
              </form>
          </div>
        </main>
      </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\dgs-couriers\resources\views/tracking-history.blade.php ENDPATH**/ ?>