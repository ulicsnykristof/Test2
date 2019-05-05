<?php
  session_start();
  if(!isset($_SESSION['user_uid'])){
    header('Location: login_page.php?error=you_have_to_login');
    exit();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/jpg" href="pictures/icon.jpg">
    <link rel="stylesheet" type="text/css" href="style/my-style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>DMOffice</title>
  </head>
  <body>

    <!-- User Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
      <a class="navbar-brand" href="#">DMOFFICE - User</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="common_about_page.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="common_help_page.php">Help</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              <?php $asd = $_SESSION['user_uid'];
                echo $asd;
              ?>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Account</a>
              <a class="dropdown-item" href="#">Options</a>
              <a class="dropdown-item" href="login_page.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container" style="margin-top: 50px;">
      <div class="card-deck">

        <div class="card bg-secondary">
          <div class="card-header bg-secondary" style="font-size: 18px; padding: 7px;">
            Products
          </div>
          <img class="card-img" src="pics/producsat.png" alt="card.jpg" style="padding: 30px; opacity: 0.4;">
          <div class="card-body text-center">
            <p style="">Product list, stuff, etc.</p>
            <a class="btn btn-primary bottom" href="user_products_page.php" style="font-size: 22px;">Enter</a>
          </div>
        </div>

        <div class="card bg-secondary">
          <div class="card-header bg-secondary" style="font-size: 18px; padding: 7px;">
            Order request
          </div>
          <img class="card-img" src="pics/producsat.png" alt="card.jpg" style="padding: 30px; opacity: 0.4;">
          <div class="card-body text-center">
            <p style="">Product list, stuff, etc.</p>
            <a class="btn btn-primary bottom" href="user_order_req_page.php" style="font-size: 22px;">Enter</a>
          </div>
        </div>

        <div class="card bg-secondary">
          <div class="card-header bg-secondary" style="font-size: 18px; padding: 7px;">
            Stock
          </div>
          <img class="card-img" src="pics/producsat.png" alt="card.jpg" style="padding: 30px; opacity: 0.4;">
          <div class="card-body text-center">
            <p style="">Product list, stuff, etc.</p>
            <a class="btn btn-primary bottom" href="user_stock_page.php" style="font-size: 22px;">Enter</a>
          </div>
        </div>

        <div class="card bg-secondary">
          <div class="card-header bg-secondary" style="font-size: 18px; padding: 7px;">
            Partners
          </div>
          <img class="card-img" src="pics/producsat.png" alt="card.jpg" style="padding: 30px; opacity: 0.4;">
          <div class="card-body text-center">
            <p style="">Product list, stuff, etc.</p>
            <a class="btn btn-primary bottom" href="user_partners_page.php" style="font-size: 22px;">Enter</a>
          </div>
        </div>

      </div>
    </div>

    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
      <div class="card-deck">

        <div class="card bg-secondary">
          <div class="card-header bg-secondary" style="font-size: 18px; padding: 7px;">
            Products
          </div>
          <img class="card-img" src="pics/producsat.png" alt="card.jpg" style="padding: 30px; opacity: 0.4;">
          <div class="card-body text-center">
            <p style="">Product list, stuff, etc.</p>
            <a class="btn btn-primary bottom" href="#" style="font-size: 22px;">Enter</a>
          </div>
        </div>

        <div class="card bg-secondary">
          <div class="card-header bg-secondary" style="font-size: 18px; padding: 7px;">
            Products
          </div>
          <img class="card-img" src="pics/producsat.png" alt="card.jpg" style="padding: 30px; opacity: 0.4;">
          <div class="card-body text-center">
            <p style="">Product list, stuff, etc.</p>
            <a class="btn btn-primary bottom" href="#" style="font-size: 22px;">Enter</a>
          </div>
        </div>

        <div class="card bg-secondary">
          <div class="card-header bg-secondary" style="font-size: 18px; padding: 7px;">
            Products
          </div>
          <img class="card-img" src="pics/producsat.png" alt="card.jpg" style="padding: 30px; opacity: 0.4;">
          <div class="card-body text-center">
            <p style="">Product list, stuff, etc.</p>
            <a class="btn btn-primary bottom" href="#" style="font-size: 22px;">Enter</a>
          </div>
        </div>

        <div class="card bg-secondary">
          <div class="card-header bg-secondary" style="font-size: 18px; padding: 7px;">
            Products
          </div>
          <img class="card-img" src="pics/producsat.png" alt="card.jpg" style="padding: 30px; opacity: 0.4;">
          <div class="card-body text-center">
            <p style="">Product list, stuff, etc.</p>
            <a class="btn btn-primary bottom" href="#" style="font-size: 22px;">Enter</a>
          </div>
        </div>

      </div>
    </div>

    <footer class="page-footer">
      <div class="container center">
        <div class="text-center">
          <a href="https://www.facebook.com/GojiraMusic"><i class="fa fa-facebook-official"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-snapchat"></i></a>
          <a href="#"><i class="fa fa-pinterest"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="text-center">
          <p>We do not respect your privacy. - Powered by <a href="https://www.mushroom.com">Mushroom.com</a></p>
        </div>
      </div>
    </footer>

  </body>
</html>
