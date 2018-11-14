<?php 
	trait Shape
	{
		function __set($key,$val)
		{
			$this->$key=$val;
		}
		
		function __get($key)
		{
			$this->$key;
		}
		
		function getCalculatedArea(){}
	}
?>