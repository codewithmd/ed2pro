<?php 

  include_once 'db.inc.php';

  $videoid = $_POST['videoID'];
  $subid = $_POST['subID'];

  $title = $_POST['title'];
  $link = $_POST['link'];

  $title = strtolower($title);
	
	

  $sql = "UPDATE `video` SET `video_title`= '$title',`video_link`= '$link'  WHERE `video_id` = $videoid";
  
  if(mysqli_query($conn, $sql)){
    echo "Video Updated Successfully!";
  } else {
    echo "Something Goes Wrong";
  }
  // echo $queid;
  
?>