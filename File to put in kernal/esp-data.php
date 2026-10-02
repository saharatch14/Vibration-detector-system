<?php
	//Include DB
	include "db_connect.php";	

	//Get incoming data from get header:
	$status = $_GET["Status"];

	$date = date("D M d, Y G:i");
	
	$query = "insert into Information(Status,time) VALUES('$status','$date')";
	$result = $db->query($query);


	//Close the connection
	$db->close();

?>
