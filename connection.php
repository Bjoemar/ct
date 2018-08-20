<?php 

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'chill_and_tats';


	$conn = mysqli_connect($host , $username, $password , $dbname);

	if(!$conn) {
		die("Connection Failed".mysqli_error($conn));
	}



 ?>