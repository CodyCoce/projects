<?php
	require("db-login.php");
	
	$party = $_GET['p'];
	
	// Attempt select query execution
	$sql = "SELECT * FROM users WHERE party='$party'";
	if($result = mysqli_query($conn, $sql)) {
		if(mysqli_num_rows($result) > 0) {
			echo '<ol>';
			while($row = mysqli_fetch_array($result)) {
				echo '<li>'.$row['name'].'</li>';
			}
			echo '</ol>';
			// Free result set
			mysqli_free_result($result);
		}
		else {
			echo 'Game ended';
		}
	}
	else {
		echo "ERROR: Could not able to execute $sql.".mysqli_error($conn);
	}