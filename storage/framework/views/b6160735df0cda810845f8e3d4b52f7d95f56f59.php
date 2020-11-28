
<?php $__env->startSection('dashboard-content'); ?>
<h6>User Profile</h6>
<form action="/updateprofile/<?php echo e(auth()->user()->id); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group row">
        <label for="inputUser3" class="col-sm-2 col-form-label text-md-right">User Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputUser3" name="name" placeholder="Email" value="<?php echo e($user->name); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label text-md-right">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="mail" placeholder="Email" value="<?php echo e($user->email); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

        <div class="col-sm-10">
            <input id="password" type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-sm-2 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

        <div class="col-sm-10">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail4" class="col-sm-2 col-form-label text-md-right">Phone Number</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="phone" id="inputEmail4" placeholder="Phone number" value="<?php echo e($user->phone_number); ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\New folder\project\resources\views/profile/viewProfile.blade.php ENDPATH**/ ?>