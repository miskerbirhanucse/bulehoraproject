
<?php $__env->startSection('dashboard-content'); ?>
<?php if(Session::get('deleted')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
    <strong><?php echo e(Session::get('deleted')); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<?php if(Session::get('delete-faild')): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
    <strong><?php echo e(Session::get('delete-failed')); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\New folder\project\resources\views/admin/updaterole.blade.php ENDPATH**/ ?>