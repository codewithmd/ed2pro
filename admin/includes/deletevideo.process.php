<?php 

  include_once 'db.inc.php';

  $id = $_POST['videoID'];
  $sql = "DELETE FROM `video` WHERE `video_id` = $id";
  
  if(mysqli_query($conn, $sql)){
    echo "Video Deleted Successfully!";
  } else {
    echo "Something Goes Wrong";
  }
  
?>