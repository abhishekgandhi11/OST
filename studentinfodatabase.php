<?php
	require_once('config.php');
	try{
			$conn;
		$conn = new PDO("mysql:host=$servername;dbname=student",
						$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo "Connected";
	}
	catch(PDOException $e){
		echo "Not Connected :".$e->getMessage();
	}
?>