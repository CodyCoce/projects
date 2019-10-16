<?php
	$sql = "SELECT * FROM items;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div class="item"><p><img src="resources/'.$row["Image"].'" alt="'.$row["Image"].'"></p><p>'.$row["Description"].'</p></div>';
		}
	}
?>