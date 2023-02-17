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
    <h1 style="color:black;" class="title">List of Users</h1><br>


    <?php if(session()->has('message')): ?>

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">x</button>

<?php echo e(session()->get('message')); ?>


</div>

    <?php endif; ?>

    <table>
        <tr style="background-color:gray;">
        <th style="padding:20px;">#</th>
        <th style="padding:20px;">Full Name</th>
        <th style="padding:20px;">Email</th>
        <th style="padding:20px;">Date of Birth</th>
        <th style="padding:20px;">Phone Number</th>
        <th style="padding:20px;">Create Date</th>
        <th style="padding:20px;">Update Date</th>
</tr>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
            <td><?php echo e($loop->iteration); ?></td>             
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>   
            <td><?php echo e($user->date? date('d M Y',strtotime($user->date)) : 'N/A'); ?></td>              
            <td><?php echo e($user->phone); ?></td>
            <td><?php echo e($user->created_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A'); ?></td>
            <td><?php echo e($user->updated_at ? date('D, d F Y',strtotime($user->updated_at)) : 'N/A'); ?></td>
</tr>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>


    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>


<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/admin/showuser.blade.php ENDPATH**/ ?>