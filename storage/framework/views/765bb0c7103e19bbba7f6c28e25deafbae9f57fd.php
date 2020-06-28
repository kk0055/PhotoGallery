

<?php $__env->startSection('content'); ?>
<div class="container">
<h3><?php echo e($photo->title); ?> </h3>
<p><?php echo e($photo->description); ?> </p>

<form action="<?php echo e(route('photo-destroy',$photo->id)); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" name="button" class="btn btn-danger float-right">DELETE</button>
</form>
<a href="<?php echo e(route('album-show', $photo->album->id)); ?>" class="btn btn-info ">Go back</a>
<br>
<small>Size::<?php echo e($photo->size); ?></small>
<hr>

<img src="/storage/albums/<?php echo e($photo->album_id); ?>/<?php echo e($photo->photo); ?> " alt="<?php echo e($photo->photo); ?>">
<hr>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\photoshow\resources\views/photos/show.blade.php ENDPATH**/ ?>