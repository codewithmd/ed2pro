<<<<<<< HEAD
<?php
  session_start();

if (isset($_POST['submit'])) {

	include 'db.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


	//Error handlers
	//Check if inputs are empty
	if (empty($email) || empty($pwd)) {
		header("Location: ../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM admin WHERE admin_email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../login.php?login=Nosuchusers");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {

				$hashedPwd = $row['admin_pwd'];

				//De-hashing the password
				// $hashedPwdCheck = password_verify($pwd, $hashedPwd);
        $md5 = md5($pwd);
        $sha1 = sha1($md5);
        $crypt = crypt($sha1, 'Ed');


				// Not a HASHED PWD JUST FOR TESTING
				$hashedPwdCheck = $crypt;

				if ($hashedPwdCheck != $hashedPwd) {
					header("Location: ../login.php?login=passwordnotmatched");
					exit();

				} elseif ($hashedPwdCheck == $hashedPwd) {
					//Log in the user here
					$_SESSION['a_id'] = $row['admin_id'];
					
					header("Location: ../admin_index.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../login.php?login=errora");
	exit();
}
=======
<?php

header("Location: ../admin_index.php");
>>>>>>> 8c7589251da38d1ccc8fec40671c5f714d4e98ba
