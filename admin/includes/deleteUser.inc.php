<?php 

  include_once 'db.inc.php';

  $id = $_REQUEST['userID'];
  $sql = "DELETE FROM `users` WHERE `user_id` = $id";
  mysqli_query($conn, $sql);
  header("Location: ../users.php");
?>