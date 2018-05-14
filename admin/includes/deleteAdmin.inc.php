<?php 

  include_once 'db.inc.php';

  $id = $_REQUEST['adminID'];
  $sql = "DELETE FROM `admin` WHERE `admin_id` = $id";
  mysqli_query($conn, $sql);
  header("Location: ../logout.php");
?>