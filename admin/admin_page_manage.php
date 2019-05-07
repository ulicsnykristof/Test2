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
              <a class="dropdown-item" href="login_page.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main -->
    <div class="container" style="margin-top: 30px;">
      <div class="row">

        <!-- Registration form-->
        <div class="col-6">
          <form class="" action="../includes/admin/reg_inc.php" method="post">
            <fieldset>
              <legend>Register new User</legend>

                <div class="form-group">
                  <label for="">User ID (Nickname)</label>
                  <input style="color: #000000;"  class="form-control" type="text" name="reg_uid" value="" placeholder="Enter user id">
                </div>

                <div class="form-group">
                  <label for="">User Name</label>
                  <input style="color: #000000;" class="form-control" type="text" name="reg_name" value="" placeholder="Enter user name">
                </div>

                <div class="form-group">
                  <label for="">User E-mail</label>
                  <input style="color: #000000;" class="form-control" type="email" name="reg_email" value="" placeholder="Enter e-mail address">
                </div>

                <div class="form-group">
                  <label for="">User Access</label>
                  <select style="color: #000000;" class="form-control" name="reg_access">
                    <option value="" disabled selected>Choose option</option>
                    <option value="Warehose worker">Warehose worker</option>
                    <option value="Sales department">Sales department</option>
                    <option value="Administration">Administration</option>
                    <option value="Delivery">Delivery</option>
                    <option value="Customer Service">Customer Service</option>
                  </select>
                </div>

                <div  class="form-group">
                  <label for="">User Role</label>
                  <select style="color: #000000;" class="form-control" name="reg_role">
                    <option value="" disabled selected>Choose option</option>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                  </select>
                </div>

                <div class="row">
                  <button class="btn btn-primary" type="submit" name="reg_submit" style="margin: 20px;">Register</button>
                  <button disabled class="btn btn-primary disabled" type="submit" name="mod_submit" style="margin: 20px;">Modify</button>
                  <button disabled class="btn btn-danger disabled" type="submit" name="del_submit" style="margin: 20px;">Delete</button>
                </div>

            </fieldset>
          </form>
        </div>


        <!-- User list -->
        <div class="col-6">
          <legend>Users</legend>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col1">Uid</th>
                <th scope="col1">Name</th>
                <th scope="col1">Email</th>
                <th scope="col1">Access</th>
                <th scope="col1">Date</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require '../includes/dbh_inc.php';
                $sql = "SELECT * FROM user;";
                $result = mysqli_query($conn, $sql);
                foreach ($result as $k => $v) {
                  echo "<tr class='table-light'>";
                  foreach ($v as $key => $value) {
                    if($key != 'user_id' && $key != 'user_password' && $key != 'user_role'){
                      echo "<td>" . $value . "</td>";
                    }
                  }
                  echo "</tr>";
                }
               ?>
            </tbody>
          </table>
        </div>
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
