<?php
	require 'db-login.php';
	session_start();
	
	// MY INFO
	$party = $_GET['p'];
	$user = $_SESSION['name'];
	$admin = $_SESSION['admin'];
	$target = $_SESSION['target'];
	$pwd = $_POST['pwd'];
	$_SESSION['dead'] = 1;
	
	
	$sql = "SELECT * FROM users WHERE party='$party' AND name='$target'"; 
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$target_answer = $row['answer'];
		}
	}
	
	if ($pwd == $target_answer) {
		$sql = "UPDATE users SET is_dead=1 WHERE name='$target' AND party='$party'";
		mysqli_query($conn, $sql);
		
		// MY TARGET'S INFO
		$sql = "SELECT * FROM users WHERE party='$party' AND name='$target'";
		$new_target = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($new_target)) {
			$ntarget = $row['target'];
			$sql = "UPDATE users SET target='$ntarget' WHERE name='$user' AND party='$party'";
			mysqli_query($conn, $sql);
		}
		$_SESSION['target'] = $row['target'];
		$target = $_SESSION['target'];
		
		header("Location: index.php?p=".$party."&start");
		exit();
	}
	else {
		header("Location: index.php?p=".$party."&start&defeat&incorrect");
		exit();
	}