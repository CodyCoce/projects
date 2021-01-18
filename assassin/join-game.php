<?php
	if (isset($_POST['join_game'])) {
		require 'db-login.php';
		
		$username = $_POST['username_join'];
		$party = $_POST['party_join'];
		$admin = 0;
		$pwd = (rand(1, 9));
		$q = $_POST['question_join'];
		$a = $_POST['answer_join'];
		
		$sql = "SELECT * FROM users WHERE party='$party'";
		if ($result = mysqli_query($conn, $sql)) {
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_array($result)) {
					$game_status = $row['is_active'];
					if ($username == $row['name']) {
						header("Location: index.php?nametaken");
						exit();
					}
				}
				// Free result set
				mysqli_free_result($result);
			}
			else {
				// error
			}
		}
		else {
			echo "ERROR: Was not able to execute $sql.".mysqli_error($conn);
		}
		
		// For now, if the game has already started, prevent joining
		// Later on though, you gotta give the admin the option to shuffle names again
		// Also give people here the option to just spectate
		if ($game_status == 1) {
			header("Location: index.php?full");
			exit();
		}
		
		if (empty($username) || empty($party)) {
			header("Location: index.php?error=empty");
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			header("Location: index.php?error=name");
			exit();
		}
		else if (!preg_match('/[^A-Za-z0-9_ -]*$/', $q)) {
			header("Location: index.php?error=q");
			exit();
		}
		else if (!preg_match('/[^A-Za-z0-9_ -]*$/', $a)) {
			header("Location: index.php?error=a");
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
				$sql = "INSERT INTO users (name, party, is_admin, code, question, answer) VALUES (?, ?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: index.php?error=sql2");
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
					
					header("Location: index.php?p=".$party."&start");
					exit();
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