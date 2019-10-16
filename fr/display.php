<?php
	include_once 'tablelogin.php';
	
	$pc = $row["pcCard"];
	$pg = $row["pgCard"];
	$sc = $row["scCard"];
	$sg = $row["sgCard"];
	$tc = $row["tcCard"];
	$tg = $row["tgCard"];
	$ec = $row["ecCard"];
	$eg = $row["egCard"];
	
	$sql = "SELECT * FROM cards;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '

	<div id="card-container">
		<div id="card">
			<div id="card-image"><!--<a href="?remove=true&id='.$_GET["idCard"].'&'; if (empty($row["keycodeCard"])) { echo 'pass=false'; } else if (isset($row["keycodeCard"])) { echo 'pass=true'; } echo '" class="remove-card">&times;</a>--><a href="'.$row["ilCard"].'" target="_blank"><img src="'.$row["imageCard"].'" alt="'.$row["imageCard"].'" class="dragon-image'.$row["idCard"].'"></a></div>
		<div id="card-text">
			<table>
				<tbody>
					<tr class="uid">
						<td class="td-l">Owner: </td>
						<td class="td-r" colspan="2"><span class="dragon-owner'.$row["idCard"].'">'.$row["uidCard"].'</span></td>
					</tr>
					';
					if (empty($row["nameCard"])) {}
					else if (isset($row["nameCard"])) {
						echo '
					<tr class="name">
						<td class="td-l">Name: </td>
						<td class="td-r" colspan="2"><span class="dragon-name'.$row["idCard"].'">'.$row["nameCard"].'</span></td>
					</tr>
						';
					}
					echo '
					<tr class="id">
						<td class="td-l">ID: </td>
						<td class="td-r" colspan="2">&num;<span class="dragon-id'.$row["idCard"].'">'.$row["numCard"].'</span></td>
					</tr>
						';
					if (empty($row["genderCard"])) {}
					else if (isset($row["genderCard"])) {
						echo '
					<tr class="gender">
						<td class="td-l">Gender: </td>
						<td class="td-m"></td><td class="td-r"><span class="dragon-gender'.$row["idCard"].'">'.$row["genderCard"].'</span></td>
					</tr>
						';
					}
					if (empty($row["levelCard"])) {}
					else if (isset($row["levelCard"])) {
						echo '
					<tr class="level">
						<td class="td-l">Level: </td>
						<td class="td-r" colspan="2"><span class="dragon-level'.$row["idCard"].'">'.$row["levelCard"].'</span></td>
					</tr>
						';
					}
					if (empty($row["breedCard"])) {}
					else if (isset($row["breedCard"])) {
						echo '
					<tr class="breed">
						<td class="td-l">Breed: </td>
						<td class="td-r" colspan="2"><span class="dragon-breed'.$row["idCard"].'">'.$row["breedCard"].'</span></td>
					</tr>
						';
					}
					if (empty($row["pcCard"]) || empty($row["pgCard"])) {}
					else if (isset($row["pcCard"]) || isset($row["pgCard"])) {
						echo '
					<tr class="gc-primary">
						<td class="td-l">Primary Color/Gene: </td>
						<td class="td-r" colspan="2"><span class="dragon-gc-primary'.$row["idCard"].'">'.$row["pcCard"].'/'.$row["pgCard"].'</span></td>
					</tr>
						';
					}
					if (empty($row["scCard"]) || empty($row["sgCard"])) {}
					else if (isset($row["scCard"]) || isset($row["sgCard"])) {
						echo '
					<tr class="gc-secondary"><td class="td-l">Secondary Color/Gene: </td>
						<td class="td-r" colspan="2"><span class="dragon-gc-secondary'.$row["idCard"].'">'.$row["scCard"].'/'.$row["sgCard"].'</span></td>
					</tr>
						';
					}
					if (empty($row["tcCard"]) || empty($row["tgCard"])) {}
					else if (isset($row["tcCard"]) || isset($row["tgCard"])) {
						echo '
					<tr class="gc-tertiary"><td class="td-l">Tertiary Color/Gene: </td>
						<td class="td-r" colspan="2"><span class="dragon-gc-tertiary'.$row["idCard"].'">'.$row["tcCard"].'/'.$row["tgCard"].'</span></td>
					</tr>
						';
					}
					if (empty($row["ecCard"]) || empty($row["egCard"])) {}
					else if (isset($row["ecCard"]) || empty($row["egCard"])) {
						echo '
					<tr class="gc-eye"><td class="td-l">Eye Type/Rarity: </td>
						<td class="td-r" colspan="2"><span class="dragon-gc-eye'.$row["idCard"].'">'.$row["ecCard"].'/'.$row["egCard"].'</span></td>
					</tr>
						';
					}
					if (empty($row["tpCard"])) {}
					else if (isset($row["tpCard"])) {
						echo '
					<tr class="price"><td class="td-l">Price: </td>
						<td class="td-m"><img src="media/icon_treasure.png" alt="Treasure" title="Treasure"></td>
						<td class="td-r"><span class="dragon-price-treasure'.$row["idCard"].'">'.$row["tpCard"].'</span></td>
					</tr>
						';
					}
					if (empty($row["gpCard"])) {}
					else if (isset($row["gpCard"])) {
						echo '
					<tr class="price-2">
						<td class="td-l"></td>
						<td class="td-m"><img src="media/icon_gems.png" alt="Gems" title="Gems"></td>
						<td class="td-r"><span class="dragon-price-gems'.$row["idCard"].'">'.$row["gpCard"].'</span></td>
					</tr>
						';
					}
					echo '
				</tbody>
			</table>
		</div>
		
		</div>
	</div>

';
		}
	}
?>