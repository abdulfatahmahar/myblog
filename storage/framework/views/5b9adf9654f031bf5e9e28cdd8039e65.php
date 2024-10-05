
<?php $__env->startSection('contact-page'); ?>
        <!-- start contact Section -->
        <section>
            <div class="container">
                <div class="row">

                    <!--  start contact left-->
                    <div class="col-lg-8 col-md-12 sm-margin-50px-bottom">
                        <div>
                            <h5 class="font-size24">Contact Us</h5>
                            <div class="margin-30px-bottom">
                                <iframe class="map" id="gmap_canvas" src="https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                            <ul class="list-style-1 margin-30px-bottom">
                                <li>
                                    <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-map-marker-alt text-theme-color"></i></span>
                                    <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">74 Hyderabad Street 542B, Great North Town MT.</span>
                                </li>
                                <li>
                                    <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-phone text-theme-color"></i></span>
                                    <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">+92 0312 3331 491</span>
                                </li>
                                <li>
                                    <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-envelope text-theme-color"></i></span>
                                    <span class="d-inline-block width-65 sm-width-85 vertical-align-top padding-10px-left">abdulfatahmahar9@gmail.com</span>
                                </li>
                            </ul>
                            <h6 class="font-size20 font-weight-500">Keep In Touch:</h6>
                <form action="<?php echo e(route('insert_contact_data')); ?>" method="post">
              <?php echo csrf_field(); ?>
                            <div class="row">
                                
                                <div class="form-group col-md-6">
                            <input type="text" class="form-control no-margin-bottom padding-10px-tb" name="name" id="exampleInputName" placeholder="Your Name" value="<?php echo e(old('name')); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span style="color:red;"><?php echo e($message); ?></span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
                                </div>
                                <div class="form-group col-md-6">
                    <input type="text" class="form-control no-margin-bottom padding-10px-tb" name="email" id="exampleInputEmail" placeholder="Email" value="<?php echo e(old('email')); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span style="color:red;"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-md-12">
                    <input type="text" class="form-control no-margin-bottom padding-10px-tb" name="subject" id="exampleInputTitle" placeholder="Subject Title" value="<?php echo e(old('subject')); ?>">
                              <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span style="color:red;"><?php echo e($message); ?></span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Message" name="message"></textarea>
                                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span style="color:red;"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="butn"><span>submit message</span></button>
                                </div> 
                            </div>
                        </form>
                        </div>
                    </div>
                    <!--  end contact left-->

                   

                </div>
            </div>
        </section>
        <!-- end contact section -->

        <!-- start portfolio section -->
        <section class="no-padding">
            <div class="container-fluid no-padding">
                <div class="owl-carousel owl-theme" id="portfolio-carousel">
                    <div class="insta-photo">
                        <a href="#">
                            <img src="<?php echo e(url('style/img/portfolio/1.jpg')); ?>" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="<?php echo e(url('style/img/portfolio/2.jpg')); ?>" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="<?php echo e(url('style/img/portfolio/3.jpg')); ?>" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="<?php echo e(url('style/img/portfolio/4.jpg')); ?>" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="<?php echo e(url('style/img/portfolio/5.jpg')); ?>" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="<?php echo e(url('style/img/portfolio/6.jpg')); ?>" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="<?php echo e(url('style/img/portfolio/7.jpg')); ?>" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="<?php echo e(url('style/img/portfolio/8.jpg')); ?>" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->

       <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myblog\resources\views/contact-us.blade.php ENDPATH**/ ?>