<?php 
		session_start();
		$hostname ="localhost";
		$username ="root";
		$password ="";
		$database = "wat2021db";

		$connection =mysqli_connect($hostname, $username, $password, $database );
		// or
		// exit("Unable to connect to database!");

		if(!$connection){
			die("connection failed: " . mysqli_connect_error());
		}

?>