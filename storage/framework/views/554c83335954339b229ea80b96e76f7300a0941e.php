<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>gaften.com</title>

 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>


    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
  
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Gaften </h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/dashboard">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
             
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('showcart')); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart[]</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e(session()->get('user')->name); ?></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/viewprofile">My Profile</a></li>
                    <li><a class="dropdown-item" href="/">Logout</a></li>
                  </ul>
                </li>
             
     
            </ul>
          </div>
        </div>
      </nav>

      <?php if(session()->has('message')): ?>

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">x</button>

<?php echo e(session()->get('message')); ?>


</div>

    <?php endif; ?>

    </header>

    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4></h4>
              <h2>Edit Profile</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
    <h2 text-align: center;></h2>


<form action="<?php echo e(url('updateprofile')); ?>" method="post" enctype="multipart/form-data">

<?php echo csrf_field(); ?> 
    <div class="modal-body p-5 pt-0">
              <form class="">
                <div class="form-floating mb-3">
                  <td>Full Name</td> 
                  <input maxlength="100" value="<?php echo e(session()->get('user')->name); ?>" type="text"  name="fullname" class="form-control rounded-3" id="floatingUsername" placeholder="Full Name">
                  <label for="floatingUsername"></label>
                </div>
                <div class="form-floating mb-3">
                      <td>Email</td>            
                  <input maxlength="100" value="<?php echo e(session()->get('user')->email); ?>" type="email"  name="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput"></label>
                </div>
                <div class="form-floating mb-3">
                      <td>Date of Birth</td>            
                  <input maxlength="50" value="<?php echo e(session()->get('user')->date); ?>" type="date"  name="date" class="form-control rounded-3" id="floatingInput" placeholder="Date">
                  <label for="floatingInput"></label>
                </div>
                <div class="form-floating mb-3">
                  <td>Password</td> 
                  <input maxlength="50" value="<?php echo e(session()->get('user')->password); ?>" type="text"  name="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword"></label>
                </div>
                <div class="form-floating mb-3">
                  <td>Address</td> 
                  <input maxlength="150" value="<?php echo e(session()->get('user')->address); ?>" type="text"  name="address" class="form-control rounded-3" id="floatingAddress" placeholder="Address">
                  <label for="floatingAddress"></label>
                </div>
                <div class="form-floating mb-3">
                  <td>Phone Number</td> 
                  <input maxlength="50" value="<?php echo e(session()->get('user')->phone); ?>" type="text"  name="phone" class="form-control rounded-3" id="floatingPhone" placeholder="Phone">
                  <label for="floatingPhone"></label>
                </div>
                
    <button class="w-30 py-2 mb-2 btn btn-outline-dark rounded-3" type="button" onclick="javascript:history.back()">Cancel</button>
    <button class="w-30 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">Save changes</button>
</form>
</div>
</div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2023 Gaften</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/user/editprofile.blade.php ENDPATH**/ ?>