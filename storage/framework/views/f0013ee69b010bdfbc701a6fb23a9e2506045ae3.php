<?php
 $t = isset($result['tracking']) ? $result['tracking'] : [];
 $shipper = isset($result['shipper']) ? $result['shipper'] : [];
 $receiver = isset($result['receiver']) ? $result['receiver'] : [];
 $history = isset($result['history']) ? $result['history'] : [];

 $bmodes = ['none' => "Select booking mode", 'paid' => "Paid", 'unpaid' => "Unpaid"];
 $statuses = ['none' => "Select status", 'station' => "ARRIVED AT STATION", 'hold' => "ON HOLD", 'transit' => "IN TRANSIT", 'delivery' => "OUT FOR DELIVERY", 'delivered' => "DELIVERED"];

?>
<section class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                        <div class="search-found">
                            <div class="search-bar">
                                <label>Track Another Package:</label>
                                <form>
                                    <input type="text" id="track-another-tnum" placeholder="Enter your tracking number">
                                    <button type="submit" id="track-another-submit" class="theme-btn mt-3"><i class="fa fa-paper-plane"></i> SUBMIT</button>
                                </form>
                                <h4>Result Found: <span>"<?php echo e($t['tnum']); ?>: <?php echo e($t['origin']); ?> office - <?php echo e($t['dest']); ?> office"</span></h4>
                            </div>
                            <div class="top-margin mb-5">
                            <div class="news-box news-list">
                                <div class="news-thumb">
                                        <a href="javascript:void(0)" title="" itemprop="url"><img itemprop="image" src="images/resource/search-found-post.jpg" alt=""></a>
                                </div>
                                <div class="news-detail">
                                    <h2 itemprop="headline"><a itemprop="url" href="javascript:void(0)" title="">Shipment Travel History</a></h2>
                                    <div class="row">
                                    <div class="col-md-12">
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
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="top-margin">
                                <div class="news-box news-list">
                                    <div class="news-thumb">
                                        <a href="javascript:void(0)" title="" itemprop="url"><img itemprop="image" src="images/resource/search-found-post.jpg" alt=""></a>
                                    </div>
                                    <div class="news-detail">
                                        <h2 itemprop="headline"><a itemprop="url" href="javascript:void(0)" title="">Tracking Information</a></h2>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <dl class="row">
                                           <dt class="col-md-3">Shipper name</dt>
                                           <dd class="col-md-9"><?php echo e($shipper['name']); ?></dd>
                                           <dt class="col-md-3">Shipper phone</dt>
                                           <dd class="col-md-9"><?php echo e($shipper['phone']); ?></dd>
                                           <dt class="col-md-3 mb-3">Shipper address</dt>
                                           <dd class="col-md-9 mb-3"><?php echo e($shipper['address']); ?></dd>

                                           <dt class="col-md-3">Receiver name</dt>
                                           <dd class="col-md-9"><?php echo e($receiver['name']); ?></dd>
                                           <dt class="col-md-3">Receiver phone</dt>
                                           <dd class="col-md-9"><?php echo e($receiver['phone']); ?></dd>
                                           <dt class="col-md-3 mb-3">Receiver address</dt>
                                           <dd class="col-md-9 mb-3"><?php echo e($receiver['address']); ?></dd>

                                           <dt class="col-md-3">Tracking #</dt>
                                           <dd class="col-md-9"><?php echo e($t['tnum']); ?></dd>
                                          
                                       </dl>
                                        </div>
                                        <div class="col-md-6">
                                        <dl class="row">
                                           <dt class="col-md-3">Ship Type</dt>
                                           <dd class="col-md-9"><?php echo e($t['stype']); ?></dd>
                                           <dt class="col-md-3 mb-3">Weight</dt>
                                           <dd class="col-md-9 mb-3"><?php echo e($t['weight']); ?>kg</dd>
                                           <dt class="col-md-3">Origin office</dt>
                                           <dd class="col-md-9"><?php echo e($t['origin']); ?></dd>
                                           <dt class="col-md-3">Destination office</dt>
                                           <dd class="col-md-9"><?php echo e($t['dest']); ?></dd>
                                           <dt class="col-md-3">Date issued</dt>
                                           <dd class="col-md-9"><?php echo e($t['date']); ?></dd>
                                           <dt class="col-md-3 mb-3">Pickup date</dt>
                                           <dd class="col-md-9 mb-3"><?php echo e($t['pickup_at']); ?></dd>
                                           <dt class="col-md-3">Booking mode</dt>
                                           <dd class="col-md-9"><span class="badge bg-primary"><?php echo e(strtoupper($t['bmode'])); ?></span></dd>
                                           <dt class="col-md-3">Total freight</dt>
                                           <dd class="col-md-9">$<?php echo e(number_format($t['freight'],2)); ?></dd>
                                       </dl>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>											
					</div>
				</div>
			</div>
		</section><?php /**PATH C:\repos\dgs-couriers\resources\views/tracking-found.blade.php ENDPATH**/ ?>