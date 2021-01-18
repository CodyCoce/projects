<?php
	if (isset($_POST['create_game'])) {
		require 'db-login.php';
		
		$username = $_POST['username_create'];
		$party = (rand(1, 99999));
		$admin = 1;
		$pwd = (rand(1, 9));
		$q = $_POST['question_create'];
		$a = $_POST['answer_create'];
		
		if (empty($username)) {
			header("Location: index.php?error=empty");
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			header("Location: index.php?error=name");
			exit();
		}
		else if (!preg_match('/[^A-Za-z0-9_ -]*$/', $q)) {
			header("Location: index.php?error=q&details=".$q);
			exit();
		}
		else if (!preg_match('/[^A-Za-z0-9_ -]*$/', $a)) {
			header("Location: index.php?error=a&details=".$a);
			exit();
		}
		else {
			$sql = "SELECT party FROM users WHERE party=?";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: index.php?error=sql");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "s", $party);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0) {
					header("Location: create-game.php");
					exit();
				}
				else {
					$sql = "INSERT INTO users (name, party, is_admin, code, question, answer) VALUES (?, ?, ?, ?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: index.php?error=sql2&".$q.'='.$a);
					exit();
				}
				else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ssssss", $username, $party, $admin, $pwd, $q, $a);
					mysqli_stmt_execute($stmt);
					
					session_start();
					$_SESSION['name'] = $username;
					$_SESSION['party'] = $party;
					$_SESSION['admin'] = $admin;
					$_SESSION['pwd'] = $pwd;
					
					header("Location: index.php?p=".$party);
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
}
else {
	header("Location: index.php?baduser");
	exit();
}