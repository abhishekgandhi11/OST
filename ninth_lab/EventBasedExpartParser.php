<?php
	
	function startElement($parser ,$elementName , $attributes)
	{
		echo "Start:",$elementName,"<hr/>";
	}
	function endElement($parser ,$elementName)
	{
		echo "End :",$elementName,"<br/>";
	}
	
	function elementContents($parser ,$contents)
	{
		
		//var_dump($contents);
		echo "Data :",$contents;
	}
	
	$xmlParser = xml_parser_create();
	
	xml_set_element_handler($xmlParser,'startElement','endElement');
	xml_set_character_data_handler($xmlParser,'elementContents');
	
	$fp=fopen('stud.xml','r');
	
	while($data = fread($fp,4096))
	{
		xml_parse($xmlParser,$data,feof($fp)) or die('error');
	}
	
?>