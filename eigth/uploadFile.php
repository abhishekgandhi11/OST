<?php 
	//echo var_dump($_FILES);
	//echo var_dump($_REQUEST);
	
	if(isset($_FILES['images']))
	{
		for($i = 0;$i <count($_FILES['images']['name']);$i++)
		{
			echo $_FILES['images']['name'][$i] , 'files/'.$_FILES['images']['name'][$i]."<br/>";
			move_uploaded_file($_FILES['images']['tmp_name'][$i] , 'files/'.$_FILES['images']['name'][$i]);
			echo $_FILES['images']['tmp_name'][$i],"<hr/>";
		}
	
	}
	//echo count($_FILES['images']['name']);
	
?>