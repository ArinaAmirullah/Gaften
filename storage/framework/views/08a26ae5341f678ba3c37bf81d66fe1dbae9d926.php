
<?php if(Session::has('success')): ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> <?php echo e(session('success')); ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Success!</strong> <?php echo e(session('error')); ?>

     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?><?php /**PATH /Users/nurulaziraamirullah/project/resources/views/alert.blade.php ENDPATH**/ ?>