<?php
	$sql = "SELECT * FROM inventory;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<p id="'.$row["Trainer"].'"><img src="'.$row["Pokemon_Image"].'" alt="'.$row["Pokemon_Image"].'"><br>'.$row["Pokemon_Name"].'</p>';
		}
	}
?>