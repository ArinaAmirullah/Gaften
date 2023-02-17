<?php echo e(View:: make('title')); ?>


<style>
a,a:hover
{
    text-decoration:none;
}
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

      <h2 text-align: center;>Product List</h2>
      <br><br>

      <?php echo $__env->make('alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="table-responsive">
        <table class="table table-striped table-sm">

<?php if(count($listofproduct)): ?>
    <thead>
        <tr>
            <th>#</th>       
            <th>Product Name</th>
            <th>Category</th>  
            <th>Description</th>           
            <th>Size</th>       
            <th>Create Date</th>
            <th>Update Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $listofproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>             
            <td><?php echo e($product->pname); ?></td>
            <td><?php echo e($product->category); ?></td>   
            <td><?php echo e($product->desc); ?></td>            
            <td><?php echo e($product->size); ?></td>
            <td><?php echo e($product->created_at ? date('D, d F Y',strtotime($product->created_at)) : 'N/A'); ?></td>
            <td><?php echo e($product->updated_at ? date('D, d F Y',strtotime($product->updated_at)) : 'N/A'); ?></td>
            <td><a class="material-symbols-outlined" href="/productview?rid=<?php echo e($product->id); ?>" style="text-decoration:none">visibility
            </a>
            <a class="material-symbols-outlined" href="/productedit?rid=<?php echo e($product->id); ?>">Edit</a>
            <a class="material-symbols-outlined" href="/productdelete?rid=<?php echo e($product->id); ?>">Delete</a>
            </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <style>
            .h-5 {
                height: 1em;
            }
             .flex {
                text-align: center;
                width: 100%;
            }
            .leading-5 {
                padding: 0.8em;
            }
        </style>
        <tr><td colspan=7>
        <?php echo e($listofproduct->appends(['q' => Request::get('q')])->links()); ?>

        </td></tr>
    </tbody>
    <?php else: ?>
    <td>No Record Found</td>
    <?php endif; ?>
</table>
<?php echo e(View:: make('footer')); ?><?php /**PATH /Users/nurulaziraamirullah/project/resources/views/control.blade.php ENDPATH**/ ?>