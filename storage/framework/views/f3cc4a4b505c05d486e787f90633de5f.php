<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('about-page'); ?>
<?php echo $__env->yieldContent('contact-page'); ?>
<?php echo $__env->yieldContent('gallery-page'); ?>
<?php echo $__env->yieldContent('index-page'); ?>
<?php echo $__env->yieldContent('magazine-page'); ?>
<?php echo $__env->yieldContent('portfolio-page'); ?>
<?php echo $__env->yieldContent('single-portfolio-page'); ?>
<?php echo $__env->yieldContent('standard-page'); ?>
<?php echo $__env->yieldContent('video-post-page'); ?>



<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myblog\resources\views/layout/main.blade.php ENDPATH**/ ?>