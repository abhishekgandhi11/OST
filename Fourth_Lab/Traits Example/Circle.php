 <?php 
	require_once("Shape.php");
	class Circle
	{
		use Shape,Singleton;
		private $Radius;
		function getCalculatedArea()
		{
			echo "Area = ", 3.14 * $this->Radius * $this->Radius;
		}
	}
 ?>