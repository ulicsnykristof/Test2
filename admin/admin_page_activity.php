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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="../pictures/icon.jpg">
    <link rel="stylesheet" type="text/css" href="../style/my-style.css">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>DMOffice</title>
  </head>

  <body>

    <!-- Admin Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
      <a class="navbar-brand" href="#">DMOFFICE - Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
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
              <a class="dropdown-item" href="../login_page.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main -->
    <div class="container" style="margin-top: 30px;">
      <div class="row">

        <table id="prod_table" class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>User Name</th>
              <th>Type</th>
              <th>Discription</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require '../includes/dbh_inc.php';
              $sql = "SELECT * FROM activity;";
              $result = mysqli_query($conn, $sql);
              foreach ($result as $k => $v) {
                echo "<tr class='table-light'>";
                foreach ($v as $key => $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
              }
             ?>
          </tbody>
        </table>

      </div>
    </div>

    <footer class="page-footer" style="margin-top: 100px;">
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
