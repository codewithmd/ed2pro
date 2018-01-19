<<<<<<< HEAD
<?php

if (isset($_POST['submit'])) {

	include_once 'db.inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$confirm_pwd = mysqli_real_escape_string($conn, $_POST['confirm_pwd']);


	//Error handlers
	//Check for empty fields
	if (empty($name) || empty($email) || empty($pwd) || empty($confirm_pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
				exit();
			} else {

				// Check Username id already exist or not
				$sql = "SELECT * FROM users WHERE user_email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} else {

		            if ($pwd != $confirm_pwd) {
		              header("Location: ../signup.php?signup=password not matched");
		    		exit();
		          } else {
					//Hashing the password
					// $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					$md5 = md5($pwd);
					$sha1 = sha1($md5);
					$crypt = crypt($sha1, 'Ed');

					$hashedPwd = $crypt;

					//Insert the user into the database
					$sql1 = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$name', '$email', '$hashedPwd')";
					mysqli_query($conn, $sql1);

					header("Location: ../login.php?signup=success");
					exit();
				}
			}
		}
	}
}
} else {
	header("Location: ../signup.php?signup=success");
	exit();
}
=======
<?php

if (isset($_POST['submit'])) {

	include_once 'db.inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	$confirm_pwd = mysqli_real_escape_string($conn, $_POST['confirm_password']);


	//Error handlers
	//Check for empty fields
	if (empty($name) || empty($email) || empty($pwd) || empty($confirm_pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
				exit();
			} else {

				// Check Username id already exist or not
				$sql = "SELECT * FROM users WHERE user_email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} else {

		            if ($pwd != $confirm_pwd) {
		              header("Location: ../signup.php?signup=password not matched");
		    		exit();
		          } else {
					//Hashing the password
					// $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					$md5 = md5($pwd);
					$sha1 = sha1($md5);
					$crypt = crypt($sha1, 'Ed');

					$hashedPwd = $crypt;

					//Insert the user into the database
					$sql1 = "INSERT INTO users (user_name, user_email, user_password) VALUES ('$name', '$email', '$hashedPwd')";
					mysqli_query($conn, $sql1);

					header("Location: ../login.php?signup=success");
					exit();
				}
			}
		}
	}
}
} else {
	header("Location: ../signup.php?signup=success");
	exit();
}
>>>>>>> 8c7589251da38d1ccc8fec40671c5f714d4e98ba
