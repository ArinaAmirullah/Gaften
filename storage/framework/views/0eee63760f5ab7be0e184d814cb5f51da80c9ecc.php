<!DOCTYPE html>
<html lang="en">
  <head>

  <style type="text/css">

.title {
    color:white; 
    padding-top: 25px; 
    font-size: 25px;
  }

label {
  display: inline-block;
  width:200px;

}

  </style>


  <base href="/public">

  <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
  
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid page-body-wrapper">

<div class="container" align="center">
<h1 style="color:black;" class="title">Edit Product</h1><br>

<?php if(session()->has('message')): ?>

<div class="alert alert-success">

<button type="button" class="close" data-dismiss="alert">x</button>

<?php echo e(session()->get('message')); ?>


</div>

<?php endif; ?>

<form action="<?php echo e(url('updateproduct',$data->id)); ?>" method="post" enctype="multipart/form-data">

<?php echo csrf_field(); ?>

<div style="padding:15px;">
  <label>Product title : </label>

  <input style="color:black;" type="text" name="title" value="<?php echo e($data->title); ?>" required="">
</div><br>
<div style="padding:15px;">
  <label>Price : </label>

  <input style="color:black;" type="number" name="price" value="<?php echo e($data->price); ?>" required="">
</div><br>
<div style="padding:15px;">
  <label>Description : </label>

  <input style="color:black;" type="text" name="des" value="<?php echo e($data->description); ?>" required="">
</div><br>
<div style="padding:15px;">
  <label>Quantity : </label>

  <input style="color:black;" type="text" name="quantity" value="<?php echo e($data->quantity); ?>" required="">
</div><br>
<div style="padding:15px;">
  <label>Old Image : </label>

  <img height="100" width="100" src="/productimage/<?php echo e($data->image); ?>">
</div><br>

<div style="padding:15px;">

<label>Change the image</label>
<input type="file" name="file">

<div style="padding:15px;">
<input class="btn btn-success" type="submit">

</form>
</div>


</div>
</div>


    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/admin/updateview.blade.php ENDPATH**/ ?>