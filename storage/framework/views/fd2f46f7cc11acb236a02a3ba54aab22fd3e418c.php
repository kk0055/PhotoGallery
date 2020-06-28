

<?php $__env->startSection('content'); ?>
<div class="container">
<h2>Upload new photos</h2>
<form method="post" action="<?php echo e(route('photo-store')); ?>"enctype="multipart/form-data" >
  <?php echo csrf_field(); ?>
  <input type="hidden" name="album-id" value="<?php echo e($albumId); ?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="name"  placeholder="Enter title" name="title">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description"  placeholder="Enter description">
  </div>

  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo"  >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\photoshow\resources\views/photos/create.blade.php ENDPATH**/ ?>