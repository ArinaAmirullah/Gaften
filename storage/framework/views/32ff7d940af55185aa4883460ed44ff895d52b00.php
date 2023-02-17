<?php echo e(View:: make('title')); ?>

<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: auto;
}
</style>

<h2 text-align: center;>Add Product</h2><br>

<form action="/add" method="post">
<?php echo csrf_field(); ?>
<div class="form-floating">
<td>Product Name</td> 
      <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Product Name" name="pname" required>
    </div><br>

    <div class="form-floating">
    <td>Category</td> 
      <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Category" name="category" required>
    </div><br>

    <div class="form-floating">
    <td>Description</td> 
      <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Description" name="desc" required>
    </div><br>

    <div class="form-floating">
    <td>Price</td> 
      <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Price" name="price" required>
    </div><br>

    <div class="form-floating">
    <td>Size</td> 
      <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Size" name="size" required>
    </div><br>

    <div class="form-floating">
    <td>Colour</td> 
      <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Colour" name="colour" required>
    </div><br>

    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Add</button>
    <br>
</form>

<?php echo e(View:: make('footer')); ?>



    
            <?php /**PATH /Users/nurulaziraamirullah/project/resources/views/add.blade.php ENDPATH**/ ?>