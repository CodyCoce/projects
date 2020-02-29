<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Highscores for old games on Jakk's Plug 'N Play!">
<meta name="keywords" content="jakks,pacman,rallyx,digdug,galaxian,bosconian,slarner">
<meta name="author" content="Steven Larner">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex">
<script src="scripts.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href='https://fonts.googleapis.com/css?family=Press+Start+2P:400' rel='stylesheet' type='text/css'>
<title>Scoreboard</title>
</head>
<body>

<header>
	<p class="namco">
		<span class="line"></span>
		<span><a href="index.php">Main Menu</a></span>
		<span class="line"></span>
		<span><a href="record.php">Submit Score</a></span>
		<span class="line"></span>
	</p>
	
	<p class="imgs">
		<span><img src="resources/pacman.png" alt="pacman.png" /></span>
		<span><img src="resources/digdug.png" alt="digdug.png" /></span>
		<span><img src="resources/rallyx.png" alt="rallyx.png" /></span>
		<span><img src="resources/galaxian.png" alt="galaxian.png" /></span>
		<span><img src="resources/bosconian.png" alt="bosconian.png" /></span>
	</p>
</header>