<?php
$void = 'javascript:void(0)';
?>


<?php $__env->startSection('title',"Add Plugin"); ?>


<?php $__env->startSection('content'); ?>
<section class="block">
<div class="container">
      <div class="row">
        <?php echo $__env->make('_admin-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <?php echo $__env->make('_admin-header',['title' => "Add New Plugin"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         
         <form id="add-plugin-form" action="<?php echo e(url('add-plugin')); ?>" method="post">
           <?php echo csrf_field(); ?>

           <div class="row">
              <div class="form-group mb-3 col-md-12">
                 <label class="control-label">Name</label>
                 <input type="text" class="form-control" id="pname" name="name" placeholder="Friendly name for the plugin">
               </div>
               <div class="form-group col-md-12">
                 <label class="control-label">Value</label>
                 <textarea class="form-control" id="pvalue" name="value" placeholder="Plugin content" rows="15"></textarea>
               </div>
           </div>

           <div class="row mt-5">
               <div class="form-group col-md-12 mt-3">
                 <button class="btn btn-primary" id="add-plugin-submit">SUBMIT</button>
               </div>
           </div>

           
         </form>
        </main>
      </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\dgs-couriers\resources\views/add-plugin.blade.php ENDPATH**/ ?>