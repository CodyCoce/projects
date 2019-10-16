<?php
		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */
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
				echo '<div class="profiles-list">';
				while($row = mysqli_fetch_array($result)) {
					echo "<ul class='box-color text-color'>";
						echo "<li>Social Media</li>";
						echo "<li>Facebook: <a href='".$row['ac_facebook']."'>".$row['ac_facebook']."</a></li>";
						echo "<li>Twitter: <a href='".$row['ac_twitter']."'>".$row['ac_twitter']."</a></li>";
						echo "<li>Instagram: <a href='".$row['ac_instagram']."'>".$row['ac_instagram']."</a></li>";
						echo "<li>Tumblr: <a href='".$row['ac_tumblr']."'>".$row['ac_tumblr']."</a></li>";
						echo "<li>LinkedIn: <a href='".$row['ac_linkedin']."'>".$row['ac_linkedin']."</a></li>";
						echo "<li>Amino: <a href='".$row['ac_amino']."'>".$row['ac_amino']."</a></li>";
						echo "<li>Indeed: <a href='".$row['ac_indeed']."'>".$row['ac_indeed']."</a></li>";
						echo "<li>GitHub: <a href='".$row['ac_github']."'>".$row['ac_github']."</a></li>";
					echo "</ul>";
					
					echo "</div>";
					echo '<div class="profiles-list">';
					
					echo "<ul class='box-color text-color'>";
						echo "<li>Art</li>";
						echo "<li>Art Fight: <a href='".$row['ac_artfight']."'>".$row['ac_artfight']."</a></li>";
						echo "<li>DeviantArt: <a href='".$row['ac_deviantart']."'>".$row['ac_deviantart']."</a></li>";
					echo "</ul>";
					
					echo "</div>";
					echo '<div class="profiles-list">';
					
					echo "<ul class='box-color text-color'>";
						echo "<li>Contact</li>";
						echo "<li>Email: <a href='mailto:".$row['email']."'>".$row['email']."</a></li>";
						echo "<li>Number: <a href='".$row['ac_phone']."'>".$row['ac_phone']."</a></li>";
						echo "<li>Discord: <a href='".$row['ac_discord']."'>".$row['ac_discord']."</a></li>";
						echo "<li>Skype: <a href='".$row['ac_skype']."'>".$row['ac_skype']."</a></li>";
						echo "<li>Telegram: <a href='".$row['ac_telegram']."'>".$row['ac_telegram']."</a></li>";
					echo "</ul>";
					
					echo "</div>";
					echo '<div class="profiles-list">';
					
					echo "<ul class='box-color text-color'>";
						echo "<li>Other</li>";
						echo "<li>Epic Games: <a href='".$row['ac_epicgames']."'>".$row['ac_epicgames']."</a></li>";
						echo "<li>Steam: <a href='".$row['ac_steam']."'>".$row['ac_steam']."</a></li>";
					echo "</ul>";
				}
				echo "</div>";
				// Free result set
				mysqli_free_result($result);
			}
			else {
				echo "<div class='ohno'><p class='box-color text-color'>This person does not have any accounts set up! Perhaps you should make an account and show them how it is done!</p></div>";
			}
		}
		else {
			echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
		}
		 
		// Close connection
		mysqli_close($link);
	?>