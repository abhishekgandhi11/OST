 <?php 
	spl_autoload_register();
	$custObj= new Customer(1,"Suraj","Suraj.sk243@gmail.com","18/02/1995","7284970941","Surat");
	echo $custObj;
	
	$vendObj= new Vendor(1,"Suraj","Suraj.sk243@gmail.com","18/02/1995","7284970941","Surat");
	echo $vendObj;
	
	//print_r($vendObj->getObjectToArray());
	//var_dump($custObj);
 ?>