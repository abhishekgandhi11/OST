<?php 
	class Student
	{
		private  $Id=0;
		private $Name;
		private $Program;
		private $Sem;
		
		function __construct()
		{
			//echo "Student Registered";
		}
		
		function __set($var , $val)
		{
			$this->$var=$val;
		}
		
		function __get($var)
		{
			return $this->$var;
		}
		
		function getObjectToArray()
		{
			return get_object_vars($this);
		}
		
		function __destruct()
		{
			//echo "Object is Distroyed";
		}
		
	}
?>