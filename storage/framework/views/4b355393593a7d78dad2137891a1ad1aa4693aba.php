
<?php $__env->startSection('dashboard-content'); ?>
<h2>view material</h2>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">material information table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Item Number</th>
                        <th>Description</th>
                        <th>BId</th>
                        <th>User Name</th>
                        
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($material->id); ?></th>
                    <th><?php echo e($material->item_no); ?></th>
                    <th><?php echo e($material->BID); ?></th>
                    <th><?php echo e($material->brief_description_of_good_or_related_service); ?></th>
                    <th><?php echo e($material->user->name); ?></th>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\New folder\project\resources\views/material/view.blade.php ENDPATH**/ ?>