<?php
	require("db-login.php");
	session_start();
	
	if (isset($_GET['p'])) {
		$party = $_GET['p'];
		echo '<script>var timer = setTimeout(function() {
			location.reload();
		}, 10000);
		function stopTimer() {
			clearTimeout(timer);
		};</script>';
	}
	if (isset($_SESSION['name'])) {
		$user = $_SESSION['name'];
	}
	if (isset($_SESSION['admin'])) {
		$admin = $_SESSION['admin'];
	}
	if (isset($_SESSION['pwd'])) {
		$pwd = $_SESSION['pwd'];
	}
	if (empty($_GET['p'])) {
		$party = null;
	} 
	if (empty($_SESSION['name'])) {
		$user = '';
	} 
	if (empty($_SESSION['admin'])) {
		$admin = null;
	}
	if (empty($_SESSION['pwd'])) {
		$pwd = null;
	}
	if (isset($_GET['full'])) {
		echo '<script>window.alert("Game has already started! Try again later.")</script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Assasin is a social ice breaker game commonly played at conventions or large gatherings which promote excercise and socialization.">
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
	<h1>Assassin</h1>
</div>

<div class="container menu">
	<p><a href="javascript:void(0)" class="btn create" onmousedown="createGame()">Create Game</a></p>
	<p><a href="javascript:void(0)" class="btn join" onmousedown="joinGame()">Join Game</a></p>
</div>

<div class="container menu">
	<p><a href="rules.php" class="btn">Rules</a></p>
	<p><a href="dev.php" class="btn">Dev Thoughts</a></p>
</div>

<!-- Create Game -->
<div class="container menu-create">
	<h1>Create Game</h1>
</div>

<div class="container menu-create">
	<form action="create-game.php" method="post">
		<p><input type="text" name="username_create" placeholder="Username" class="btn" /></p>
		<p><input list="questions" id="question" name="question_create" placeholder="What is your favorite color?" class="btn" />
			<datalist id="questions" placeholder="test" class="btn">
			  <option value="What is your favorite color?"></option>
			  <option value="Where did you grow up?"></option>
			  <option value="What is your favorite genre of music?"></option>
			  <option value="Apple or Android?"></option>
			  <option value="What is your favorite food?"></option>
			  <option value="What is your favorite video game?"></option>
			  <option value="What is your dream job?"></option>
			  <option value="Where do you want to live?"></option>
			  <option value="What was or is your major?"></option>
			  <option value="Where was your last vacation?"></option>
			  <option value="What kind of car do you drive?"></option>
			  <option value="What is your favorite song?"></option>
			  <option value="What is one of your hobbies?"></option>
			  <option value="What is your favorite show?"></option>
			  <option value="Custom"></option>
			</datalist>
		</p>
		<p><input type="text" name="answer_create" placeholder="Red" class="btn" /></p>
		<p><input type="submit" name="create_game" class="btn" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn back">Back</a></p>
	</form>
</div>

<!-- Join Game -->
<div class="container menu-join">
	<h1>Join Game</h1>
</div>

<div class="container menu-join">
	<form action="join-game.php" method="post">
		<p><input type="text" name="username_join" placeholder="Username" class="btn" /></p>
		<p><input type="number" name="party_join" placeholder="Party Code" class="btn" /></p>
		
		<p><input list="questions" id="question" name="question_join" placeholder="What is your favorite color?" class="btn" />
			<datalist id="questions" placeholder="test" class="btn">
			  <option value="What is your favorite color?"></option>
			  <option value="Where did you grow up?"></option>
			  <option value="What is your favorite genre of music?"></option>
			  <option value="Apple or Android?"></option>
			  <option value="What is your favorite food?"></option>
			  <option value="What is your favorite video game?"></option>
			  <option value="What is your dream job?"></option>
			  <option value="Where do you want to live?"></option>
			  <option value="What was or is your major?"></option>
			  <option value="Where was your last vacation?"></option>
			  <option value="What kind of car do you drive?"></option>
			  <option value="What is your favorite song?"></option>
			  <option value="What is one of your hobbies?"></option>
			  <option value="What is your favorite show?"></option>
			  <option value="Custom"></option>
			</datalist>
		</p>
		<p><input type="text" name="answer_join" placeholder="Red" class="btn" /></p>
		
		<p><input type="submit" name="join_game" class="btn" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="btn back">Back</a></p>
	</form>
</div>

<!-- Party -->
<div class="container hide play">
	<div class="player-list" id="player-list">
		<h1>Party <span class="party-code"><?php echo $_GET['p']; ?></span></h1>
		<p><span class="players">Players</span> <a href="javascript:void(0)" class="btn refresh" onclick="location.reload();">Refresh List</a></p>
		<?php include("players.php"); ?>
	</div>
</div>

<div class="container hide play">
	<p><a href="leave-game.php" class="btn" class="leave_game">Leave Game</a></p>
	<?php echo '<p><a href="start-game.php?p='.$party.'" class="btn">Start Game</a></p>'; ?>
</div>


<!-- Game Screen -->
<div class="container hide start">
	<?php
		$sql = "SELECT target FROM users WHERE party='$party' AND name='$user'"; 
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$_SESSION['target'] = $row['target'];
				$target = $_SESSION['target'];
			}
		}
		
		if (isset($_GET['start'])) {
			echo '<p class="short"><strong>'.$user.'</strong>, your target is <strong>'.$target.'</strong>!</p>';
		}
		
		
		$sql = "SELECT * FROM users WHERE party='$party' AND name='$target'"; 
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$target_question = $row['question'];
				$you_ar = ["your", "you", "yours", "my"];
				$they_ar   = ["their", "they", "theirs", "their"];

				$final_question = str_replace($you_ar, $they_ar, $target_question);
			}
		}
	?>
</div>

<!--<div class="container hide start">
	<?php //echo "<p class='short pwd'>Your answer is <strong>".$a."</strong></p>"; ?>
</div>-->

<div class="container hide start">
	<div class="status">
		<div class="elim_button eliminate">
			<?php echo '<a href="index.php?p='.$party.'&start&defeat"><img src="resources/crosshair-dark.png" alt="crosshair" /></a>'; ?>
		</div>
	</div>
</div>

<div class="container kill_confirm_menu hide">
	<?php echo '<form action="eliminate.php?p='.$party.'" method="POST">'; ?>
		<?php if (isset($_GET['incorrect'])) {
				echo '<label for="pwd">Wrong passcode!<br /><br /><a href="index.php?p='.$party.'&start" class="btn">Okay</a>'; 
			}
			else {
				echo '<label for="pwd">'.$final_question.'<br><input type="text" name="pwd" /></label><br><input type="submit" name="submit" value="Confirm" class="btn" />&nbsp;&nbsp;<a href="index.php?p='.$party.'&start" class="btn">Cancel</a>'; 
			}
		?>
	</form>
</div>

<div class="container hide start">
	<div class="leave_options">
		<?php  echo '<p><a href="index.php?p='.$party.'&start&pause=leave" class="btn">Leave Game</a></p><br />'; ?>
		<?php if ($admin == 1) { echo '<p><a href="index.php?p='.$party.'&start&pause=end" class="btn">End Game</a></p>'; } ?>
	</div>
</div>

<div class="container hide start">
	<div class="scoreboard">
		<p>Players</p>
		
		<?php 
			$sql = "SELECT * FROM users WHERE party='$party'"; 
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				echo '<table>';
				while($row = mysqli_fetch_assoc($result)) {
					if ($row['is_dead'] == 0) {
						if ($row['name'] == $_SESSION['target']) {
							echo '<tr><td><span class="targeted_player">'.$row['name'].'</span></td></tr>';
						}
						else {
							echo '<tr><td>'.$row['name'].'</td></tr>';
						}
					}
					else {
						if ($row['name'] == $_SESSION['target']) {
							echo '<tr><td class="dead"><span class="targeted_player">'.$row['name'].'</span></td></tr>';
						}
						else {
							echo '<tr><td class="dead">'.$row['name'].'</td></tr>';
						}
					}
				}
			}
				echo '</table>';
		?>
	</div>
</div>

<!-- Error Screens -->
<div class="container error_menu hide">
	<div class="error_name hide">
		<p>The name you entered was invalid. Only letters are available.</p>
		<p><a href="index.php" class="btn">Okay</a></p>
	</div>
	
	<div class="error_sql hide">
		<p>An error in the servers has occured. Try again and hopefully it works.</p>
		<p><a href="index.php" class="btn">Okay</a></p>
	</div>
</div>

<div class="leave_confirm confirm_menu hide">
	<p>Are you sure you want to leave the game?</p>
	
	<?php echo '<p><a href="leave-game.php" class="btn">Continue</a></p><p><a href="index.php?p='.$party.'&start" class="btn">Cancel</a></p>'; ?>
</div>

<div class="end_confirm confirm_menu hide">
	<p>Are you sure you want to end the game?</p>
	
	<?php echo '<p><a href="end-game.php?p='.$party.'" class="btn">Continue</a></p><p><a href="index.php?p='.$party.'&start" class="btn">Cancel</a></p>'; ?>
</div>

<div class="game_end hide">
	<p>The owner has ended the game!</p>
	<p><a href="index.php" class="btn">Okay</a></p>
</div>



<!-- Conditions -->
<?php
	$sql = "SELECT * FROM users WHERE party='$party' AND name='$user';";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			if ($row['is_dead'] == 0 && $row['is_active'] == 1) {
				echo '<script>$(".elim_button").removeClass("hide");</script>';
			}
			else if ($row['is_dead'] == 0 && $row['is_active'] == 0) {
				echo '<script>$(".elim_button").addClass("hide"); $(".short").html("Waiting for game to start."); $(".pwd").hide();</script>';
			}
			else if ($row['is_dead'] == 1 && $row['is_active'] == 1) {
				echo '<script>$(".elim_button").addClass("hide"); $(".short").html("You have been eliminated!"); $(".pwd").hide();</script>';
				if (!isset($_SESSION['vibration'])) {
					$_SESSION['vibration'] = 1;
					echo '<script>window.navigator.vibrate(200);</script>';
				}
				else if ($_SESSION['vibration'] >= 1) {
					
				}
			}
			if ($row['target'] == $user) {
				echo '<script>$(".elim_button").addClass("hide"); $(".short").html("You win!"); $(".pwd").hide();stopTimer();</script>';
			}
			// <a href=&quot;javascript:void(0)&quot;>Share on Facebook?</a>
		}
	}
	
	if (isset($_GET['defeat'])) {
		echo '<script>$(".kill_confirm_menu").removeClass("hide");</script>';
	}
	
	if (isset($_GET['gameend'])) {
		echo '<script>$(".game_end").removeClass("hide");</script>';
	}
?>

<script>
function noParty() {
	$(".play").addClass("hide");
}
function party() {
	$(".menu,.menu-create,.main-join").hide();
	$(".play").removeClass("hide");
}

function gameStart() {
	$(".menu,.menu-create,.main-join").hide();
	$(".play").addClass("hide");
	$(".start").removeClass("hide");
}

function error_menu() {
	$(".error_menu").show();
}
function error_name() {
	$(".error_name").show();
}
function error_sql() {
	$(".error_sql").show();
}
function error_code() {
	$(".code").html("Wrong passcode!");
}

function leave_game() {
	$(".leave_confirm").removeClass("hide");
}
function end_game() {
	$(".end_confirm").removeClass("hide");
}
function createGame() {
	$(".menu").addClass("hide");
	$(".menu-create").attr("style", "display:flex;");
};
function joinGame() {
	$(".menu").addClass("hide");
	$(".menu-join").attr("style", "display:flex;");
};

$(".back").mousedown(function() {
	$(".menu").show();
	$(".menu-create,.menu-join").hide();
});

$(".eliminate").mousedown(function() {
	$(".selected").removeClass("selected");
	$(this).addClass("selected");
});

<?php
	if (empty($_GET['p'])) {
		echo 'noParty();';
	}
	else if (isset($_GET['p'])) {
		echo 'party();';
	}

	if (isset($_GET['start'])) {
		echo 'gameStart();';
	}

	if (isset($_GET['error'])) {
		if ($_GET['error'] == 'name') {
			echo 'error_name();error_menu();';
		}
		else if ($_GET['error'] == 'sql') {
			echo 'error_sql();error_menu();';
		}
	}
	
	if (isset($_GET['pause'])) {
		if ($_GET['pause'] == 'leave') {
			echo 'leave_game();';
		}
		if ($_GET['pause'] == 'end') {
			echo 'end_game();';
		}
	}
?>
</script>
</body>
</html>