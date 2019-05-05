<?php

  session_start();

  if(isset($_POST['submit'])){
    require 'dbh_inc.php';


    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $select = $_POST['select'];

    if ($select == 'notselected') {
      header('Location: ../login_page.php?error=role_was_not_selected');
      exit();
    }

    if (empty($uid) || empty($pwd)) {
      header('Location: ../login_page.php?error=empty_field');
      exit();
    }else{
      $sql = "SELECT * FROM user WHERE '$uid' = user_uid AND '$select' = user_role;";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) == 0){
        header('Location: ../login_page.php?error=no_such_user');
        exit();
      }else{
        if($row = mysqli_fetch_assoc($result)){
          $hashedpwdcheck = password_verify($pwd, $row['user_password']);
          if($hashedpwdcheck == false){
            header('Location: ../login_page.php?error=wrong_password');
            exit();
          }elseif($hashedpwdcheck == true){
            $_SESSION['user_uid'] = $row['user_uid'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_access'] = $row['user_access'];
            $_SESSION['user_role'] = $row['user_role'];
            if($select == 'User'){
              header('Location: ../user/user_page.php');
              exit();
            }elseif($select == 'Admin'){
              header('Location: ../admin/admin_page.php');
              exit();
            }else{
              header('Location: ../login_page.php?what');
              exit();
            }
          }
        }
      }
    }
  }




 ?>
