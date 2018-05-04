<?php

if (isset($_POST['submit'])) {

	include_once 'db.inc.php';

	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


	//Error handlers
	//Check for empty fields
	if (empty($email) || empty($pwd)) {
		header("Location: ../index.php?error=empty");
		exit();
	} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../index.php?error=InvalidEmail");
		        exit();
			} else {

				// Check Email already exist or not
				$sql = "SELECT * FROM admin WHERE admin_email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../index.php?error=UserAlreadyTaken");
		            exit();
				} else {

					//Hashing the password
					// $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					$md5 = md5($pwd);
					$sha1 = sha1($md5);
					$crypt = crypt($sha1, 'Ed');

					$hashedPwd = $crypt;

					//Insert the user into the database
					$sql1 = "INSERT INTO admin (admin_email, admin_pwd) VALUES ('$email', '$hashedPwd')";
					mysqli_query($conn, $sql1);

					header("Location: ../index.php?useradded=success");
		      exit();
				}
			}
		}
	

} else {
	header("Location: ../login.php?error=error");
	exit();
}
