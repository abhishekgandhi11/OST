<!doctype="html 2.0">
<html>
<body>
<?php

	$a = 100;
	var_dump($a);
	$a = true;
	var_dump($a);
	$a = 12.30;
	var_dump($a);
	
	function checkPrime()
	{
		$n=func_get_arg(0);
		
		$isPrime =true;
		for($i=2;$i<=sqrt($n);$i++)
		{
			if(($n % $i) == 0)
			{
				$isPrime=false;
				break;
			}
		}

		if($isPrime)
		{
			echo "Prime";
		}
		else
		{
			echo "Not Prime";
		}
	}
	
	//Referencing of funtion to Variable
	$a = "checkPrime";
	$a(17);
	
	//Checking the scope of the Global & local variable
	$a=10;
	{
		global $b;
		$b=10;
		$a = 20;
		echo "<hr/>".($GLOBALS['a'] + $a);
	}
	echo "<hr/>";
	echo $b;
	//Demo Static Variable
	function counter()
	{
		static $a = 1;
		echo " $a";
		$a++;
	}
	$a = 1;
	while($a <= 5)
	{
		counter();
		$a++;
	}
	
	$a = 10;
	$b = "10";
	if($a === $b)
		echo "yes is it equal";
	else
		echo "Not Equal";
	
	//$c=$a ** $b;
	//echo $c;
	
?>
</body>
</html>
