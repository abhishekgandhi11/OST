<?php
	//echo phpinfo();
	$opt = array("location"=>"http://localhost/Sem_Fourth_practical/tenth%20lab/serviceProvider.php", "uri"=>"http://localhost");

	try
	{
	$client=new SoapClient(null,$opt);
	//echo $client->sayHello();
	$res=$client->__soapcall('sayHello1',array());
	
	echo $res;
	}
	
	catch(SoapFault $e)
	{
		print_r($e);
	}
	

?>