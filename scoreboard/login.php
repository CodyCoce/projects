<?php
	if (isset($_POST['submit'])) {
		
		$pass = $_POST['password'];
		$true_pass = 'not_the_real_password';
		
		if (empty($pass)) {
			header("Location: record.php?empty");
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9_-]*$/", $pass)) {
			header("Location: record.php?bad");
			exit();
		}
		else if ($pass == $true_pass) {
			session_start();
			$_SESSION['admin_password_family'] = true;
			header("Location: record.php");
			exit();
		}
		else if ($pass !== $true_pass) {
			header("Location: record.php?wrongpass");
			exit();
		}
	}
	else {
		header("Location: record.php?baduser");
		exit();
	}
