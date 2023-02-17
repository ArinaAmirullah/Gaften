<?php $__env->startSection('login'); ?>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: auto;
}
</style>

<title>gaften.com</title>
<link rel="icon" type="image/x-icon" href="images/gaften.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/sign-in.css">

<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin" style="background-image: url('images/background.png');">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <img src="images/logo.png" width="170" height="98" class="center">
      </div>

<main class="form-signin w-100 m-auto">
  <form action="register" method="post">
<?php echo csrf_field(); ?>
    <h1>Personal Details</h1><br>

    <div class="form-floating">
      <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Full Name" name="fullname" required>
      <label for="floatingInput">Full Name</label>
    </div><br>

    <div class="form-floating">
      <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="email" required>
      <label for="floatingInput">Email address</label>
    </div><br>

    <div class="form-floating">
      <input type="date" class="form-control rounded-3" id="floatingDate" placeholder="Date" name="date" required>
      <label for="floatingDate">Date of Birth</label>
    </div><br>

    <div class="form-floating">
      <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Password</label>
    </div><br>

    <div class="form-floating">
      <input type="address" class="form-control rounded-3" id="floatingAddress" placeholder="Address" name="address" required>
      <label for="floatingAddress">Address</label>
    </div><br>

    <div class="form-floating">
      <input type="phone" class="form-control rounded-3" id="floatingPhone" placeholder="Phone" name="phone" required>
      <label for="floatingPhone">Phone Number</label>
    </div><br>

    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Register</button>
    <br>

    <small class="text-muted">By register, you agree to the Terms of Service and Privacy Policy, including Cookie Use.</small>
    <br><br>

    <small class="text-center text-muted mt-5 mb-0" onclick="window.location='/logout'">Already have an account? <u>Login here</u></small>

</form>



<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nurulaziraamirullah/project/resources/views/register.blade.php ENDPATH**/ ?>