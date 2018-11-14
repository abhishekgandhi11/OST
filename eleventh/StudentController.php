<?php
spl_autoload_register();		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];
switch($view){

	case "all":
		$studentHandler = new StudentHandler();
		$studentHandler->getAllStudent();
		break;
		
	case "single":
		$studentHandler = new StudentHandler();
		$studentHandler->getStudent($_GET['ID']);
		break;
		
	default :
		echo "404 - not found";
		break;
}
?>
