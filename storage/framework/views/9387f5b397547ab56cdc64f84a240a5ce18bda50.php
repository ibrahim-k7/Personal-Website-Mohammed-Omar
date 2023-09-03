

<?php $__env->startSection('content'); ?>
 welcome <?php echo e(Auth::guard('admin')->user()->name); ?>   
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mohammed-omar-la\resources\views/admin/home.blade.php ENDPATH**/ ?>