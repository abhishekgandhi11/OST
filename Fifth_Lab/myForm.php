<?php
	include_once('config/DBConnection.php');
	function __autoload($class)
	{
		require_once($class.'.php');
	}
	
	$studObj=new Student();		
	if(isset($_REQUEST['btnSave']))
	{
		$studObj->Name=$_REQUEST['name'];
		$studObj->Program=$_REQUEST['program'];
		$studObj->Sem=$_REQUEST['sem'];
		try{
			if(isset($_GET['EID'])){
				$stmt=$pdoConnection->prepare("update tblstudent set Name=:Name , Program=:Program , Sem= :Sem where Id = :Id");
				$stmt->bindParam(':Id',$ID);
				$ID=$_GET['EID'];
			}else{
				$stmt=$pdoConnection->prepare("insert into tblstudent (Name,Program,Sem) values (:Name , :Program ,:Sem)");
			}
			
			$stmt->bindParam(':Name',$NAME);
			$stmt->bindParam(':Program',$PROGRAM);
			$stmt->bindParam(':Sem',$SEM);
			
			$NAME=$studObj->Name;
			$PROGRAM =$studObj->Program;
			$SEM =$studObj->Sem;
		
			$stmt->execute();
			header("location:myForm.php");
			
		}catch(PDOException $err)
		{
			echo "Error".$err->getMessage();
		}
	}
	
	if(isset($_GET['DID']))
	{
		try{
			$stmt=$pdoConnection->prepare("delete from tblstudent where Id =:Id");
			$stmt->bindParam(':Id',$ID);
			$ID=$_GET['DID'];
			$stmt->execute();
		}catch(PDOException $err)
		{
			echo "Error".$err->getMessage();
		}
	}
	
	if(isset($_GET['EID']))
	{
		$ID=$_GET['EID'];
		$sql= "select * from tblstudent where Id='{$ID}'";
		//echo $sql;
		$stmt = $pdoConnection->query($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$row=$stmt->fetch();
		//var_dump($row);
	}
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
 <html xmlns="http://www.w3.org/1999/xhtml">
 
 <head>
   <title>Practical 7</title>
   <style>
	
   fieldset{
	width:25%;
   }
     
   .txt{
   width:200px;
   height:25px;
   border-radius:10px;
   margin-left:10px;
   }
   
	</style>

 </head>
 
<body align="center">
	<form method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Student Information</legend>
			<table>	
				<tr>
					<td>Name :</td>
					<td><input type="text" placeholder="Enter Name" name="name" class="txt" id="name" 
						value="<?php if(isset($row)) echo $row['Name']; ?>"/></td>
				</tr>
				<tr>
					<td>Program :</td>
					<td><input type="text" placeholder="Enter Program "  name="program" class="txt"
						value="<?php if(isset($row)) echo $row['Program']; ?>"/></td>
				</tr>
				<tr>
					<td>Sem :</td>
					<td><input type="text" placeholder="Enter Semeter" name="sem" class="txt"
						value="<?php if(isset($row)) echo $row['Sem']; ?>"/></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="Submit" name="btnSave" class="txt" onclick="return checkValid();"></td>
				</tr>
			</table>
		</fieldset>
		<br/>
		<table border="1">
			<tr align="center">
				<td colspan="6">Student Record</td>
			</tr>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Program</td>
				<td>Semeter</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
			<?php 
				$stmt = $pdoConnection->query("select * from tblstudent");
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				//var_dump($stmt->fetchAll());
				foreach($stmt as $row)
				{
			?>
				<tr>
					<td><?php echo $row['Id']; ?></td>
					<td><?php echo $row['Name']; ?></td>
					<td><?php echo $row['Program']; ?></td>
					<td><?php echo $row['Sem']; ?></td>
					<td><a href="myForm.php?EID=<?php echo $row['Id']; ?>">Edit<a></td>
					<td><a href="?DID=<?php echo $row['Id']; ?>">Delete<a></td>
				</tr>
			<?php }?>
		</table>
	 </form>
 </body>
 </html>

