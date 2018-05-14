<?php 

  include_once 'db.inc.php';

  $queid = $_POST['queID'];
  $subid = $_POST['subID'];

  $title = $_POST['title'];
  $opt_1 = $_POST['opt_1'];
  $opt_2 = $_POST['opt_2'];
  $opt_3 = $_POST['opt_3'];
  $opt_4 = $_POST['opt_4'];
  $ans = $_POST['ans'];
  $ansdesc = $_POST['ansdesc'];

  $sql = "UPDATE `question` SET `que_title`= $title,`option_one`= $opt_1,`option_two`=$opt_2,`option_three`= $opt_3,`option_four`= $opt_4,`answer`= $ans,`answer_desc`= $ansdesc WHERE `que_id` = $queid";
  
  if(mysqli_query($conn, $sql)){
    echo "Question Updated Successfully!";
  } else {
    echo "Something Goes Wrong";
  }
  // echo $queid;
  
?>