

<?php $__env->startSection('dashboard-content'); ?>
<form class="form-inline" action="/storerole/<?php echo e($userId); ?>" method="post">
  <?php echo csrf_field(); ?>
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Role for the User</label>
  <select class="custom-select my-1 mr-sm-2" name="role" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    <option value="admin">Admin</option>
    <option value="dean ">Dean</option>
    <option value="head">Head</option>
    <option value="lab_assistacne">Lab_assistance</option>
  </select>
  <button type="submit" class="btn btn-primary my-1">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\New folder\project\resources\views/admin/editRole.blade.php ENDPATH**/ ?>