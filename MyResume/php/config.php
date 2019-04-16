<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "homepage";

	$connect = mysqli_connect($host,$user,$pass,$db);
	//echo "string";
	if (mysqli_connect_errno()) {
		echo "Failed to connect".mysqli_connect_error();
		echo "<br>";
	}
	else{
		echo "Successfully Connected";
	}
?>