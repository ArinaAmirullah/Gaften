<?php echo e(View:: make('title')); ?>


<?php if(!empty($products)): ?>

      <h2 text-align: center;>Product Details</h2>
      <br><br>
      <?php echo $__env->make('alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="table-responsive">
    <table class="table table-striped table-sm">
    <div>
    
    <tbody>
  
            <tr>
              <td><b>Product Name</b><br><?php echo e($products->pname); ?></td>
              <td><b>Category</b><br><?php echo e($products->category); ?></td>
            </tr>
            <tr>
              <td><b>Price</b><br><?php echo e($products->price); ?></td>
              <td><b>Size</b><br><?php echo e($products->size); ?></td>
            </tr>
            <tr>
              <td><b>Colour</b><br><?php echo e($products->colour); ?></td>
            </tr>
           

          </tbody>
    </table>
   

    <button class="w-30 py-2 mb-2 btn btn-outline-dark rounded-3" type="button" onclick="window.location='/productlist'">Cancel</button>
    <button class="w-30 py-2 mb-2 btn btn-outline-primary rounded-3" type="button" onclick="window.location='/productedit?rid=<?php echo e($products->id); ?>'">Edit</button>
</form>
</div>

<?php else: ?> 
    No Record Found

<?php endif; ?>
    
<?php echo e(View:: make('footer')); ?>

            <?php /**PATH /Users/nurulaziraamirullah/project/resources/views/productview.blade.php ENDPATH**/ ?>