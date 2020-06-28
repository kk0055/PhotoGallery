

<?php $__env->startSection('content'); ?>
<div class="container">
<h2>Create New Album</h2>
<form method="post" action="<?php echo e(route('album-store')); ?>"enctype="multipart/form-data" >
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  placeholder="Enter name" name="name">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description"  placeholder="Enter description">
  </div>

  <div class="form-group">
    <label for="cover-image">Cover Image</label>
    <input type="file" class="form-control" id="cover-image" name="cover-image"  >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\photoshow\resources\views/albums/create.blade.php ENDPATH**/ ?>