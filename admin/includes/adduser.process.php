<?php
  
  
if (isset($_POST['email'])) {

	include 'db.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  
  //Hashing the password
  
  $md5 = md5($pwd);
  $sha1 = sha1($md5);
  $crypt = crypt($sha1, 'Ed');

  $hashedPwd = $crypt;

  //Insert the user into the database
  $sql1 = "INSERT INTO admin (admin_email, admin_pwd) VALUES ('$email', '$hashedPwd')";
  if(mysqli_query($conn, $sql1)){
    echo "User Added Successfully..!";
  }
}