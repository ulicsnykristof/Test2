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
    <link rel="icon" type="image/jpg" href="../pictures/icon.jpg">
    <link rel="stylesheet" type="text/css" href="../style/my-style.css">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function show_table(){
        document.getElementById("prod_table").style.display = "table";
        document.getElementById("prod_form").style.display = "none";
      }
      function show_form(){
        document.getElementById("prod_table").style.display = "none";
        document.getElementById("prod_form").style.display = "block";
      }
    </script>
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
              <a class="dropdown-item" href="../login_page.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- User Content -->
    <div class="container" style="margin-top:30px; margin-bottom:30px;">
      <div class="row">
        <div class="col-2">
          <legend>Options</legend>
          <div class="list-group" style="margin-bottom:10px;">
            <a onClick="show_table()" class="list-group-item list-group-item-action" href="#" >Product list</a>
          </div>
          <div class="list-group" style="margin-bottom:10px;">
            <a onClick="show_form()" class="list-group-item list-group-item-action" href="#" >Add to list</a>
          </div>
          <div class="list-group" style="margin-bottom:10px;">
            <a class="list-group-item list-group-item-action" href="#" >Modify list element</a>
          </div>
        </div>
        <div class="col-10">
          <table id="prod_table" class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Type</th>
                <th>Category</th>
                <th>Manufacturer</th>
                <th>Distributor</th>
                <th>Price</th>
                <th>Country</th>
                <th>Container</th>
                <th>Volume</th>
                <th>Alcohol</th>
                <th>Returnable</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require '../includes/dbh_inc.php';
                $sql = "SELECT * FROM prod;";
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
          <form id="prod_form" style="display:none" class="" action="../includes/user/add_product_inc.php" method="post">
            <fieldset>
              <legend>Register new User</legend>

                <div class="form-group">
                  <label for="">Name</label>
                  <input style="color: #000000;"  class="form-control" type="text" name="p_name" value="" placeholder="Enter name">
                </div>

                <div class="form-group">
                  <label for="">Type</label>
                  <input style="color: #000000;" class="form-control" type="text" name="p_type" value="" placeholder="Enter type">
                </div>

                <div class="form-group">
                  <label for="">Category</label>
                  <input style="color: #000000;" class="form-control" type="text" name="p_category" value="" placeholder="Enter category">
                </div>

                <div class="form-group">
                  <label for="">Manufacturer</label>
                  <input style="color: #000000;" class="form-control" type="text" name="p_manu" value="" placeholder="Enter manufacturer">
                </div>

                <div class="form-group">
                  <label for="">Distributor</label>
                  <input style="color: #000000;" class="form-control" type="text" name="p_dist" value="" placeholder="Enter distributor">
                </div>

                <div class="form-group">
                  <label for="">Purchase price</label>
                  <input style="color: #000000;" class="form-control" type="text" name="p_price" value="" placeholder="Enter purchase price (Ft)">
                </div>

                <div class="form-group">
                  <label for="">Country</label>
                  <input style="color: #000000;" class="form-control" type="text" name="p_country" value="" placeholder="Enter country">
                </div>

                <div class="form-group">
                  <label for="">Contanier</label>
                  <select style="color: #000000;" class="form-control" name="p_container">
                    <option value="" disabled selected>Choose option</option>
                    <option value="Bottle">Bottle</option>
                    <option value="Can">Can</option>
                    <option value="Pet">Pet</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Volume</label>
                  <input style="color: #000000;" class="form-control" type="text" name="p_volume" value="" placeholder="Enter volume (ml)">
                </div>

                <div class="form-group">
                  <label for="">Alcohol</label>
                  <input style="color: #000000;" class="form-control" type="text" name="p_alcohol" value="" placeholder="Enter alcohol (%)">
                </div>

                <div class="form-group">
                  <label for="">Returnable</label>
                  <select style="color: #000000;" class="form-control" name="p_ret">
                    <option value="" disabled selected>Choose option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>

            </fieldset>
            <div class="row">
              <button class="btn btn-primary" type="submit" name="prod_submit" style="margin: 20px;">Register</button>
              <button disabled class="btn btn-primary disabled" type="submit" name="mod_submit" style="margin: 20px;">Modify</button>
              <button disabled class="btn btn-danger disabled" type="submit" name="del_submit" style="margin: 20px;">Delete</button>
            </div>
          </form>
        </div>
      </div>
    </div>



    <!-- User Footer -->
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
