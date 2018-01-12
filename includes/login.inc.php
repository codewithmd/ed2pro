<?php
  session_start();

if (isset($_POST['submit'])) {

	include 'db.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);


	//Error handlers
	//Check if inputs are empty
	if (empty($email) || empty($pwd)) {
		header("Location: ../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../login.php?login=Nosuchusers");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {

				$hashedPwd = $row['user_password'];

				//De-hashing the password
				// $hashedPwdCheck = password_verify($pwd, $hashedPwd);
        $md5 = md5($pwd);
        $sha1 = sha1($md5);
        $crypt = crypt($sha1, 'Ed');


				// Not a HASHED PWD JUST FOR TESTING
				$hashedPwdCheck = $crypt;

				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=passwordnotmatched");
					exit();

				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_name'] = $row['user_name'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_phone'] = $row['user_phone'];

					header("Location: ../user_index.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../login.php?login=error");
	exit();
}
