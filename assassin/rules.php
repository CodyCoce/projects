<?php
	require("db-login.php");
	session_start();
	
	echo '<!DOCTYPE html><html lang="en" class="'.$_SESSION['mode'].'mode">';
?>
<head>
<meta charset="UTF-8">
<meta name="description" content="Assasin DESC.">
<meta name="keywords" content="assassin,gotcha,web game,web app,steven larner,steven,larner">
<meta name="author" content="Steven Larner">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="scripts.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<title>Assassin</title>
</head>
<body>

<div class="container rules">
	<h1>Rules</h1>
</div>

<div class="container rules">
	<ul style="list-style-type:none;display:block;">
		<li><p><a href="javascript:void(0)" class="basic_rules btn">Basic Rules</a></p></li>
		<li><p><a href="javascript:void(0)" class="pre_game_rules btn">Pre Game</a></p></li>
		<li><p><a href="javascript:void(0)" class="win_rules btn">Win Conditions</a></p></li>
		<li><p><a href="javascript:void(0)" class="controls btn">Controls</a></p></li>
		<li><p><a href="javascript:void(0)" class="difference_rules btn">Differences</a></p></li>
	</ul>
	
	<div class="basic-rules rules-content active">
		<p>It's every person for themselves! Everyone playing the game has a name they're after, and someone after their own name! Each player must search for their target without being discovered by their hunter. To eliminate your target, you must find them, press the crosshair button at the top of the page, enter the code your target has on their device, and press confirm. If you enter the wrong code, nothing happens. If you enter the correct code, you have successfully eliminated your target from the game! Their target becomes your new target, and the game continues!</p>
		
		<p>Note: User information is not stored or kept in any way. All information entered here is never shared anywhere else.</p>
	</div>
	
	<div class="pre-game rules-content">
		<p>Before a game can start, a game has to be made first. If you're going to host a game, click on Create Game and enter a username. After clicking Submit, a party will be created. Everyone who wants to play must enter the party code you have just created.</p>
			
		<p>If you're joining a game, click Join Game, and enter a username and the party code of the party you want to join. When you're ready, click Submit. The text at the top of the screen will tell you what's going on. If players are still joining and the game has not begun yet, the text will say "waiting for game to start." Once the game has started, the text will tell you who your target is, and your code.</p>
	</div>
	
	<div class="who-wins rules-content">
		<p>The last person in the game who has not been eliminated wins.</p>
	</div>
	
	<div class="controls rules-content">
		<p>Create Game - Creates a party that is used to connect players. You are the host.</p>
		<p>Join Game - Join an existing party with other players. You are not the host.</p>
		<p>Leave Game - Leave an existing party to go back to the main menu screen.</p>
		<p>Refresh List - In the event that the player list stops automatically updating, you can manually refresh the list.</p>
		<p>Start Game - Only the host can see this button. The game begins and all players receive their targets.</p>
		<p>Crosshair - Once the game has begun, all non-eliminated players will see a crosshair-like button at the top of their screens. Clicking the button will make the game ask you for your target's passcode. If you have the passcode, enter it into the white box and press Submit. If you do not have the passcode, press Cancel to resume.</p>
		<p>End Game - Only the host can see this button. If you want to remove the whole party and not just yourself, press this button to return everyone back to the main menu screen.</p>
		<p>Enable Dark Mode/Enable Light Mode - The site was originally made with a green and white design, but that doesn't make for the best user readability. Enabling "dark mode" increases the contrast between text and background, and changes the green to a soft blue.</p>
		<p>Rules - Shows a compacted list of all the general rules.</p>
		<p>Dev Thoughts - A page to show all the updates, planned updates, and known bugs. You can also see the current live version of the game, as well as a link to my Patreon if you want to support me.</p>
		<p>Back to Game - Takes your back to the main menu screen.</p>
		<p>More Rules - Takes you back to the rules list.</p>
	</div>
	
	<div class="differences rules-content">
		<p>In the real life version, players use paper slips to identify their target. There is generally a Game Master or two to make sure everything stays on the right track.</p>
		
		<p>In the web version, players look at their own screen to identify their target. There is no need for a Game Master as the system already takes care of everything, so all the Game Masters can play like everyone else.</p>
	</div>
</div>

<div class="container rules more_rules">
	<p><a href="javascript:void(0)" class="btn">More Rules</a></p>
</div>

<div class="container rules">
	<p><a href="index.php" class="btn">Back to Game</a></p>
	<p><a href="dev.php" class="btn">Dev Thoughts</a></p>
</div>


<script>
$(".more_rules").mousedown(function() {
	$(".rules-content, .more_rules").hide();
	$(".rules ul").show();
});

$(".basic_rules").mousedown(function() {
	$(".rules-content, .rules ul").hide();
	$(".basic-rules, .more_rules").show();
});

$(".pre_game_rules").mousedown(function() {
	$(".rules-content, .rules ul").hide();
	$(".pre-game, .more_rules").show();
});

$(".win_rules").mousedown(function() {
	$(".rules-content, .rules ul").hide();
	$(".who-wins, .more_rules").show();
});

$(".difference_rules").mousedown(function() {
	$(".rules-content, .rules ul").hide();
	$(".differences, .more_rules").show();
});

$(".controls").mousedown(function() {
	$(".rules-content, .rules ul").hide();
	$(".controls, .more_rules").show();
});
</script>
</body>
</html>