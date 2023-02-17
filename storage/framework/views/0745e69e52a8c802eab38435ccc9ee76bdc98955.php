<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <style>
table {
  border-collapse: collapse;
  width: 100%;
}

tr {
  border-bottom: 1px solid #ddd;
}
</style>

  </head>
  
  <body style="background-color:#C6C6C6; color:black;">
  
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">

    <div class="container" align="center"><br><br>
    <h1 style="color:black;" class="title">List of Products</h1><br>


    <?php if(session()->has('message')): ?>

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">x</button>

<?php echo e(session()->get('message')); ?>


</div>

    <?php endif; ?>

    <table>
        <tr style="background-color:gray;">
        <th style="padding:20px;">#</th>
        <th style="padding:20px;">Title</th>
        <th style="padding:20px;">Description</th>
        <th style="padding:20px;">Quantity</th>
        <th style="padding:20px;">Price</th>
        <th style="padding:20px;">Image</th>
        <th style="padding:20px;">Update</th>
        <th style="padding:20px;">Delete</th>
</tr>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($product->title); ?></td>
        <td><?php echo e($product->description); ?></td>
        <td><?php echo e($product->quantity); ?></td>
        <td><?php echo e($product->price); ?></td>
        <td>
            <img height="100px" width="100px" src="/productimage/<?php echo e($product->image); ?>">
        </td>

        <td>
            <a class="btn btn-primary" href="<?php echo e(url('updateview', $product->id)); ?>">Update</a>
        </td>
        <td>
            <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo e(url('deleteproduct', $product->id)); ?>">Delete</a>
        </td>
</tr>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>


    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/admin/showproduct.blade.php ENDPATH**/ ?>