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

    <div class="container-fluid page-body-wrapper">

<div class="container" align="center"><br><br>
<h1 style="color:black;" class="title">List of Orders</h1><br>

<table>

<tr style="background-color:grey;">
    <td style="padding:20px;">#</td>
    <td style="padding:20px;">Customer Name</td>
    <td style="padding:20px;">Phone Number</td>
    <td style="padding:20px;">Address</td>
    <td style="padding:20px;">Product Title</td>
    <td style="padding:20px;">Price</td>
    <td style="padding:20px;">Quantity</td>
    <td style="padding:20px;">Status</td>
    <td style="padding:20px;">Action</td>
</tr>

<?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr align="center">
    <td style="padding:20px;"><?php echo e($loop->iteration); ?></td>
    <td style="padding:20px;"><?php echo e($orders->name); ?></td>
    <td style="padding:20px;"><?php echo e($orders->phone); ?></td>
    <td style="padding:20px;"><?php echo e($orders->address); ?></td>
    <td style="padding:20px;"><?php echo e($orders->product_name); ?></td>
    <td style="padding:20px;" style="padding:20px;"><?php echo e($orders->price); ?></td>
    <td style="padding:20px;"><?php echo e($orders->quantity); ?></td>
    <td style="padding:20px;"><?php echo e($orders->status); ?></td>
    <td style="padding:20px;">
        <a class="btn btn-success" href="<?php echo e(url('updatestatus',$orders->id)); ?>">Delivered</a>
    </td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

</div>
</div>

    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>

<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/admin/showorder.blade.php ENDPATH**/ ?>