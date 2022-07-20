 <div class="row">
                      <div class="col-md-12">
                   <div class="alert alert-danger" role="alert">
                       <p><strong>Whoops!</strong> There were some problems with your input.</p>
                       <button class="close" data-dismiss="alert">x</button>
                       <div class="clearfix"></div>
                       <br>
                       <ul>                       	
                       	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($error == "The g-recaptcha-response field is required."): ?>
							    <li>You must fill the captcha to continue.</li>
						      <?php else: ?>
						        <li><?php echo e($error); ?></li>
						      <?php endif; ?>
						   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </ul>
                     </div>
                   </div>
                 </div><?php /**PATH C:\repos\dgs-couriers\resources\views/input-errors.blade.php ENDPATH**/ ?>