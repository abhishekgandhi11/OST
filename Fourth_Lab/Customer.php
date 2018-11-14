<?php 
	class Customer extends Person
	{
		protected $CustomerId;
		protected $Bday;
		function __construct($Cid,$name,$email,$bday,$contact,$address)
		{
			parent::__construct($name,$email,$contact,$address);
			$this->CustomerId=$Cid;
			$this->Bday = $bday;
		}
		
		function __toString()
		{
			return "Class Name:". __Class__ ."<br/>Customer Id:$this->CustomerId <br/>". $this->Name."<br/>Bday:$this->Bday<br/>Email:$this->Email<br/>
			Conatct:$this->Contact<br/>Address:$this->Address<br/><br/><br/><br/>";
		}
	}
?>