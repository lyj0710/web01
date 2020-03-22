<?php 
	$dbms="mysql";
	$servername="localhost";
	$username="root";
	$password="root";
	$dbname="company";

	$dsn="$dbms:host=$servername;dbname=$dbname";

	try{
		$dbh = new PDO($dsn,$username,$password);
	}catch(PDOException $e){
		die("Error!".$e->getMessage()."<br/>");
	}
 ?>