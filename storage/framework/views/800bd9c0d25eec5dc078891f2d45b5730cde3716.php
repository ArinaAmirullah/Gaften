<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>gaften.com</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cheatsheet/">

<link rel="icon" type="image/x-icon" href="images/logo.png">
<link href="css/bootstrap.min.css" rel="stylesheet">

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
    </style>

    <link href="cheatsheet.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/navbars.css" rel="stylesheet">
  </head>

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
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e(session()->get('user')->name); ?></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/home">Creative Space</a></li>
                    <li><a class="dropdown-item" href="/album">Reworked Clothing</a></li>
                    <li><a class="dropdown-item" href="/admin">Administration</a></li>
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
            </div>
            
          </div>
        </nav>
    </header>

    <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">GAFTEN</h1>
        <p class="lead text-muted">Brand that practices ethical and sustainable fashion. We handpicked and renewed / reworked everything. Hence only one piece per item.</p>
        <p>
          <a href="/logout" class="btn btn-primary my-2">Login</a>
          <a onclick="window.location='/register'" class="btn btn-secondary my-2">Create an account</a>
        </p>
      </div>
    </div>

  </section>
    <body class="container">

      <div>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Delivery Methods and Costs
              </button>
            </h4>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              The shipping options may vary depending on the delivery address, what time you make your purchase and item availability.<br><br>

At the time of processing your purchase, we will show you the available shipping methods, the cost and the delivery date of your order.<br><br>

Delivery options:<br><br>

<strong>Collection at a Gaften store - FREE</strong><br><br>

In the store of your choice within 3-6 working days.<br><br>

Remember that the person who comes to collect the order need only show the e-receipt with the QR code, as long as they are the buyer. If someone else comes in your place, they must also show ID.<br><br>
<strong>Home delivery:</strong><br><br>

<strong>Standard delivery - 19.90 RM / FREE (Orders over 299 RM)</strong><br><br>

The estimated delivery time will be between 3-6 working days, depending on the delivery address.<br><br>
If you have purchased as a registered user, you can modify the delivery address by accessing your order details in your account; if and when the order status allows to do so.<br><br>
Bear in mind that deliveries are only made on working days.

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Order Status
              </button>
            </h4>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              You will receive email updates on the status of your order.<br><br>

You can also find this information in the Purchases section.  If you are not registered, click on the “Order information” link in the confirmation email to track your order.<br><br>

These are the stages your order will go through:<br><br>

<strong>Bought:</strong> your order has been placed successfully.<br><br>
<strong>Being processed:</strong> we’ve received your order details.<br><br>
<strong>Being prepared:</strong> your order is being prepared in our warehouse.<br><br>
<strong>Sent:</strong> your order has already left our premises.<br><br>
<strong>Collected by courier:</strong> your order is on its way and will be delivered soon.<br><br>
<strong>Delivered to customer:</strong> your order has been delivered.<br><br>

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Restrictions
              </button>
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              We try to reach all corners of the earth from Gaften.com. If there are any delivery restrictions on your address, you will see them at the time of purchase.

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
               Split Orders
              </button>
            </h4>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              It is possible that your order be dispatched from different logistics centres. If this happens, we'll let you know by email which items you will receive in each shipment.
              </div>
            </div>
          </div>
        </div>
        </div></div>
    <?php echo e(View:: make('footer')); ?>

      </div>
    </article>

    <script src="js/bootstrap.bundle.min.js"></script>

<script src="cheatsheet.js"></script>
</body>
</html>
<?php /**PATH /Users/nurulaziraamirullah/project/resources/views/shipping.blade.php ENDPATH**/ ?>