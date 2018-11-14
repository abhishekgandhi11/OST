 <?php
 
	/*
		$conn = new mysqli('localhost', 'root', '', 'dbuniversity');
		$res = $conn->query("SELECT 'choices to please everybody.' AS _msg FROM DUAL");
		$row = $res->fetch_assoc();
		echo $row['_msg'];
	*/
	
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
 