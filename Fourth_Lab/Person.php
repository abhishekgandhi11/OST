 <?php
	class Person
	{
		protected $Name;
		protected $Email;
		protected $Contact;
		protected $Address;
		function __construct($name,$email,$contact,$address)
		{
			$this->Name=$name;
			$this->Email = $email;
			$this->Contact = $contact;
			$this->Address = $address;
		}
		function __set($key , $val)
		{
			$this->$key=$val;
		}
		function __get($key)
		{
			return $this->$key;
		}
		
		function getObjectToArray()
		{
			return get_object_vars($this);
		}
	}
 ?>