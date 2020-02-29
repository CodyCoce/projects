<?php
	include 'header.php';
?>

<div class="row">
	<div class="col">
		<div class="outline">
			<div class="pacman">
				<img src="https://www.todayifoundout.com/wp-content/uploads/2013/08/pacman.jpg" alt="pacman" />
				
				<p>PacMan</p>
				
				<?php
					$game = 'pacman';
					include 'scores.php';
				?>
			</div>
		</div>
		
		<div class="outline">
			<div class="galaxian">
				<img src="https://i.ytimg.com/vi/XhYVcwhSWjI/maxresdefault.jpg" alt="galaxian" />
				
				<p>Galaxian</p>
				
				<?php
					$game = 'galaxian';
					include 'scores.php';
				?>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="outline">
			<div class="digdug">
				<img src="https://www.retrogames.cz/grafika/konzole/NES-Dig_Dug.gif" alt="digdug" />
				
				<p>DigDug</p>
				
				<?php
					$game = 'digdug';
					include 'scores.php';
				?>
			</div>
		</div>
		
		<div class="outline">
			<div class="highscore">
				<p>Highscores</p>
				
				<?php
					$game = 'none';
					include 'scores.php';
				?>
				
				<p class="submit_record"><a href="record.php">See All</a></p>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="outline">
			<div class="rallyx">
				<img src="https://i.ytimg.com/vi/QviYF0tiLnk/hqdefault.jpg" alt="rallyx" />
				
				<p>RallyX</p>
				
				<?php
					$game = 'rallyx';
					include 'scores.php';
				?>
			</div>
		</div>
		
		<div class="outline">
			<div class="bosconian">
				<img src="https://i.ytimg.com/vi/wvTxNZn-wsw/hqdefault.jpg" alt="bosconian" />
				
				<p>Bosconian</p>
				
				<?php
					$game = 'bosconian';
					include 'scores.php';
				?>
			</div>
		</div>
	</div>
</div>

</body>
</html>