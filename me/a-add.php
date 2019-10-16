<?php
	if (isset($_POST['links-submit-a'])) {
		require 'db-login.php';
		
		session_start();
		$artfight = $_POST['artfight'];
		$deviantart = $_POST['deviantart'];
		$id = $_SESSION['id'];
		
		if (!empty($artfight)) {
			$sql = "UPDATE user_data SET ac_artfight='$artfight' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($deviantart)) {
			$sql = "UPDATE user_data SET ac_deviantart='$deviantart' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		else {
			header("Location: signup.php?art=emptyfields&user=".$_SESSION["first_name"]);
			exit();
		}
		
		header("Location: signup.php?art=success&user=".$_SESSION["first_name"]);
		exit();
	}
	else {
		header("Location: signup.php?baduser&user=".$_SESSION["first_name"]);
		exit();
	}