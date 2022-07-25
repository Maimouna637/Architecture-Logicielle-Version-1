<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mglsi_news";

$conn = mysqli_connect($servername, $username, $password,$dbname);

	if (!$conn) {
	    echo "error";
	}


?>
