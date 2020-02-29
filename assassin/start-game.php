<?php
	// Load SQL login and get session storage
	require("db-login.php");
	session_start();
	
	// Sets up variables
	$party = $_GET['p'];
	$sql = "SELECT * FROM users WHERE party='$party'";
	$result = mysqli_query($conn, $sql);
	$players = array(); // creates empty array
	$targets = array(); // creates empty array
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$players[] = $row['name'];
			//$targets[] = $row['target'];
		}
	}
	
	shuffle($players);
	
	// Randomize who gets on who's hitlist
	$targets = $players;
	//$num = 0; // testing purposes
	$sql = "SELECT target FROM users WHERE party='$party'";
	$result = mysqli_query($conn, $sql);
	
	function array_move_elem($array, $from, $to) {
		if ($from == $to) { return $array; }
		$c = count($array);
		if (($c > $from) and ($c > $to)) {
			if ($from < $to) {
				$f = $array[$from];
				for ($i = $from; $i < $to; $i++) {
					$array[$i] = $array[$i+1];
				}
				$array[$to] = $f;
			} else {
				$f = $array[$from];
				for ($i = $from; $i > $to; $i--) {
					$array[$i] = $array[$i-1];
				}
				$array[$to] = $f;
			}
		   
		}
		return $array;
	}
	$targets_len = count($targets) - 1;
	$targets = array_move_elem($targets, 0, $targets_len); // Move element in position 0 to last position...
	
	
	for ($cnt = 0; $cnt < count($players); ++$cnt) {
		$sql = "UPDATE users SET target='$targets[$cnt]', is_dead=0, is_active=1 WHERE name='$players[$cnt]' AND party='$party'";
		mysqli_query($conn, $sql);
	}
	
	header("Location: index.php?p=".$party."&start");
	exit();
?>