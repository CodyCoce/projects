<?php 
	include_once("db-login.php");
	
	if (empty($_GET['user'])) {
		$user = 'User';
	}
	else if (isset($_GET['user'])) {
		$user = $_GET['user'];
	}
	
	if (isset($user)) {
		//Xampp login
		//$link = mysqli_connect("localhost", "root", "pwdpwd", "user_profiles");
		
		// Hostwinds login
		$link = mysqli_connect("localhost", "fosqhemv_me", "6R1s8EizWxex", "fosqhemv_me");
		
		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		 
		// Attempt select query execution
		$sql = "SELECT * FROM user_data WHERE first_name='$user'";
		if($result = mysqli_query($link, $sql)) {
			if(mysqli_num_rows($result) > 0) {
				echo '<style>';
				while($row = mysqli_fetch_array($result)) {
					if (empty($row["box_color"]) || empty($row["background_color"]) || empty($row["text_color"])) {
						echo '
						.box-color {
							background-color:#'.$row["adv_box_color"].' !important;
						}
						.background-color {
							background-color:#'.$row["adv_background_color"].' !important;
						}
						.text-color, .text-color a {
							color:#'.$row["adv_text_color"].' !important;
						}
						';
					}
					else if (!empty($row["box_color"]) || !empty($row["background_color"]) || !empty($row["text_color"])) {
						echo '
						.box-color {
							background-color:#'.$row["box_color"].' !important;
						}
						.background-color {
							background-color:#'.$row["background_color"].' !important;
						}
						.text-color, .text-color a {
							color:#'.$row["text_color"].' !important;
						}
						';
					}
				}
				echo "</style>";
				// Free result set
				mysqli_free_result($result);
			}
		}
		else {
			echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
		}
		 
		// Close connection
		mysqli_close($link);
	}
	
	echo '
	<nav>
		<a href="index.php?user='; if (isset($_SESSION["first_name"])) {echo $_SESSION["first_name"];} echo '" class="text-color box-color">Home</a>
		<a href="about.php?user='; if (isset($_SESSION["first_name"])) {echo $_SESSION["first_name"];} echo '" class="text-color box-color">About</a>
		<a href="signup.php?user='; if (isset($_SESSION["first_name"])) {echo $_SESSION["first_name"];} echo '" class="signupbtn box-color text-color">'; if (isset($_SESSION["id"])) {echo 'Edit Profile';} else {echo 'Sign Up/In';} echo '</a>
	</nav>
	';
?>