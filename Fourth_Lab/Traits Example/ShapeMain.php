 <?php 
	spl_autoload_register();
	//$circleObj = new Circle();
	$circleObj =Circle::getInstansOf();
	$circleObj->Radius=5.20;
	$circleObj->getCalculatedArea();
 ?>
 