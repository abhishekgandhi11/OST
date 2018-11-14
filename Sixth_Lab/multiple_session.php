 <?php
	
	
	/*
		session_regenerate_id();
		session_name("demo_2");
		$_SESSSION['count']=1;
		
		session_regenerate_id();
		session_name("demo_3");
		$_SESSSION['count']=1;
	*/
//session_name("data");			
	session_start();
	
	$_SESSION['count']=1;
	
	session_write_close();	
	$_SESSION['count']=10;
	
	//$_SESSSION['count1']=20;
//session_name("data");	
	session_start();
	echo $_SESSION['count'];var_dump($_SESSION);
		session_write_close();	

	
 ?>