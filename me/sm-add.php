<?php
	if (isset($_POST['links-submit-sm'])) {
		require 'db-login.php';
		
		session_start();
		$facebook = $_POST['facebook'];
		$twitter = $_POST['twitter'];
		$instagram = $_POST['instagram'];
		$tumblr = $_POST['tumblr'];
		$linkedin = $_POST['linkedin'];
		$amino = $_POST['amino'];
		$indeed = $_POST['indeed'];
		$github = $_POST['github'];
		$id = $_SESSION['id'];
		
		if (!empty($facebook)) {
			$sql = "UPDATE user_data SET ac_facebook='$facebook' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($twitter)) {
			$sql = "UPDATE user_data SET ac_twitter='$twitter' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($instagram)) {
			$sql = "UPDATE user_data SET ac_instagram='$instagram' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($tumblr)) {
			$sql = "UPDATE user_data SET ac_tumblr='$tumblr' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($linkedin)) {
			$sql = "UPDATE user_data SET ac_linkedin='$linkedin' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($amino)) {
			$sql = "UPDATE user_data SET ac_amino='$amino' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($indeed)) {
			$sql = "UPDATE user_data SET ac_indeed='$indeed' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		if (!empty($github)) {
			$sql = "UPDATE user_data SET ac_github='$github' WHERE id='$id'";
			mysqli_query($conn, $sql);
		}
		else {
			header("Location: signup.php?socialmedia=emptyfields&user=".$_SESSION["first_name"]);
			exit();
		}
		
		header("Location: signup.php?socialmedia=success&user=".$_SESSION["first_name"]);
		exit();
	}
	else {
		header("Location: signup.php?baduser&user=".$_SESSION["first_name"]);
		exit();
	}