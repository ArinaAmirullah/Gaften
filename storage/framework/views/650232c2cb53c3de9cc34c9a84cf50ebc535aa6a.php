<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: auto;
}

</style>

<title>gaften.com</title>
<link rel="icon" type="image/x-icon" href="images/gaften.png" width="20" height="8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<link href="css/sign-in.css" rel="stylesheet">

<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin" style="background-image: url('images/second.png');">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <img src="images/logo.png" width="170" height="98" class="center">
        
      </div>

<main class="form-signin w-100 m-auto">
  <form action="login" method="post">
    <?php echo csrf_field(); ?>


        <form class="">
          <div class="form-floating mb-3">
      <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="email" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
  
      <label text-align: left;>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button><br><br>

    <small class="text-muted" onclick="window.location='/forgot'">Have you forgotten your password? <u>Click here</u></a></small><br><br>

    <small class="text-muted mt-5 mb-0" onclick="window.location='/register'">Don't have an account? <u>Register here</u></small>

    <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Join GAFTEN today</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
            Sign up with Twitter
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
            Sign up with Facebook
          </button>
  </form>
</main>





<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/auth/signup.blade.php ENDPATH**/ ?>