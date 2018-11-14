<?php 
	class Student
	{
		private  $Id=0;
		private $Name;
		private  $Gender;
		private  $Bday;
		private  $Email;
		private  $Mobile;
		private $Address;
		
		function __construct()
		{
			$this->Id=$this->Id+1;
			echo "Student Registered";
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
			echo "done";
		}
		
	}
?>