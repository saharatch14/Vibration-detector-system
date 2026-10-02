<?php  

    // Database name (auto create)
	$database_name = "vibration.db";

	// Database Connection
	$db = new SQLite3($database_name);
	
	// Create Table "Information" into Database if not exists 
	$query = "CREATE TABLE IF NOT EXISTS Information (
		Status STRING,
		time string)";
	$db->exec($query);
?>
