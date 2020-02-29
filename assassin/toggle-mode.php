<?php
	require("db-login.php");
	session_start();
	
	if ($_SESSION['mode'] == 'light') {
		$_SESSION['mode'] = 'dark';
	}
	else if ($_SESSION['mode'] == 'dark') {
		$_SESSION['mode'] = 'light';
	}
	else {
		$_SESSION['mode'] = '';
	}
	
	header("Location: index.php");
	exit();
?>