<?php 

	require("../../config.php");
	
	// see fail peab olema siis seotud kõigiga kus
	// tahame sessiooni kasutada
	// saab kasutada nüüd $_SESSION muutujat
	session_start();
	
	$database = "if16_kirikotk_4";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	// functions.php
	
	require("User.class.php");
	$User = new User($mysqli);
	
	require("Event.class.php");
	$Event = new Event($mysqli);
	
	require("Interest.class.php");
	$Interest = new Interest($mysqli);
	
	require("Helper.class.php");
	$Helper = new Helper($mysqli);
	

?>