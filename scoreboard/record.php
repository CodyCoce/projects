<?php
	include 'header.php';
?>

<div class="row">
	<div class="col">
		<?php
			if (isset($_SESSION['admin_password_family'])) {
				if ($_SESSION['admin_password_family'] == true) {
					if (!isset($_GET['game'])) {
						echo '<div class="outline">
							<div class="score_submit_form">
								<p>- Submit Score -</p>
								
								<form action="send_score.php" method="post">
									<p><label for="name">Name<br /><input type="text" name="name_f" /><input type="text" name="name_m" /><input type="text" name="name_l" /></label></p>
									<p><label for="score">Score<br /><input type="number" name="score" step="10" /></label></p>
									<p><label for="game">Game<br /><select name="game">
										<option value="pacman">Pac-Man</option>
										<option value="digdug">Dig-Dug</option>
										<option value="rallyx">Rally-X</option>
										<option value="galaxian">Galaxian</option>
										<option value="bosconian">Bosconian</option>
									</select></label></p>
									<p><input type="submit" name="submit" /></p>
								</form>
							</div>
						</div>';
					}
					else if (isset($_GET['game'])) {
						$game = $_GET['game'];
						echo '<p class="uppercase">- '.$game.' -</p>';
						include 'scores.php';
					}
				}
			}
			else if (!isset($_SESSION['admin_password_family']) && isset($_GET['game'])) {
				$game = $_GET['game'];
				echo '<p class="uppercase">- '.$game.' -</p>';
				include 'scores.php';
			}
			else {
				echo '
					<div class="outline">
						<div class="score_submit_form_password">
							<form action="login.php" method="post">
								<p><label for="password">Password<br /><input type="password" name="password" /></label></p>
								
								<p><input type="submit" name="submit" /></p>
							</form>
						</div>
					</div>
				';
			}
		?>
		
		
	</div>
</div>

</body>
</html>