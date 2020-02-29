<?php
	require 'db-login.php';
	session_start();
	
	if (isset($_GET['p'])) {
		$party = $_GET['p'];
	}
	if (isset($_SESSION['name'])) {
		$user = $_SESSION['name'];
	}
	
	$mode = $_SESSION['mode'];
	
	$sql = "DELETE FROM users WHERE name='$user';";
	mysqli_query($conn, $sql);
	
	session_unset();
	session_destroy();
	session_start();
	$_SESSION['mode'] = $mode;
	header("Location: index.php");