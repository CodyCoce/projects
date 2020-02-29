<?php
	if (isset($_POST['submit'])) {
		require 'db_login.php';
		
		$name_f = $_POST['name_f'];
		$name_m = $_POST['name_m'];
		$name_l = $_POST['name_l'];
		$name = $name_f[0].$name_m[0].$name_l[0];
		$score = $_POST['score'];
		$game = $_POST['game'];
		
		if (empty($name) || empty($score)) {
			header("Location: record.php?empty");
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9_-]*$/", $name)) {
			header("Location: record.php?badname");
			exit();
		}
		$sql = "SELECT name FROM top WHERE name=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: record.php?sql1");
			exit();
		}
		else {
			$sql = "INSERT INTO top (name, score, game) VALUES (?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: record.php?sql2");
				exit();
			}
			else {
				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "sss", $name, $score, $game);
				mysqli_stmt_execute($stmt);
				
				header("Location: index.php");
				exit();
			}
		}
	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
	}
	else {
		header("Location: record.php?baduser");
		exit();
	}