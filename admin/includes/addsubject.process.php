<?php
  
  
if (isset($_POST['subject'])) {

	include 'db.inc.php';

	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
  
  $subject = strtolower($subject);
   //Insert the user into the database
  $sql = "INSERT INTO subject (sub_name) VALUES ('$subject')";
  if(mysqli_query($conn, $sql)){
    echo "Subject Added Successfully..!";
  }
}