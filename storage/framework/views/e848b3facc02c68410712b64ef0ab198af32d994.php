<?php if(session()->has('user')): ?>
    <?php echo e(View:: make('menu')); ?>

<?php else: ?>
    <?php echo $__env->yieldContent('login'); ?>
<?php endif; ?><?php /**PATH /Users/nurulaziraamirullah/project/resources/views/header.blade.php ENDPATH**/ ?>