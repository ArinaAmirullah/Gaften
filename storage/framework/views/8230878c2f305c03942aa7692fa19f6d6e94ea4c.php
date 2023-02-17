<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
<title>gaften.com</title>
<link rel="icon" type="image/x-icon" href="images/logo.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body {
    font-family: "Poppins", sans-serif;
    color: #444444;
}

a,
a:hover {
    text-decoration: none;
    color: inherit;
}

.section-products {
    padding: 80px 0 54px;
}

.section-products .header {
    margin-bottom: 50px;
}

.section-products .header h3 {
    font-size: 1rem;
    color: #fe302f;
    font-weight: 500;
}

.section-products .header h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: #444444; 
}

.section-products .single-product {
    margin-bottom: 26px;
}

.section-products .single-product .part-1 {
    position: relative;
    height: 290px;
    max-height: 290px;
    margin-bottom: 20px;
    overflow: hidden;
}

.section-products .single-product .part-1::before {
		position: absolute;
		content: "";
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
		transition: all 0.3s;
}

.section-products .single-product:hover .part-1::before {
		transform: scale(1.2,1.2) rotate(5deg);
}

.section-products #product-1 .part-1::before {
    background: url("images/1.png") 
    no-repeat center;
    background-size: cover;
		transition: all 0.3s;
}

.section-products #product-2 .part-1::before {
    background: url("images/2.png") 
    no-repeat center;
    background-size: cover;
}

.section-products #product-3 .part-1::before {
    background: url("images/3.png") 
    no-repeat center;
    background-size: cover;
}

.section-products #product-4 .part-1::before {
    background: url("images/4.png") 
    no-repeat center;
    background-size: cover;
}

.section-products .single-product .part-1 .discount,
.section-products .single-product .part-1 .new {
    position: absolute;
    top: 15px;
    left: 20px;
    color: #ffffff;
    background-color: #fe302f;
    padding: 2px 8px;
    text-transform: uppercase;
    font-size: 0.85rem;
}

.section-products .single-product .part-1 .new {
    left: 0;
    background-color: #444444;
}

.section-products .single-product .part-1 ul {
    position: absolute;
    bottom: -41px;
    left: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
    opacity: 0;
    transition: bottom 0.5s, opacity 0.5s;
}

.section-products .single-product:hover .part-1 ul {
    bottom: 30px;
    opacity: 1;
}

.section-products .single-product .part-1 ul li {
    display: inline-block;
    margin-right: 4px;
}

.section-products .single-product .part-1 ul li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background-color: #ffffff;
    color: #444444;
    text-align: center;
    box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
    transition: color 0.2s;
}

.section-products .single-product .part-1 ul li a:hover {
    color: #fe302f;
}

.section-products .single-product .part-2 .product-title {
    font-size: 1rem;
}

.section-products .single-product .part-2 h4 {
    display: inline-block;
    font-size: 1rem;
}

.section-products .single-product .part-2 .product-old-price {
    position: relative;
    padding: 0 7px;
    margin-right: 2px;
    opacity: 0.6;
}

.section-products .single-product .part-2 .product-old-price::after {
    position: absolute;
    content: "";
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #444444;
    transform: translateY(-50%);
}
    </style>
  </head>
  <body>
    
<header>

  <div class="container">
    <nav class="navbar navbar-expand-lg bg-light rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Gaften</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/home">Creative Space</a></li>
                <li><a class="dropdown-item" href="/album">Reworked Clothing</a></li>
                <li><a class="dropdown-item" href="#">About Us</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="index.html">Help</a></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
          <form role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a class="material-symbols-outlined" href="/cart" style="text-decoration:none">shopping_cart</a>
      </div>
    </nav>
</header>

<main>

<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Featured Product</h3>
										<h2>Popular Products</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
                
										</div>
                
										<div class="part-2">
												<h3 class="product-title">Jacket</h3>
												<h4 class="product-old-price">RM 79.99</h4>
												<h4 class="product-price">RM 49.99</h4>
										</div>

                    <form action="<?php echo e(url('addcart',$product->id); ?>" method="POST">
                      <?php echo csrf_field(); ?>

                      <input type="number" value="1" min="1" class="form-control" style="width:100px" name=""><br>

                    <input class="btn btn-primary" type="submit" value="Add Cart">
                    </form>

								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
												<span class="discount">15% off</span>
												<ul>
                            <li><a href="#"><i class="material-symbols-outlined">shopping_cart</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">favorite</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">add</i></a></li>
														<li><a href="/view"><i class="material-symbols-outlined">fullscreen</i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Singlet</h3>
												<h4 class="product-price">RM 29.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
												<ul>
                            <li><a href="#"><i class="material-symbols-outlined">shopping_cart</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">favorite</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">add</i></a></li>
														<li><a href="/view"><i class="material-symbols-outlined">fullscreen</i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Hoodie</h3>
												<h4 class="product-old-price">RM 79.99</h4>
												<h4 class="product-price">RM 39.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
												<ul>
                            <li><a href="#"><i class="material-symbols-outlined">shopping_cart</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">favorite</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">add</i></a></li>
														<li><a href="/view"><i class="material-symbols-outlined">fullscreen</i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Tshirt
                        </h3>
												<h4 class="product-price">RM 20.00</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
												<ul>
                            <li><a href="#"><i class="material-symbols-outlined">shopping_cart</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">favorite</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">add</i></a></li>
														<li><a href="/view"><i class="material-symbols-outlined">fullscreen</i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-old-price">RM 79.99</h4>
												<h4 class="product-price">RM 49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
												<span class="discount">15% off</span>
												<ul>
                            <li><a href="#"><i class="material-symbols-outlined">shopping_cart</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">favorite</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">add</i></a></li>
														<li><a href="/view"><i class="material-symbols-outlined">fullscreen</i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">RM 49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
												<ul>
                            <li><a href="#"><i class="material-symbols-outlined">shopping_cart</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">favorite</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">add</i></a></li>
														<li><a href="/view"><i class="material-symbols-outlined">fullscreen</i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-old-price">RM 79.99</h4>
												<h4 class="product-price">RM 49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
												<ul>
                            <li><a href="#"><i class="material-symbols-outlined">shopping_cart</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">favorite</i></a></li>
														<li><a href="#"><i class="material-symbols-outlined">add</i></a></li>
														<li><a href="/view"><i class="material-symbols-outlined">fullscreen</i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Here Product Title</h3>
												<h4 class="product-price">RM 49.99</h4>
										</div>
								</div>
						</div>
				</div>
        <?php echo e(View:: make('footer')); ?>

		</div>

</section>

</main>

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/album.blade.php ENDPATH**/ ?>