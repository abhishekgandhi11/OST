<?php 
	class Vendor extends Person
	{
		protected $VendorId;
		protected $joinDate;
		function __construct($Cid,$name,$email,$jday,$contact,$address)
		{
			parent::__construct($name,$email,$contact,$address);
			$this->VendorId=$Cid;
			$this->joinDate = $jday;
		}
		
		function __toString()
		{
			return "Class Name:". __Class__ ."<br/>Vendor Id:$this->VendorId <br/>". $this->Name."<br/>Join day:$this->joinDate<br/>Email:$this->Email<br/>
			Conatct:$this->Contact<br/>Address:$this->Address";
		}
	}
?>