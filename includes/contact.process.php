<?php 

  include_once 'db.inc.php';
  
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  if(empty($name) || empty($phone) || empty($email) || empty($message)) {
    echo "<spna class='text-danger'> All Fields Are Required</span>";
  } else {
      $sql = "INSERT INTO `contact`(`name`, `phone`, `email`, `message`) VALUES ('$name', '$phone', '$email', '$message')";
  
      if(mysqli_query($conn, $sql)){
        echo "<spna class='text-danger'> Message Sent Successfully</span>";
      } else {
        echo "Something Goes Wrong";
      }
  }


  
  // echo $queid;
  
?>