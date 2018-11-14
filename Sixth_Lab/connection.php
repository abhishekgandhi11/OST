 <?php
	try{
		$pdoConnection = new PDO('mysql:host=localhost;dbname=dbuniversity','root','');
		if($pdoConnection !=null)
		{
			//echo "Connected";
		}
	}catch(PDOException  $pdo)
	{
		echo "Error:".$pdo->getMessage();
		die();
	}
	
 ?>