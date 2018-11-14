<?php
	function getXmlData($xml)
	{
		foreach($xml->children() as $temp=>$val)
		{		
			echo $temp , " : ", $val,"<br/>";
			getXmlData($val);
		}	
	}
	
	//$xml =simplexml_load_file('stud.xml');
	
	$xml =new SimpleXMLElement('stud.xml',0,true);
	
	//Update the contents of particular element
	$xml->student[0]->rollno='16mca01';
	
	//Add new node as student
	$child = $xml->addChild('student','suraj');
	
	//save the content in a file
	$xml->asXML('stud.xml');
	
	//Iterate the xml contents
	getXmlData($xml);
?>