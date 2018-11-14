<?php
	include_once('config/DBConnection.php');
	function __autoload($class)
	{
		require_once($class.'.php');
	}

	
	
?>
<html>
	<head>
		<title>Student Informtion</title>
	</head>
	<body>
		
		<a href="myForm.php">GO BACK</a>
	</body>
</html>	
	
