<?php
	include("Studennt.php");
?>
<html>
	<head>
		<title>Student Infromrtion</title>
	</head>
<Body>
	<table border="1" align="center">
	<tr>
		<td colspan="2">
			Student Data
		</td>
	</tr>
	<?php	
		$studObj=new Student();		
		if($_GET['Name'])
		{
			$studObj->Name=$_GET['Name'];
			$studObj->Gender=$_GET['Gender'];
			$studObj->Bday=$_GET['Bday'];
			$studObj->Email=$_GET['Email'];
			$studObj->Mobile=$_GET['Mobile'];
			$studObj->Address=$_GET['Address'];
		}
	
		$array = $studObj->getObjectToArray();
		
		foreach($array as $key => $val)
		{
	?>
	<tr>
		<td><?php echo $key ;?>	</td>
		<td><?php echo $val ;?>	</td>
	</tr><?php  } ?>
	</table>
</Body>
</html>