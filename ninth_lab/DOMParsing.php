<?php
	
	$xmlDoc = new DOMDocument();
	$xmlDoc->load("stud.xml");
	
	$root = $xmlDoc->documentElement;
	
	$stud = $xmlDoc->createElement('student');
	
	$rollNo = $xmlDoc->createElement('rollno');
	
	$txt = $xmlDoc->createTextNode('16mca025');
	
	$rollNo->appendChild($txt);
	// Getting the root node name in thne document
	//$name = $xmlDoc->createElement('name');
	//$name->appendChild($xmlDoc->createTextNode('suraj'));
	
	$stud->appendChild($rollNo);
	//$stud->appendChild($name);
	$root->appendChild($stud);

	$xmlDoc->save('stud.xml'); // Save as DOMDocument
	
	
	//$s = simplexml_import_dom($xmlDoc);
	//$s->saveXML('stud.xml'); //saveXML SimpleXMLElement

	
	
	//Printing the elements values
	echo '<br/>';
	foreach ($root->childNodes AS $item) {
		if($item->nodeName!="#text")
		{
			echo  $item->nodeName . " = " . $item->nodeValue . "<br>";
		}
	}
?>