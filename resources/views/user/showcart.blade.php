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
                <a class="nav-link" href="{{url('showcart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart[]</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{ session()->get('user')->name }}</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/viewprofile">My Profile</a></li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                  </ul>
                </li>
             
     
            </ul>
          </div>
        </div>
      </nav>

      @if(session()->has('message'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">x</button>

{{session()->get('message')}}

</div>

    @endif

</header>

<div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4></h4>
              <h2>Shopping Cart</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


<div style="padding:100px;" align="center">
<table>
  <tr style="background-color:gray">
    <td style="padding:10px; font-size:20px; color:white;">Product Name</td>
    <td style="padding:10px; font-size:20px; color:white;">Quantity</td>
    <td style="padding:10px; font-size:20px; color:white;">Price</td>
    <td style="padding:10px; font-size:20px; color:white;">Action</td>
  </tr>

  <form action="{{url('order')}}" method="POST">

  @csrf

  @foreach($cart as $carts)

  <tr style="background-color:black">
    <td style="padding:10px; color:white;">
    <input type="text" name="productname[]" value="   {{$carts->product_title}}" hidden="">
    {{$carts->product_title}}
  
  </td>
    <td style="padding:10px; color:white;">
    <input type="text" name="quantity[]" value="   {{$carts->quantity}}" hidden="">
    {{$carts->quantity}}
  </td>

    <td style="padding:10px; color:white;">
    <input type="text" name="price[]" value="   {{$carts->price}}" hidden="">
    {{$carts->price}}</td>

    <td style="padding:10px; color:white;"><a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Delete</a></td>
  </tr>

  @endforeach
</table>
<br><br>


<button class="btn btn-success">Confirm Order</button>
</form>

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
