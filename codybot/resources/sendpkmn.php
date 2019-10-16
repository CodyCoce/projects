<?php

	include_once 'tablelogin.php';

	$Trainer = $_POST['trainer'];
	$Pokemon_Image = $_POST['pokemon_image'];
	$Pokemon_Name = $_POST['pokemon_name'];
	
	$sql = "INSERT INTO inventory (Trainer, Pokemon_Image, Pokemon_Name) VALUES ('$Trainer', '$Pokemon_Image', '$Pokemon_Name');";
	mysqli_query($conn, $sql);
	
	header('Location: ../adminmenu.php?trainer='.$_POST["trainer"]);
?>