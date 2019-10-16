<?php
	if (isset($_POST['signup-submit'])) {
		require 'db-login.php';
		
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$password = $_POST['password'];
		$passwordRepeat = $_POST['password_again'];
		$email = $_POST['email'];
		
		if (empty($firstname) || empty($lastname) || empty($password) ||  empty($email)) {
			header("Location: signup.php?error=emptyfields");
			exit();
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $firstname) || !filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $lastname)) {
			header("Location: signup.php?error=invalidmail&error=invalidname");
			exit();
		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: signup.php?error=invalidmail");
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $firstname)) {
			header("Location: signup.php?error=invalidname");
			exit();
		}
		else if ($password !== $passwordRepeat) {
			header("Location: signup.php?error=incorrectpassword");
			exit();
		}
		else {
			$sql = "SELECT email FROM user_data WHERE email=?";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: signup.php?error=sql");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "s", $email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0) {
					header("Location: signup.php?error=usertaken");
					exit();
				}
				else {
					$sql = "INSERT INTO user_data (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: signup.php?error=sql2");
					exit();
				}
				else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
					
					header("Location: signup.php?success");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
}
else {
	header("Location: signup.php?baduser");
	exit();
}