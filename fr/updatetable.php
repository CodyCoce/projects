<?php

	include_once 'tablelogin.php';
	
	
	$uidCard = $_POST['uid'];
	$imageCard = $_POST['image'];
	$ilCard = $_POST['imagelink'];
	$nameCard = $_POST['name'];
	$numCard = $_POST['num'];
	$genderCard = $_POST['gender'];
	$levelCard = $_POST['level'];
	$breedCard = $_POST['breed'];
	$pcCard = $_POST['pc'];
	$pgCard = $_POST['pg'];
	$scCard = $_POST['sc'];
	$sgCard = $_POST['sg'];
	$tcCard = $_POST['tc'];
	$tgCard = $_POST['tg'];
	$ecCard = $_POST['ec'];
	$egCard = $_POST['eg'];
	$tpCard = $_POST['tp'];
	$gpCard = $_POST['gp'];
	$keycodeCard = $_POST['keycode'];
	
	if (empty($uidCard) && empty($imageCard) && empty($numCard)) {
		header("Location: index.php?error=emptyfields");
		exit();
	}
	else if (empty($uidCard) && empty($imageCard)) {
		header("Location: index.php?error=uidimage");
		exit();
	}
	else if (empty($uidCard) && empty($numCard)) {
		header("Location: index.php?error=uidnum");
		exit();
	}
	else if (empty($imageCard) && empty($numCard)) {
		header("Location: index.php?error=imagenum");
		exit();
	}
	else if (empty($uidCard)) {
		header("Location: index.php?error=uid");
		exit();
	}
	else if (empty($imageCard)) {
		header("Location: index.php?error=image");
		exit();
	}
	else if (empty($numCard)) {
		header("Location: index.php?error=num");
		exit();
	}
	
	$sql = "INSERT INTO cards (uidCard, imageCard, ilCard, nameCard, numCard, genderCard, levelCard, breedCard, pcCard, pgCard, scCard, sgCard, tcCard, tgCard, ecCard, egCard, tpCard, gpCard, keycodeCard) VALUES ('$uidCard', '$imageCard', '$ilCard', '$nameCard', '$numCard', '$genderCard', '$levelCard', '$breedCard', '$pcCard', '$pgCard', '$scCard', '$sgCard', '$tcCard', '$tgCard', '$ecCard', '$egCard', '$tpCard', '$gpCard', '$keycodeCard');";
	mysqli_query($conn, $sql);
	
	header('Location: index.php?success');
	