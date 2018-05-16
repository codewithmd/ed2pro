<?php 

  include_once 'db.inc.php';
  
  $userID = $_POST['uid'];
  $dbhashedpwd = $_POST['dbhashedpwd'];
  $newpwd = $_POST['newpwd'];
  $oldpwd = $_POST['oldpwd'];
  

    $md5 = md5($oldpwd);
    $sha1 = sha1($md5);
    $crypt = crypt($sha1, 'Ed');
    $oldpasswordhashed = $crypt;

  if($oldpasswordhashed != $dbhashedpwd){
    echo "Password Doesn't Matched";
  } else if($oldpasswordhashed == $dbhashedpwd){
      $md5 = md5($newpwd);
      $sha1 = sha1($md5);
      $crypt = crypt($sha1, 'Ed');
      $newpasswordhashed = $crypt;

      $sql = "UPDATE `users` SET `user_password`= '$newpasswordhashed' WHERE `user_id` = $userID";
  
      if(mysqli_query($conn, $sql)){
        echo "Password Changed Successfully!";
      } else {
        echo "Something Goes Wrong";
      }
  }



  
  // echo $queid;
  
?>