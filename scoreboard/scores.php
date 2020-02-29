<?php
	require 'db_login.php';
	if ($game == 'none') {
		$sql = "SELECT * FROM top ORDER BY score DESC LIMIT 5;";
	}
	else if ($game == 'all') {
		$sql = "SELECT * FROM top ORDER BY score DESC";
	}
	else if (isset($_GET['game'])) {
		$sql = "SELECT * FROM top WHERE game='$game' ORDER BY score DESC;";
	}
	else {
		$sql = "SELECT * FROM top WHERE game='$game' ORDER BY score DESC LIMIT 1;";
	}
	$i = 1;
	
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo '<p class="score_list"><span class="id">#'.$i.'</span><span class="name">'.$row['name'].'</span><span class="score">'.$row['score'].'</span><span class="game_hint"><img src="resources/'.$row['game'].'.png" alt="'.$row['game'].'" /></span></p>';
			$i++;
		}
		
	}
	else {
		echo '
			<p class="score_list"><span>#0</span><span class="name">???</span><span>0</span><span><img src="resources/none.png" alt="none.png" /></span></p>
		';
	}