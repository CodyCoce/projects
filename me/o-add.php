<?php
	if (isset($_POST['links-submit-o'])) {
		require 'db-login.php';
		
		session_start();
		$epicgames = $_POST['epicgames'];
		$steam = $_POST['steam'];
		$id = $_SESSION['id'];
		
		if (!empty($deviantart)) {
			$sql = "UPDATE user_data SET ac_epicgames='$epicgames' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($steam)) {
			$sql = "UPDATE user_data SET ac_steam='$steam' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		else {
			header("Location: signup.php?other=emptyfields&user=".$_SESSION["first_name"]);
			exit();
		}
		
		header("Location: signup.php?other=success&user=".$_SESSION["first_name"]);
		exit();
	}
	else {
		header("Location: signup.php?baduser&user=".$_SESSION["first_name"]);
		exit();
	}