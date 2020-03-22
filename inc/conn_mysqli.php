<?php 
	$username="root";
	$password="root";
	$dbname="company";

	$mysqli = new mysqli("localhost",$username,$password,$dbname);
	if(!$mysqli){
		die("Could not connect:".mysqli_connect_error());
	}

	$mysqli->set_charset('UTF-8');
 ?>