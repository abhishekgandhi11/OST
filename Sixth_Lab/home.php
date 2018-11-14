<?php
	session_start();

	if(isset($_SESSION['name']))
	{
		echo "Welcome ".$_SESSION['name']." <a href='logout.php'> Logout</a>";
	}
	else
	{
		header('location:login.php');
	}
?>