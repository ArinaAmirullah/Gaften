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

      <h2 text-align: center;>User Account</h2>
      <br><br>

      <?php echo $__env->make('alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="table-responsive">
        <table class="table table-striped table-sm">

<?php if(count($listofuser)): ?>
    <thead>
        <tr>
            <th>#</th>       
            <th>Full Name</th>
            <th>Email</th>  
            <th>Date of Birth</th>           
            <th>Phone Number</th>       
            <th>Create Date</th>
            <th>Update Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listofuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>             
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>   
            <td><?php echo e($user->date? date('d M Y',strtotime($user->date)) : 'N/A'); ?></td>              
            <td><?php echo e($user->phone); ?></td>
            <td><?php echo e($user->created_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A'); ?></td>
            <td><?php echo e($user->updated_at ? date('D, d F Y',strtotime($user->updated_at)) : 'N/A'); ?></td>
            <td><a class="material-symbols-outlined" href="/userview?rid=<?php echo e($user->id); ?>" style="text-decoration:none">visibility
            </a>
            <a class="material-symbols-outlined" href="/useredit?rid=<?php echo e($user->id); ?>">Edit</a>
            <a class="material-symbols-outlined" href="/userdelete?rid=<?php echo e($user->id); ?>">Delete</a>
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
        <?php echo e($listofuser->appends(['q' => Request::get('q')])->links()); ?>

        </td></tr>
    </tbody>
    <?php else: ?>
    <td>No Record Found</td>
    <?php endif; ?>
</table>
<?php echo e(View:: make('footer')); ?><?php /**PATH /Users/nurulaziraamirullah/project/resources/views/myaccount.blade.php ENDPATH**/ ?>