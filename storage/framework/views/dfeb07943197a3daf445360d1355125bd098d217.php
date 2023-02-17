<?php echo e(View:: make('title')); ?>


<?php if(!empty($users)): ?>

      <h2 text-align: center;>User Details</h2>
      <br><br>
      <?php echo $__env->make('alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="table-responsive">
    <table class="table table-striped table-sm">
    <div>
    
    <tbody>
  
            <tr>
              <td><b>Full Name</b><br><?php echo e($users->name); ?></td>
              <td><b>Email</b><br><?php echo e($users->email); ?></td>
            </tr>
            <tr>
              <td><b>Phone Number</b><br><?php echo e($users->phone); ?></td>
              <td><b>Date of Birth</b><br><?php echo e($users->date); ?></td>
            </tr>
            <tr>
              <td><b>Address</b><br><?php echo e($users->address); ?></td>
            </tr>
           

          </tbody>
    </table>
   

    <button class="w-30 py-2 mb-2 btn btn-outline-dark rounded-3" type="button" onclick="window.location='/userlist'">Cancel</button>
    <button class="w-30 py-2 mb-2 btn btn-outline-primary rounded-3" type="button" onclick="window.location='/useredit?rid=<?php echo e($users->id); ?>'">Edit</button>
</form>
</div>

<?php else: ?> 
    No Record Found

<?php endif; ?>
    
<?php echo e(View:: make('footer')); ?>

            <?php /**PATH /Users/nurulaziraamirullah/project/resources/views/userview.blade.php ENDPATH**/ ?>