
<?php $__env->startSection('dashboard-content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User Manage Role DataTable</h6>
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
                        <a href="/changerole/<?php echo e($user->id); ?>" class="btn btn-primary btn-sm"> Change Role</a>
                    </th>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<!-- modal -->
<!-- <div class="container">
    <?php if(session('success')): ?>
    <h1><?php echo e(session('success')); ?></h1>
    <?php endif; ?>
    <form method="POST" action="/changeRole">
        <?php echo e(csrf_field()); ?>

        <div class="form-group row">
            <div class="col-sm-8">
                <select class="form-control" id="selectUser" name="user_selected" required focus>
                    <option value="" disabled selected>Please select user role</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="Admin">Admin</option>
                    <option value="Admin">Dean</option>
                    <option value="Admin">Head</option>
                    <option value="Admin">Lab_assistance</option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <label class="col-sm-4 col-form-label" id="displayUser">Show selected User Role
                here</label>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form> -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\New folder\project\resources\views/admin/managerole.blade.php ENDPATH**/ ?>