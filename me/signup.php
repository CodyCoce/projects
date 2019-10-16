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
<title>User Profiles Signup</title>
</head>
<body class="background-color">

<?php
	include("header.php");
?>

<header class="box-color">
	<p class="title text-color">Sign Up / Sign In</p>
</header>

<div class="desktop">
	<div class="profile hide">
	
		<div class="social-media-form box-color">
			<form action="sm-add.php" method="post" class="text-color">
				
				<h2>Social Media</h2>
				
				<p><label for="facebook">Facebook</label><br />
				<input type="text" name="facebook" /></p>
				
				<p><label for="twitter">Twitter</label><br />
				<input type="text" name="twitter" /></p>
				
				<p><label for="instagram">Instagram</label><br />
				<input type="text" name="instagram" /></p>
				
				<p><label for="tumblr">Tumblr</label><br />
				<input type="text" name="tumblr" /></p>
				
				<p><label for="linkedin">LinkedIn</label><br />
				<input type="text" name="linkedin" /></p>
				
				<p><label for="amino">Amino</label><br />
				<input type="text" name="amino" /></p>
				
				<p><label for="indeed">Indeed</label><br />
				<input type="text" name="indeed" /></p>
				
				<p><label for="github">GitHub</label><br />
				<input type="text" name="github" /></p>
				
				<p><input type="submit" name="links-submit-sm" value="Submit" /></p>
			
			</form>
		</div>
			
		<div class="art-form box-color">
			<form action="a-add.php" method="post" class="text-color">
				
				<h2>Art</h2>
				
				<p><label for="artfight">ArtFight</label><br />
				<input type="text" name="artfight" /></p>
				
				<p><label for="deviantart">DeviantArt</label><br />
				<input type="text" name="deviantart" /></p>
				
				<p><input type="submit" name="links-submit-a" value="Submit" /></p>
				
			</form>
		</div>
			
		<div class="contact-form box-color">
			<form action="c-add.php" method="post" class="text-color">
				
				<h2>Contact</h2>
				
				<p><label for="phone">Phone</label><br />
				<input type="text" name="phone" /></p>
				
				<p><label for="discord">Discord</label><br />
				<input type="text" name="discord" /></p>
				
				<p><label for="skype">Skype</label><br />
				<input type="text" name="skype" /></p>
				
				<p><label for="telegram">Telegram</label><br />
				<input type="text" name="telegram" /></p>
				
				<p><input type="submit" name="links-submit-c" value="Submit" /></p>
				
			</form>
		</div>
			
		<div class="other-form box-color">
			<form action="o-add.php" method="post" class="text-color">
				
				<h2>Other</h2>
				
				<p><label for="epicgames">Epic Games</label><br />
				<input type="text" name="epicgames" /></p>
				
				<p><label for="steam">Steam</label><br />
				<input type="text" name="steam" /></p>
				
				<p><input type="submit" name="links-submit-o" value="Submit" /></p>
				
			</form>
		</div>
	</div>
	
	<div class="color-choose box-color" style="display:none;">
		<p><a href="customize.php?user=<?php if (isset($_SESSION["first_name"])) {echo $_SESSION["first_name"];} ?>" class="text-color">Customize Colors</a></p>
	</div>
	
	<div class="signout box-color" style="display:none;" class="box-color">
		<p><a href="signout.php" class="text-color">Sign Out</a></p>
	</div>
</div>
	
	
<div class="mobile">
	<div class="profile-mobile" style="display:none;">
	
		<div class="social-media-form box-color">
			<form action="sm-add.php" method="post" class="text-color">
				
				<h2>Social Media</h2>
				
				<p><label for="facebook">Facebook</label><br />
				<input type="text" name="facebook" /></p>
				
				<p><label for="twitter">Twitter</label><br />
				<input type="text" name="twitter" /></p>
				
				<p><label for="instagram">Instagram</label><br />
				<input type="text" name="instagram" /></p>
				
				<p><label for="tumblr">Tumblr</label><br />
				<input type="text" name="tumblr" /></p>
				
				<p><label for="linkedin">LinkedIn</label><br />
				<input type="text" name="linkedin" /></p>
				
				<p><label for="amino">Amino</label><br />
				<input type="text" name="amino" /></p>
				
				<p><label for="indeed">Indeed</label><br />
				<input type="text" name="indeed" /></p>
				
				<p><label for="github">GitHub</label><br />
				<input type="text" name="github" /></p>
				
				<p><input type="submit" name="links-submit-sm" value="Submit" /></p>
			
			</form>
		</div>
	</div>
	<div class="profile-mobile" style="display:none;">
		<div class="art-form box-color">
			<form action="a-add.php" method="post" class="text-color">
				
				<h2>Art</h2>
				
				<p><label for="artfight">ArtFight</label><br />
				<input type="text" name="artfight" /></p>
				
				<p><label for="deviantart">DeviantArt</label><br />
				<input type="text" name="deviantart" /></p>
				
				<p><input type="submit" name="links-submit-a" value="Submit" /></p>
				
			</form>
		</div>
	</div>
	<div class="profile-mobile" style="display:none;">
		<div class="contact-form box-color">
			<form action="c-add.php" method="post" class="text-color">
				
				<h2>Contact</h2>
				
				<p><label for="phone">Phone</label><br />
				<input type="text" name="phone" /></p>
				
				<p><label for="discord">Discord</label><br />
				<input type="text" name="discord" /></p>
				
				<p><label for="skype">Skype</label><br />
				<input type="text" name="skype" /></p>
				
				<p><label for="telegram">Telegram</label><br />
				<input type="text" name="telegram" /></p>
				
				<p><input type="submit" name="links-submit-c" value="Submit" /></p>
				
			</form>
		</div>
	</div>
	<div class="profile-mobile" style="display:none;">
		<div class="other-form box-color">
			<form action="o-add.php" method="post" class="text-color">
				
				<h2>Other</h2>
				
				<p><label for="epicgames">Epic Games</label><br />
				<input type="text" name="epicgames" /></p>
				
				<p><label for="steam">Steam</label><br />
				<input type="text" name="steam" /></p>
				
				<p><input type="submit" name="links-submit-o" value="Submit" /></p>
				
			</form>
		</div>
	</div>
	
	<div class="color-choose box-color" style="display:none;">
		<p><a href="customize.php?user=<?php if (isset($_SESSION["first_name"])) {echo $_SESSION["first_name"];} ?>" class="text-color">Customize Colors</a></p>
	</div>
	<div class="signout-mobile box-color" style="display:none;" class="box-color">
		<p><a href="signout.php" class="text-color">Sign Out</a></p>
	</div>
</div>
	
	

<div class="form-container" class="box-color">
	<div class="signup box-color">
		<form action="db-signup.php" method="post" class="text-color">
			<h2>Sign Up</h2>
			
			<p class="error-signup"></p>
			
			<p><label for="first_name">First Name</label><br />
			<input type="text" name="first_name" /></p>
			
			<p><label for="last_name">Last Name</label><br />
			<input type="text" name="last_name" /></p>
			
			<p><label for="email">Email</label><br />
			<input type="text" name="email" /></p>
			
			<p><label for="password">Password</label><br />
			<input type="password" name="password" /></p>
			
			<p><label for="password">Repeat Password</label><br />
			<input type="password" name="password_again" /></p>
			
			<p><input type="submit" name="signup-submit" value="Submit" /></p>
			
		</form>
		
		<p>Already have an account? <a href="javascript:void(0)" onclick="signInBtn()">Sign in!</a></p>
		
	</div>
	
	<div class="signin box-color">
		
		<form action="db-signin.php" method="post" class="text-color">
			<h2>Sign In</h2>
			
			<p class="error"></p>
			
			<p><label for="email">Email</label><br />
			<input type="text" name="email_signin" /></p>
			
			<p><label for="password">Password</label><br />
			<input type="password" name="password_signin" /></p>
			
			<p><input type="submit" name="signin-submit" value="Submit" /></p>
			
		</form>
		
		<p>Don't have an account? <a href="javascript:void(0)" onclick="signUpBtn()">Sign up!</a></p>
		
	</div>
</div>

<footer class="box-color">
	<p class="title text-color">Property of Steven Larner</p>
</footer>

<noscript>Your browser does not support JavaScript!</noscript>
<script>
function signInBtn() {
	$(".signup").hide();
	$(".profile").addClass("hide");
	$(".signin").show();
}

function signUpBtn() {
	$(".signin").hide();
	$(".signup").show();
	$(".profile").addClass("hide");
}
function loggedIn() {
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
		$(".signin,.signup").hide();
		$(".profile-mobile,.signout-mobile,.color-choose").show();
	}
	else {
		$(".signin,.signup").hide();
		$(".signout,.color-choose").show();
		$(".profile").removeClass("hide");
	}
}
</script>
<?php
	if (isset($_GET["success"])) {
		echo '<script>signInBtn();</script>';
	}
	if (isset($_GET["error"])) {
		echo '<script>$(".error").show();signInBtn();</script>';
		if ($_GET["error"] == "nouser") {
			echo '<script>$(".error").text("User does not exist");</script>';
		}
		else if ($_GET["error"] == "emptyfields") {
			echo '<script>$(".error").text("Please fill out all fields");</script>';
		}
		else if ($_GET["error"] == "usertaken") {
			echo '<script>$(".error-signup").text("Email is already in use with another account");signUpBtn();</script>';
		}
	}
	if (isset($_GET["signin"])) {
		if ($_GET["signin"] == "success") {
			echo '<script>loggedIn();$("header .title").text("Welcome, '.$_SESSION["first_name"].'!")</script>';
		}
	}
	if (isset($_SESSION["id"])) {
		echo '<script>loggedIn();$("header .title").text("Welcome, '.$_SESSION["first_name"].'!")</script>';
	}
?>

</body>
</html>