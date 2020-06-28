<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
<a class="nav-link <?php echo e(Request::is('/') ?'active' : ''); ?> " href="/">Home</a>
</li>

<li class="nav-item <?php echo e(Request::is('/albums/create') ?'active' : ''); ?> ">
  <a class="nav-link" href=<?php echo e(route('album-create')); ?> >Create Album</a>
  </li>
</ul>
</div>
</nav><?php /**PATH C:\xampp\htdocs\photoshow\resources\views/inc/navbar.blade.php ENDPATH**/ ?>