<?php
	if (isset($_POST['signin-submit'])) {
		require 'db-login.php';
		
		$email = $_POST['email_signin'];
		$password = $_POST['password_signin'];
		
		if (empty($email) || empty($password)) {
			header("Location: signup.php?error=emptyfields");
			exit();
		}
		else {
			$sql = "SELECT * FROM user_data WHERE email=?;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: signup.php?error=sql");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "s", $email);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)) {
					$pwdCheck = password_verify($password, $row['password']);
					if ($pwdCheck == false) {
						header("Location: signup.php?error=incorrectpassword");
						exit();
					}
					else if ($pwdCheck == true) {
						session_start();
						$_SESSION['id'] = $row['id'];
						$_SESSION['first_name'] = $row['first_name'];
						$_SESSION['email'] = $row['email'];
						
						header("Location: signup.php?signin=success&user=".$_SESSION['first_name']);
						exit();
					}
					else {
						header("Location: signup.php?error=incorrectpassword");
						exit();
					}
				}
				else {
					header("Location: signup.php?error=nouser");
					exit();
				}
			}
		}
	}
	else {
		header("Location: index.php?error=baduser");
		exit();
	}