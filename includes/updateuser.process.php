<?php 

  include_once 'db.inc.php';
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $userID = $_POST['userID'];



  $sql = "UPDATE `users` SET `user_name`= '$name',`user_email`= '$email' WHERE `user_id` = $userID";
  
  if(mysqli_query($conn, $sql)){
    echo "Updated Successfully!";
  } else {
    echo "Something Goes Wrong";
  }
  // echo $queid;
  
?>