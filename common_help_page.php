<?php
 session_start();
 session_unset();
 session_destroy();
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
    <title>DMOffice</title>
  </head>

  <body>

    <!-- Login Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
      <a class="navbar-brand" href="#">
        DMOFFICE
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="common_about_page.php">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="common_help_page.php">Help</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Content -->
    <div class="container" style="margin-top:30px; margin-bottom:30px;">
      <div class="row">
        <div class="col-3">
          <legend>Admin</legend>
          <div class="list-group">
            <a class="list-group-item list-group-item-action" href="#">Manage Users</a>
          </div>
          <div class="list-group">
            <a class="list-group-item list-group-item-action" href="#">Monitoring</a>
          </div>
          <div class="list-group">
            <a class="list-group-item list-group-item-action" href="#">Reports</a>
          </div>
          <legend style="margin-top: 20px;">User</legend>
          <div class="list-group">
            <a class="list-group-item list-group-item-action" href="#">Products</a>
          </div>
          <div class="list-group">
            <a class="list-group-item list-group-item-action" href="#">Oreder request</a>
          </div>
          <div class="list-group">
            <a class="list-group-item list-group-item-action" href="#">Stock</a>
          </div>
          <div class="list-group">
            <a class="list-group-item list-group-item-action" href="#">Something</a>
          </div>
          <div class="list-group">
            <a class="list-group-item list-group-item-action" href="#">Other stuffs</a>
          </div>
        </div>
        <div class="col-7">
          <legend>Description</legend>
          <?php  ?>
        </div>
      </div>
    </div>

    <!-- Login footer -->
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
