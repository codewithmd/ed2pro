<?php
  
  
if (isset($_POST['quetitle'])) {

	include 'db.inc.php';

	$subject_id = mysqli_real_escape_string($conn, $_POST['sub']);
	$question = mysqli_real_escape_string($conn, $_POST['quetitle']);
	$opt1 = mysqli_real_escape_string($conn, $_POST['opt1']);
	$opt2 = mysqli_real_escape_string($conn, $_POST['opt2']);
	$opt3 = mysqli_real_escape_string($conn, $_POST['opt3']);
	$opt4 = mysqli_real_escape_string($conn, $_POST['opt4']);
	$answer = mysqli_real_escape_string($conn, $_POST['answer']);
	$answerdesc = mysqli_real_escape_string($conn, $_POST['answerdesc']);
	
	$subject_id = strtolower($subject_id);
	$question = strtolower($question);
	$opt1 = strtolower($opt1);
	$opt2 = strtolower($opt2);
	$opt3 = strtolower($opt3);
	$opt4 = strtolower($opt4);
	$answer = strtolower($answer);
	$answerdesc = strtolower($answerdesc);
  
   //Insert the Question into the database
  $sql = "INSERT INTO `question`(`sub_id`, `que_title`, `option_one`, `option_two`, `option_three`, `option_four`, `answer`, `answer_desc`) VALUES ('$subject_id', '$question', '$opt1', '$opt2', '$opt3', '$opt4', '$answer', '$answerdesc')";

  if(mysqli_query($conn, $sql)){
    echo "Question Added Successfully..!";
  } else {
    echo '<span class="text-danger">There Is Some Error..!</span>';
  }
}