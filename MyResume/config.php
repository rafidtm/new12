<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "homepage";

	$con = mysqli_connect($host,$user,$pass,$db);
	//echo "string";
	if (mysqli_connect_errno()) {
		echo "Failed to connect".mysqli_connect_error();
		echo "<br>";
		die();
	}

	//Helper Functions
	function pf($d){
		echo "<pre>";
		print_r($d);
		echo "</pre>";
	}

	function dd($d){
		echo "<pre>";
		var_dump($d);
		echo "</pre>";
		die();
	}

?>