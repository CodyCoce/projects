<?php
	session_start();
	include_once("db-login.php");
	
	if (empty($_GET)) {
		$user = 'Unknown User';
	}
	else {
		$user = $_GET['user'];
	}
	if (empty($user)) {
		$user = 'Unknown User';
	}
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
<title>Customize</title>
</head>
<body class="background-color">

<?php
	include("header.php");
?>

<header class="box-color">
	<p class="title text-color">Customize</p>
</header>

<div class="desktop">
	<div class="color-options">
		<div class="themes box-color">
			<h3 class="text-color">Pick a theme to represent your profile!</h3>
			
			<form action="theme-colors.php" method="post" class="text-color">
				<label class="blue">
				<input type="radio" name="color-pick" value="blue" /></label>
				
				<label class="green">
				<input type="radio" name="color-pick" value="green" /></label>
				
				<label class="orange">
				<input type="radio" name="color-pick" value="orange" /></label>
				
				<label class="red">
				<input type="radio" name="color-pick" value="red" /></label><br>
				
				<label class="purple">
				<input type="radio" name="color-pick" value="purple" /></label>
				
				<label class="pink">
				<input type="radio" name="color-pick" value="pink" /></label>
				
				<label class="gray">
				<input type="radio" name="color-pick" value="gray" /></label><br>
				
				<input type="submit" name="submit-theme" class="submit" />
			</form>
			
		</div>
		
		<div class="advanced box-color">
			<h3 class="text-color">Advanced options</h3>
			
			<form action="advanced-colors.php" method="post" class="text-color">
				<p><label for="box-hex">Box Color (HEX)</label><br>
				<input type="text" name="box-hex" placeholder="ff00aa" /></p>
				
				<p><label for="background-hex">Background Color (HEX)</label><br>
				<input type="text" name="background-hex" placeholder="ff00aa" /></p>
				
				<p><label for="text-hex">Text Colors (HEX)</label><br>
				<input type="text" name="text-hex" placeholder="ff00aa" /></p>
				
				<p><input type="submit" name="submit-hex" value="Submit" /></p>
			</form>
		</div>
	</div>
</div>

<div class="mobile">
	<div class="color-options">
		<div class="themes box-color">
			<h3 class="text-color">Pick a theme to represent your profile!</h3>
			
			<form action="theme-colors.php" method="post" class="text-color">
				<label class="blue">
				<input type="radio" name="color-pick" value="blue" /></label>
				
				<label class="green">
				<input type="radio" name="color-pick" value="green" /></label>
				
				<label class="orange">
				<input type="radio" name="color-pick" value="orange" /></label>
				
				<label class="red">
				<input type="radio" name="color-pick" value="red" /></label><br>
				
				<label class="purple">
				<input type="radio" name="color-pick" value="purple" /></label>
				
				<label class="pink">
				<input type="radio" name="color-pick" value="pink" /></label>
				
				<label class="gray">
				<input type="radio" name="color-pick" value="gray" /></label><br>
				
				<input type="submit" name="submit-theme" class="submit" />
			</form>
			
		</div>
	</div>
	
	<div class="color-options">
		<div class="advanced box-color">
			<h3 class="text-color">Advanced options</h3>
			
			<form action="advanced-colors.php" method="post" class="text-color">
				<p><label for="box-hex">Box Color (HEX)</label><br>
				<input type="text" name="box-hex" placeholder="#ff00aa" /></p>
				
				<p><label for="background-hex">Background Color (HEX)</label><br>
				<input type="text" name="background-hex" placeholder="#ff00aa" /></p>
				
				<p><label for="text-hex">Text Colors (HEX)</label><br>
				<input type="text" name="text-hex" placeholder="#ff00aa" /></p>
				
				<p><input type="submit" name="submit-hex" value="Submit" /></p>
			</form>
		</div>
	</div>
</div>
<?php
	include("footer.php");
?>