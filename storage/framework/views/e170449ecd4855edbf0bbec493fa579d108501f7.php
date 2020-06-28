

<?php $__env->startSection('content'); ?>
<section class="jumbotron text-center">
  <div class="container">
    <h1><?php echo e($album->name); ?> </h1>
    <p class="lead text-muted"><?php echo e($album->description); ?> </p>
    <p>
      <a href="<?php echo e(route('photo-create',$album->id)); ?>" class="btn btn-primary my-2">Upload Photo</a>
      <a href="/" class="btn btn-secondary my-2">Go Back</a>
    </p>
  </div>
</section>

<div class="container">
<?php if(count($album->photos) > 0 ): ?>
<?php $__currentLoopData = $album->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-4 shadow-sm">
<img src=/storage/albums/<?php echo e($album->id); ?>/<?php echo e($photo->photo); ?>  " alt="<?php echo e($photo->photo); ?>" height="200px" width="300px">
  <div class="card-body">
    <p class="card-text"><?php echo e($photo->description); ?></p>
    <div class="d-flex justify-content-between align-items-center">
      <div class="btn-group">
      <a href="<?php echo e(route('photo-show', $photo->id)); ?>" button type="button" class="btn btn-sm btn-outline-secondary">View</a>
      
      </div>
      <small class="text-muted"><?php echo e($photo->size); ?></small>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<h3>No photos yet</h3>

<?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\photoshow\resources\views/albums/show.blade.php ENDPATH**/ ?>