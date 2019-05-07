<?php

  if(isset($_POST['reg_submit'])){

    require '../dbh_inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['reg_uid']);
    $name = mysqli_real_escape_string($conn, $_POST['reg_name']);
    $email = mysqli_real_escape_string($conn, $_POST['reg_email']);
    $access = mysqli_real_escape_string($conn, $_POST['reg_access']);
    $role = mysqli_real_escape_string($conn, $_POST['reg_role']);
    $date = date('Y-m-d');

    if(empty($uid) || empty($name) || empty($email) || empty($access) ||empty($role)){
      header('Location: ../../admin/admin_page_manage.php?error=empty_filed');
      exit();

    }else{
      $sql = "SELECT * FROM user WHERE '$uid' = user_uid;";
      $result = mysqli_query($conn, $sql);

      if(mysqli_num_rows($result)>0){
        header('Location: ../../admin/admin_page_manage.php?error=already_in_database');
        exit();

      }else{
        $pwd = "password";
        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (user_uid, user_name, user_email, user_password, user_access, user_role, user_reg_date) values (?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);

        $stmt->prepare($sql);
        $stmt->bind_param("sssssss", $uid, $name, $email, $hashedpwd, $access, $role, $date);
        $stmt->execute();
        #mysqli_stmt_prepare($stmt, $sql);
        #mysqli_stmt_bind_param($stmt, "sssssss", $uid, $name, $email, $hashedpwd, $access, $role, $date);
        #mysqli_stmt_execute($stmt);

        header('Location: ../../admin/admin_page_manage.php?success');

      }
    }








  }else{
    header('Location: ../login_page.php?do_not_have_permission');
    exit();
  }
 ?>
