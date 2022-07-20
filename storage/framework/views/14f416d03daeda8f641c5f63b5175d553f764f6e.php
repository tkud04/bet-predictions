

<?php $__env->startSection('title',"Contact Us"); ?>

<?php $__env->startSection('content'); ?>
<section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="region-contact-info team-detail-info">
                                        <div class="heading2">
                                            <span>Fast And Safe</span>
                                            <h3>OFFICE ADDRESS</h3>
                                        </div>
                                        <p>Transport logitec, ltd. 2258 millenioum Street Columbia, DK 85966</p>
                                        <div class="contact-detail">
                                            <span class="contact">
                                                <i class="fa fa-mobile"></i>
                                                <strong>Phone No</strong>
                                                <span>+858 5549 512</span>
                                            </span>
                                            <span class="contact">
                                                <i class="fa fa-envelope"></i>
                                                <strong>Email Address</strong>
                                                <span>info@transport@gmail.com</span>
                                            </span>
                                            <span class="contact">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Office Timing</strong>
                                                <span>10:00am - 06:00pm / Sunday: Close</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="get-quote-form contact-info-form">
                                        <div class="heading2">
                                            <span>Fast And Safe</span>
                                            <h3>GET IN TOUCH</h3>
                                        </div>
                                        <p>Fill The Form Bellow. And Get In Touch Immeditily</p>
                                        <div class="contactform">
                                            <div id="message"></div>
                                            <form id="contactform" method="post" action="<?php echo e(url('contact')); ?>">
                                                <?php echo csrf_field(); ?>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" placeholder="Complete Name" class="text-field input-style" id="name" name="name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" placeholder="Email Address" id="email" name="email" class="text-field input-style">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Subject" id="subject" name="subject" class="text-field input-style">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Description" class="text-field input-style" id="description" name="description"></textarea>
                                                    </div>
                                                    <div class="col-md-12"><div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2&amp;co=aHR0cHM6Ly9odG1sLndlYmluYW5lLmNvbTo0NDM.&amp;hl=en&amp;v=M-QqaF9xk6BpjLH22uHZRhXt&amp;size=normal&amp;cb=qv4ba36tcamk" width="304" height="78" role="presentation" name="a-nny3t0bz8js6" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div></div>
                                                    <div class="col-md-12">
                                                        <button id="quote-btn" title="" itemprop="url" type="submit" class="theme-btn"><i class="fa fa-paper-plane"></i>Contact Now</button>
                                                        <img src="images/ajax-loader.gif" class="loader" alt="">
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repos\dgs-couriers\resources\views/contact.blade.php ENDPATH**/ ?>