<?php 

  include_once 'db.inc.php';

  $id = $_POST['queID'];
  $sql = "DELETE FROM `question` WHERE `que_id` = $id";
  
  if(mysqli_query($conn, $sql)){
    echo "Question Deleted Successfully!";
  } else {
    echo "Something Goes Wrong";
  }
  
?>