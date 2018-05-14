<?php 

  include_once 'db.inc.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $adminID = $_POST['adminID'];



  $sql = "UPDATE `admin` SET `admin_email`= '$email',`name`= '$name' WHERE `admin_id` = $adminID";
  
  if(mysqli_query($conn, $sql)){
    echo "Updated Successfully!";
  } else {
    echo "Something Goes Wrong";
  }
  // echo $queid;
  
?>