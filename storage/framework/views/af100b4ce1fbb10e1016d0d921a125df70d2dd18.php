<?php echo e(View:: make('title')); ?>


<h2 text-align: center;>Edit Product</h2>

<?php if(!empty($products)): ?>
<form action ="productedit?rid=<?php echo e($products->id); ?>" method="post">
<?php echo csrf_field(); ?> 
    <div class="modal-body p-5 pt-0">
              <form class="">
                <div class="form-floating mb-3">
                  <td>Product Name</td> 
                  <input maxlength="100" value="<?php echo e($products->pname); ?>" type="text"  name="productname" class="form-control rounded-3" id="floatingInput" placeholder="Product Name">
                  <label for="floatingInput"></label>
                </div>
                <div class="form-floating mb-3">
                      <td>Category</td>            
                  <input maxlength="100" value="<?php echo e($products->category); ?>" type="text"  name="category" class="form-control rounded-3" id="floatingInput" placeholder="category">
                  <label for="floatingInput"></label>
                </div>
                <div class="form-floating mb-3">
                      <td>Description</td>            
                  <input maxlength="250" value="<?php echo e($products->desc); ?>" type="desc"  name="desc" class="form-control rounded-3" id="floatingInput" placeholder="Description">
                  <label for="floatingInput"></label>
                </div>
                <div class="form-floating mb-3">
                  <td>Price</td> 
                  <input maxlength="50" value="<?php echo e($products->price); ?>" type="text"  name="price" class="form-control rounded-3" id="floatingInput" placeholder="Price">
                  <label for="floatingInput"></label>
                </div>
                <div class="form-floating mb-3">
                  <td>Size</td> 
                  <input maxlength="50" value="<?php echo e($products->size); ?>" type="text"  name="size" class="form-control rounded-3" id="floatingInput" placeholder="Size">
                  <label for="floatingInput"></label>
                </div>
                <div class="form-floating mb-3">
                  <td>Colour</td> 
                  <input maxlength="50" value="<?php echo e($products->colour); ?>" type="text"  name="colour" class="form-control rounded-3" id="floatingInput" placeholder="Colour">
                  <label for="floatingInput"></label>
                </div>
                
    <button class="w-30 py-2 mb-2 btn btn-outline-dark rounded-3" type="button" onclick="javascript:history.back()">Cancel</button>
    <button class="w-30 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">Save changes</button>
</form>
</div>

<?php else: ?> 
    No Record Found

<?php endif; ?>
    
<?php echo e(View:: make('footer')); ?>

            <?php /**PATH /Users/nurulaziraamirullah/project/resources/views/productedit.blade.php ENDPATH**/ ?>