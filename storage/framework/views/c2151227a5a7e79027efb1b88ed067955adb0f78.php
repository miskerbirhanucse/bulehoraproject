
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

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Approved</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($user->id); ?></th>
                    <th><?php echo e($user->name); ?></th>
                    <th><?php echo e($user->email); ?></th>
                    <th><?php echo e($user->approved == true ? 'Yes':'No'); ?></th>
                    <th><?php echo e($user->role->name); ?></th>
                   
                    <th>
                        <a href="<?php echo e(URL::to('/admin/aprove/')); ?>/<?php echo e($user->id); ?>" class="btn btn-success btn-sm"><?php echo e($user->approved==true?'Reject':'Approve'); ?> </a>|
                        <a href="<?php echo e(URL::to('edit-admin')); ?>/<?php echo e($user->id); ?>" class="btn btn-primary btn-sm"> Edit</a>|
                        <a href="<?php echo e(URL::to('delete-admin')); ?>/<?php echo e($user->id); ?>" class="btn btn-danger btn-sm"> Delete</a>
                    </th>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\New folder\project\resources\views/admin/manage.blade.php ENDPATH**/ ?>