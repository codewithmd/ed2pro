<?php
  
  
if (isset($_POST['videoname'])) {

	include 'db.inc.php';

	$subjectID = mysqli_real_escape_string($conn, $_POST['videosub']);
  $videoname = mysqli_real_escape_string($conn, $_POST['videoname']);
  $videolink = mysqli_real_escape_string($conn, $_POST['videolink']);

  //Insert the Video into the database
  $sql1 = "INSERT INTO `video`(`sub_id`, `video_title`, `video_link`) VALUES ('$subjectID', '$videoname', '$videolink')";
  if(mysqli_query($conn, $sql1)){
    echo "Video Added Successfully..!";
  }
}