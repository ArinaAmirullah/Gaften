<?php echo e(View:: make('title')); ?>


<h2 text-align: center;>Edit User</h2>

<?php if(!empty($users)): ?>
<form action ="useredit?rid=<?php echo e($users->id); ?>" method="post">
<?php echo csrf_field(); ?> 
    <div class="modal-body p-5 pt-0">
              <form class="">
                <div class="form-floating mb-3">
                  <td>Full Name</td> 
                  <input maxlength="100" value="<?php echo e($users->name); ?>" type="text"  name="fullname" class="form-control rounded-3" id="floatingUsername" placeholder="Full Name">
                  <label for="floatingUsername"></label>
                </div>
                <div class="form-floating mb-3">
                      <td>Email</td>            
                  <input maxlength="100" value="<?php echo e($users->email); ?>" type="email"  name="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput"></label>
                </div>
                <div class="form-floating mb-3">
                      <td>Date of Birth</td>            
                  <input maxlength="50" value="<?php echo e($users->date); ?>" type="date"  name="date" class="form-control rounded-3" id="floatingInput" placeholder="Date">
                  <label for="floatingInput"></label>
                </div>
                <div class="form-floating mb-3">
                  <td>Password</td> 
                  <input maxlength="50" value="<?php echo e($users->password); ?>" type="text"  name="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword"></label>
                </div>
                <div class="form-floating mb-3">
                  <td>Address</td> 
                  <input maxlength="150" value="<?php echo e($users->address); ?>" type="text"  name="address" class="form-control rounded-3" id="floatingAddress" placeholder="Address">
                  <label for="floatingAddress"></label>
                </div>
                <div class="form-floating mb-3">
                  <td>Phone Number</td> 
                  <input maxlength="50" value="<?php echo e($users->phone); ?>" type="text"  name="phone" class="form-control rounded-3" id="floatingPhone" placeholder="Phone">
                  <label for="floatingPhone"></label>
                </div>
                
    <button class="w-30 py-2 mb-2 btn btn-outline-dark rounded-3" type="button" onclick="javascript:history.back()">Cancel</button>
    <button class="w-30 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">Save changes</button>
</form>
</div>

<?php else: ?> 
    No Record Found

<?php endif; ?>
    
<?php echo e(View:: make('footer')); ?>

            <?php /**PATH /Users/nurulaziraamirullah/project/resources/views/useredit.blade.php ENDPATH**/ ?>