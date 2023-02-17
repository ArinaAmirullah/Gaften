<!doctype html>

<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

<title>Project</title>
<link rel="icon" type="image/x-icon" href="images/gaften.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}

.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}

.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: auto;
}

h2 {text-align: center;}

    </style>

<link href="css/navbars.css" rel="stylesheet">

</head>

<body>
<main>
  
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo e(url('product')); ?>" data-bs-toggle="dropdown" aria-expanded="false">GAFTEN</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Home</a></li>
                <li><a class="dropdown-item" href="/userlist">User Account</a></li>
                <li><a class="dropdown-item" href="/control">Product List</a></li>
                <li><a class="dropdown-item" href="#">Account Settings</a></li>
                <li><a class="dropdown-item" href="#">Security and Privacy</a></li>
                <li><a class="dropdown-item" href="/admin">Logout</a></li>
              </ul>
            </li>
          </ul>
          <form role="search" method="get" action="/userlist">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" value="<?php echo e(request()->input('q')); ?>" name="q">
          </form>

        </div>
      </div>
    </nav>
    
    <canvas class="my-4 w-100" id="myChart" width="400" height="0"></canvas>

      <img src="images/logo.png" width="280" height="150" class="center">

      <script src="js/bootstrap.bundle.min.js"></script>



<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/title.blade.php ENDPATH**/ ?>