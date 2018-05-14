<?php 

  include_once 'db.inc.php';

  $pwd = $_POST['pwd'];
  $confirmpwd = $_POST['confirmpwd'];
  $adminID = $_POST['adminID'];

  if($pwd == $confirmpwd) {
    $md5 = md5($pwd);
    $sha1 = sha1($md5);
    $crypt = crypt($sha1, 'Ed');
    $hashedpwd = $crypt;

    $sql = "UPDATE `admin` SET `admin_pwd`= '$hashedpwd' WHERE `admin_id` = $adminID";
    
    if(mysqli_query($conn, $sql)){
      echo "Updated Successfully!";
    } else {
      echo "Something Goes Wrong";
    }
  }

 
  