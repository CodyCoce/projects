<?php
	session_start();
	include_once("db-login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="This is a template document.">
<meta name="keywords" content="HTML,CSS,JavaScript,template,document">
<meta name="author" content="Steven Larner">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="scripts.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<title>About</title>
</head>
<body class="background-color">

<?php
	include("header.php");
?>

<header class="box-color">
	<p class="title text-color">About</p>
</header>

<div class="desktop">
	<div class="information">
		<div class="box-color text-color">
			<h1>Information</h1>
			<p>This page is used to help people link their accounts to other accounts without having to look up all the links all over again every time.</p>
			<p>It may take some time at first to link everything up on this site, but it'll save you time later when setting up a new account.</p>
		</div>
		
		<div class="box-color text-color">
			<h1>Instructions</h1>
			<p>If you want to fill this page with your own links...</p>
			<ol>
				<li />Set up an account by clicking "Sign Up/In"
				<li />Sign in after creating your account
				<li />Add any links you want tied to your account
				<li />After you're done, click "Save"
				<li />After that, click "Home"
				<li />Copy the URL and paste it into any of your accounts
			</ol>
			<p>Now you're done! Whenever you refer someone to this website, they'll see all your links you've provided!</p>
		</div>
	</div>
</div>

<div class="mobile">
	<div class="information">
		<div class="box-color text-color">
			<h1>Information</h1>
			<p>This page is used to help people link their accounts to other accounts without having to look up all the links all over again every time.</p>
			<p>It may take some time at first to link everything up on this site, but it'll save you time later when setting up a new account.</p>
		</div>
	</div>
	<div class="information">
		<div class="box-color text-color">
			<h1>Instructions</h1>
			<p>If you want to fill this page with your own links...</p>
			<ol>
				<li />Set up an account by clicking "Sign Up/In"
				<li />Sign in after creating your account
				<li />Add any links you want tied to your account
				<li />After you're done, click "Save"
				<li />After that, click "Home"
				<li />Copy the URL and paste it into any of your accounts
			</ol>
			<p>Now you're done! Whenever you refer someone to this website, they'll see all your links you've provided!</p>
		</div>
	</div>
</div>
<?php
	include("footer.php");
?>