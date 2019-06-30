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
    <title>DMOffice</title>
  </head>

  <body>

    <!-- Login Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
      <a class="navbar-brand" href="login_page.php">
        DMOFFICE
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="common/common_about_page.php">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="common/common_help_page.php">Help</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Login Form -->
    <div class="login-page">
      <div class="form">
        <form class="login-form" action="includes/login_inc.php" method="POST">
          <input name="uid" type="text" placeholder="username"/>
          <input name="pwd" type="password" placeholder="password"/>
          <select class="custom-select" name="select">
            <option disabled selected>Choose option</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
          <button type="submit" name="submit" class="btn btn-secondary">login</button>
          <p class="message">Not registered? <a href="#"> Talk to the IT guy</a></p>
        </form>
      </div>
    </div>

    <!-- Login footer -->
    <footer class="page-footer">
      <div class="container center">
        <div class="text-center">
          <a href="#"><i class="fa fa-facebook-official"></i></a>
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
