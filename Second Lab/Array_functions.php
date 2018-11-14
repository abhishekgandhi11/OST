 <?php
	

	function printArr($Arr)
	{
		
		if(is_array($Arr))
		{
			foreach ($Arr as $key=>$val)
			{
				echo "<ul><li>";
				echo "[$key]:";
				printArr($val);
			}
			echo "</ul><br/>";
		}
		else
		{
			echo " ".$Arr;
			echo "</li>";
			echo "</ul>";
		}
	}
	function myfunction($val ,$key)
	{
		echo "$key:$val<br/>";;
	}
	
	$data = file_get_contents("jsonData.txt");
	$Arr=json_decode($data,true);
	//print_r($Arr);
	printArr($Arr);
	//var_dump($Arr);
	//$Arr=Array(ARRAY("RollNo"=>"16mca050","Name"=>"Suarj","Degree"=>Array("School"=>Array("SSC","HSC"),"College"=>Array("BCA","MCA"))),ARRAY("RollNo"=>"16mca049","Name"=>"Divya","Degree"=>Array("School"=>Array("SSC","HSC"),"College"=>Array("BCA","MCA"))));
	//array_walk_recursive($Arr,"myfunction");
	
	//echo count($Arr);
	
	//$Arr=array(100,200,300,400,500);
	//array_walk($Arr,"myfunction");
	
 ?>