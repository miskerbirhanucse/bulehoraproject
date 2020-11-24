<?php $__env->startSection('dashboard-content'); ?>







<?php if(session('status')): ?>

<?php echo e(session('status')); ?>


<?php endif; ?>

<?php echo e(__('You are logged in!')); ?>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\New folder\project\resources\views/home.blade.php ENDPATH**/ ?>