 <?php 
	session_start();
	include_once('connection.php');
	
	if(isset($_COOKIE['userName']) && isset($_COOKIE['userPassword'])){	
		$_SESSION['name'] = $_COOKIE['userName'];	
		header('location:home.php');
	}
	
	if(isset($_POST['btnSave']))
	{
		try{
			
			
			$stmt= $pdoConnection->prepare("select * from tbluser where user=:USER and password=:PASSWORD");
			
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			
			$stmt->bindParam(':USER',$NAME);
			$stmt->bindParam(':PASSWORD',$PASSWORD);
			
			$NAME=$_REQUEST['user'];
			$PASSWORD =$_REQUEST['password'];
		
			$row = $stmt->execute();	
				
			/*
				$NAME=$_REQUEST['user'];
				$PASSWORD =$_REQUEST['password'];
				$stmt = $pdoConnection->query("select * from tbluser where user='{$NAME}' and password='{$PASSWORD}'");
				
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				
			*/
			
			if($stmt->rowCount() == 1)
			{
				if(isset($_POST['rem'])){
					setCookie("userName",$NAME,time()+3600);
					setCookie("userPassword",$PASSWORD,time()+3600);
				}else{
					setCookie("userName");
					setCookie("userPassword");
				}
				$_SESSION['name'] = $NAME;
				//var_dump($_SESSION);
				header('location:home.php');		
			}

		}catch(PDOException $err)
		{
			echo "Error".$err->getMessage();
		}
	}
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
 <html xmlns="http://www.w3.org/1999/xhtml">
 
 <head>
   <title>Practical 6</title>
   <style>
	
   fieldset{
	width:25%;
   }
   
   table{
   text-size:14px;
   }
   
   .txt{
   width:200px;
   height:25px;
   border-radius:10px;
   margin-left:10px;
   }
   
   legend{color:red;
   font-size:20px;}
   span{
   margin-left:10px;
   color:red;}
	</style>

 </head>
 
<body align="center">
	<form method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>User Login</legend>
			<table>	
				<tr>
					<td>Email:</td>
					<td><input type="text" placeholder="Enter userName" name="user" class="txt" id="name"/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" placeholder="Enter password "  name="password" class="txt"/></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="rem" /></td>
					<td>Remember</td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="Submit" name="btnSave" class="txt" onclick="return checkValid();"></td>
				</tr>
			</table>
		</fieldset>
	 </form>
 </body>
 </html>

