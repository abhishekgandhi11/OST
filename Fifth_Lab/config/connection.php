<?php
	try{
		$pdoConn = new PDO('mysql:host=localhost;dbname=dbuniversity','root','');
	}catch(PDOException $ex)
	{
		echo $ex->getMessage();
		die();
	}
	
	
	//Insert data
	$stmt=$pdoConn->prepare("Insert into tblstudent (Name,Program,Sem) values (:NAME ,:PROGRAM ,:SEM)");
	$stmt->bindParam("NAME",$name);
	$stmt->bindParam("PROGRAM",$program);
	$stmt->bindParam("SEM",$sem);
	
	$name ='suraj';
	$program ='BCA';
	$sem='4';
	$stmt->execute();

	
	// Delete the data
	$stmt=$pdoConn->prepare("delete from tblstudent where Name=:NAME");
	$stmt->bindParam("NAME",$name);
	$name = 'Mayur';
	$stmt->execute();
	
	//Update data
	$stmt=$pdoConn->prepare('update tblstudent set Program=:PROGRAM where Name=:NAME');
	$stmt->bindParam("NAME",$name);
	$stmt->bindParam("PROGRAM",$program);
	$name ='Ishaan Soni';
	$program ='BCA';
	$stmt->execute();


	//display
	$stmt = $pdoConn->query("select * from tblstudent");
	$row=$stmt->fetchAll();
	var_dump($row);
	
	
	/*
	$myConn = new mysqli('localhost','root','','dbuniversity');
	//var_dump($conn);
	if($myConn==null)
	{
		echo "failed";
	}
	
	$qur = $myConn->query('select * from tblstudent');
	while($row = $qur->fetch_assoc())
	{
		//echo $row['Name'];
		var_dump($row);
	}
	*/
	
?>