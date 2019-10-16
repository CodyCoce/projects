<?php
	session_start();
	include_once("db-login.php");
	if (empty($_GET['user'])) {
		$user = 'User';
	}
	else if (isset($_GET['user'])) {
		$user = $_GET['user'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Basically, this site is a hub for all your account names. You link other people to this site, which saves you time when linking accounts to other accounts.">
<meta name="keywords" content="HTML,CSS,JavaScript,PHP,account,link,sync,facebook,twitter,github,account link">
<meta name="author" content="Steven Larner">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="scripts.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<title><?php echo $user; ?>'s Profiles</title>
</head>
<body class="background-color">

<?php
	include("header.php");
?>

<header class="box-color">
	<p class="title text-color"><?php echo $user; ?>'s Profiles</p>
</header>

<div class="main">
	
	<div class="desktop">
		<?php
			include("index-content.php");
		?>
	</div>
	
	<div class="mobile">
		<?php
			include("index-content-mobile.php");
		?>
	</div>

</div>

<?php
	include("footer.php");
?>