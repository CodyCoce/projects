<?php
	require("db-login.php");
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Assasin DESC.">
<meta name="keywords" content="assassin,gotcha,web game,web app,steven larner,steven,larner">
<meta name="author" content="Steven Larner">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="scripts.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<title>Assassin</title>
</head>
<body>

<!-- Menu -->
<div class="container menu">
	<h1>Dev Thoughts</h1>
</div>

<!--
	<p style="display:flex;justify-content:space-evenly;margin-top:-30px;">Version 0.1 - Functionality</p>
-->
<p style="display:flex;justify-content:space-evenly;margin-top:-30px;">Version 0.2 - Design Changes</p>

<div class="updates">
	<ul>Updates
		<li>Updated colors</li>
		<li>Created this new page which features bug reports, upcoming updates, and new updates!</li>
		<li>Added rules</li>
		<li>Added compatibility for Microsoft Edge</li>
		<li>Added error guides</li>
		<li>Leave confirm button</li>
		<li>Joining a game that has already started no longer breaks stuff</li>
		<li>Users with the same name broke the system, so duplicate names are blocked</li>
		<li>Fixed unintended bug where taken names were global</li>
		<li>Passcode options</li>
		<li>Fixed strange spacing issue on mobile</li>
		
		<ul>Supported
			<li>Chrome</li>
			<li>Edge</li>
			<li>Firefox</li>
			<li>Opera</li>
			<li>Edge</li>
		</ul>
		<ul>Unsupported
			<li>Internet Explorer</li>
		</ul>
	</ul>
</div>

<div class="upcoming">
	<ul>Upcoming updates
		<li>Better win detection</li>
		<li>Facebook share button on win</li>
		<li>Ready button</li>
		<li>Hide names until the game starts</li>
		<li>Vibration when eliminated</li>
		<li>Continue lobby after game ends</li>
	</ul>
</div>

<div class="bugs">
	<ul>Known bugs
		
	</ul>
</div>

<div class="container menu">
	<p><a href="index.php" class="btn">Back to Game</a></p>
	<p><a href="rules.php" class="btn">Rules</a></p>
</div>

<div class="container menu">
	<p><a href="https://www.patreon.com/stevenlarner" class="btn" target="_blank">Support me on Patreon!</a></p>
</div>

<script>

</script>
</body>
</html>