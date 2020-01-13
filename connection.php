<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="IHC_Project";
	$conn=mysqli_connect($servername, $username, $password,$db);

	if (mysqli_connect_errno()) {
		echo "Connect failed: ". mysqli_connect_error();
		exit();
	}
?>
