<?php
require "config.php";
$isDeleted = false;

// Make sure this file gets a track id. Otherwise, file doesn't know which track to delete
if ( !isset($_GET['obgyn_name']) || empty($_GET['obgyn_name']) ) {
	$error = "Invalid OBGYN name.";
}
else {
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}



	// prepared statement way
	$statement = $mysqli->prepare("DELETE FROM obgyns WHERE name = ?");
	$statement->bind_param("s", $_GET["obgyn_name"]);

	$executed = $statement->execute();
	if(!$executed) {
		echo $mysqli->error;
		exit();
	}

	// Check that only one row was affected
	if($statement->affected_rows == 1) {
		$isDeleted = true;
	}

	$statement->close();

	$mysqli->close();
}

?>