 <?php 
 	require_once("Student.php");
	try
	{
		$arr = array("uri"=>"http://localhost");
		$service1 = new SoapServer(null,$arr);	
		$service1->setClass("Student");
		$service1->handle();
	}
	catch(Exception $e)
	{
		print_r($e);
	}
 ?>