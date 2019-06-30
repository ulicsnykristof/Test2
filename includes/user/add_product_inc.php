<?php
if(isset($_POST['prod_submit'])){

  require '../dbh_inc.php';

  $name = mysqli_real_escape_string($conn, $_POST['p_name']);
  $type = mysqli_real_escape_string($conn, $_POST['p_type']);
  $category = mysqli_real_escape_string($conn, $_POST['p_category']);
  $manu = mysqli_real_escape_string($conn, $_POST['p_manu']);
  $dist = mysqli_real_escape_string($conn, $_POST['p_dist']);
  $price = mysqli_real_escape_string($conn, $_POST['p_price']);
  $country = mysqli_real_escape_string($conn, $_POST['p_country']);
  $container = mysqli_real_escape_string($conn, $_POST['p_container']);
  $volume = mysqli_real_escape_string($conn, $_POST['p_volume']);
  $alcohol = mysqli_real_escape_string($conn, $_POST['p_alcohol']);
  $ret = mysqli_real_escape_string($conn, $_POST['p_ret']);

  if(empty($name)){
    header('Location: ../../user/user_products_page.php?error=empty_filed');
    exit();

  }else{
    $sql = "SELECT * FROM prod WHERE '$name' = p_name;";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
      header('Location: ../..//user/user_products_page.php?error=already_in_database');
      exit();

    }else{

      $sql = "INSERT INTO prod (p_name, p_type, p_category, p_manufacturer, p_distributor, p_price, p_country, p_container, p_volume, p_alcohol, p_returnable) values (?,?,?,?,?,?,?,?,?,?,?);";
      $stmt = mysqli_stmt_init($conn);

      $stmt->prepare($sql);
      $stmt->bind_param("sssssssssss", $name, $type, $category, $manu, $dist, $price, $country, $container, $volume, $alcohol, $ret);
      $stmt->execute();
      #mysqli_stmt_prepare($stmt, $sql);
      #mysqli_stmt_bind_param($stmt, "sssssss", $uid, $name, $email, $hashedpwd, $access, $role, $date);
      #mysqli_stmt_execute($stmt);

      header('Location: ../..//user/user_products_page.php?success');

    }
  }








}else{
  header('Location: ../login_page.php?do_not_have_permission');
  exit();
}

















 ?>
