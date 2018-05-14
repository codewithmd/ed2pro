<?php 

  include_once 'db.inc.php';

  $id = $_REQUEST['subID'];
  $sql = "DELETE FROM `subject` WHERE `sub_id` = $id";
  mysqli_query($conn, $sql);
  header("Location: ../categories.php");
?>