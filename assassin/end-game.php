<?php
	require 'db-login.php';
	session_start();
	$party = $_GET['p'];
	$user = $_SESSION['name'];
	$admin = $_SESSION['admin'];
	
	//$sql = "UPDATE users SET is_dead=1 WHERE party='$party'";
	$sql = "DELETE FROM users WHERE party='$party';";
	mysqli_query($conn, $sql);
	
	$sql = "UPDATE SET is_active=0 WHERE party='$party';";
	mysqli_query($conn, $sql);
	
	header("Location: index.php");
	exit();