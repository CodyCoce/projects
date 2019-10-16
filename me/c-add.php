<?php
	if (isset($_POST['links-submit-c'])) {
		require 'db-login.php';
		
		session_start();
		$phone = $_POST['phone'];
		$discord = $_POST['discord'];
		$skype = $_POST['skype'];
		$telegram = $_POST['telegram'];
		$id = $_SESSION['id'];
		
		if (!empty($phone)) {
			$sql = "UPDATE user_data SET ac_phone='$phone' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($discord)) {
			$sql = "UPDATE user_data SET ac_discord='$discord' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($skype)) {
			$sql = "UPDATE user_data SET ac_skype='$skype' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($telegram)) {
			$sql = "UPDATE user_data SET ac_telegram='$telegram' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		else {
			header("Location: signup.php?contact=emptyfields&user=".$_SESSION["first_name"]);
			exit();
		}
		
		header("Location: signup.php?contact=success&user=".$_SESSION["first_name"]);
		exit();
	}
	else {
		header("Location: signup.php?baduser&user=".$_SESSION["first_name"]);
		exit();
	}