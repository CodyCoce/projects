<?php	
	if (isset($_POST['submit-hex'])) {
		require 'db-login.php';
		
		session_start();
		$box_hex = $_POST['box-hex'];
		$background_hex = $_POST['background-hex'];
		$text_hex = $_POST['text-hex'];
		$id = $_SESSION['id'];
		
		if (isset($_POST['submit-hex'])) {
			if ($theme != '0') {
				$sql = "UPDATE user_data SET box_color='', background_color='', text_color='', adv_box_color='$box_hex', adv_background_color='$background_hex', adv_text_color='$text_hex' WHERE id='$id'";
				mysqli_query($conn, $sql);
			}
			else if ($theme == '0') {
				header("Location: customize.php?hex=error&user=".$_SESSION["first_name"]);
				exit();
			}
			
		}
		
		header("Location: customize.php?hex=success&user=".$_SESSION["first_name"]);
		exit();
	}
	else {
		header("Location: customize.php?baduser&user=".$_SESSION["first_name"]);
		exit();
	}