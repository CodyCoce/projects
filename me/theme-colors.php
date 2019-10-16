<?php
	if (isset($_POST['submit-theme'])) {
		require 'db-login.php';
		
		session_start();
		
		// box_color
		$red_box = 'D92B3D';
		$pink_box = 'FB97CC';
		$orange_box = 'EB8900';
		$yellow_box = 'EFEE72';
		$green_box = '51DE47';
		$blue_box = '0047AB';
		$purple_box = '8A29D9';
		$gray_box = '555555';
		$theme_box = '0';
		
		// background_color
		$red_background = 'FFD8DD';
		$pink_background = 'FBDFFF';
		$orange_background = 'FFE3D9';
		$yellow_background = 'EFEECD';
		$green_background = 'E3FFD5';
		$blue_background = 'D7E6FF';
		$purple_background = 'EAD8FF';
		$gray_background = 'efefef';
		$theme_background = '0';
		
		// text_color
		$red_text = 'fff';
		$pink_text = 'fff';
		$orange_text = 'fff';
		$yellow_text = 'fff';
		$green_text = 'fff';
		$blue_text = 'fff';
		$purple_text = 'fff';
		$gray_text = 'fff';
		$theme_text = '0';
		
		$id = $_SESSION['id'];
		
		// If form method='post'
		if (isset($_POST['color-pick'])) {			
			switch($_POST['color-pick']) {
				case "blue":
					$theme_box = $blue_box;
					$theme_background = $blue_background;
					$theme_text = $blue_text;
					break;
				case "green":
					$theme_box = $green_box;
					$theme_background = $green_background;
					$theme_text = $green_text;
					break;
				case "orange":
					$theme_box = $orange_box;
					$theme_background = $orange_background;
					$theme_text = $orange_text;
					break;
				case "red":
					$theme_box = $red_box;
					$theme_background = $red_background;
					$theme_text = $red_text;
					break;
				case "purple":
					$theme_box = $purple_box;
					$theme_background = $purple_background;
					$theme_text = $purple_text;
					break;
				case "pink":
					$theme_box = $pink_box;
					$theme_background = $pink_background;
					$theme_text = $pink_text;
					break;
				case "gray":
					$theme_box = $gray_box;
					$theme_background = $gray_background;
					$theme_text = $gray_text;
					break;
				default:
					header("Location: customize.php?theme=error&user=".$_SESSION["first_name"]);
					exit();
			}
			
			if ($theme != '0') {
				$sql = "UPDATE user_data SET box_color='$theme_box', background_color='$theme_background', text_color='$theme_text' WHERE id='$id'";
				mysqli_query($conn, $sql);
			}
			else if ($theme == '0') {
				header("Location: customize.php?theme=error&user=".$_SESSION["first_name"]);
				exit();
			}
			
		}
		
		header("Location: customize.php?theme=success&user=".$_SESSION["first_name"]);
		exit();
	}
	else {
		header("Location: customize.php?baduser&user=".$_SESSION["first_name"]);
		exit();
	}