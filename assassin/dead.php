<?php
	require 'db-login.php';
	session_start();
	
	$party = $_GET['p'];
	$user = $_SESSION['name'];
	$admin = $_SESSION['admin'];
	$target = $_SESSION['target'];
	$_SESSION['dead'] = 1;
	
	$sql = "UPDATE users SET is_dead=1 WHERE name='$user' AND party='$party'";
	mysqli_query($conn, $sql);
	
	$sql = "SELECT name FROM users WHERE target='$user' AND party='$party'"; // Selects the user that killed me
	$killer = mysqli_query($conn, $sql); // Holds the user who killed me
	
	$sql = "SELECT * FROM users WHERE party='$party' AND is_dead=0"; // Select all living users	
	$result = mysqli_query($conn, $sql); // Holds new target but in array
	$players = array(); // creates empty array
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$players[] = $row['name'];
		}
	}
	
	shuffle($players); // randomizes players array
	
	$sql = "UPDATE users SET target='$players[0]' WHERE name='$killer' AND party='$party'";
	mysqli_query($conn, $sql);

	
	//header("Location: index.php?p=".$party."&start");
	//exit();