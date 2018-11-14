<?php
$reader = new XMLReader();
$reader->open('stud.xml');
$reader->read();
print "Local Name for Element: ".$reader->localName."\n";

while($reader->read()) {
	if($reader->nodeType == XMLReader::ELEMENT){
		 print "<br/>Element: ".$reader->name."<br/>";
		
		/* if ($reader->hasAttributes && $reader->moveToFirstAttribute()) {
              do {
                    print "  ".$reader->name."=".$reader->value."\n";
               } while($reader->moveToNextAttribute());
           } */
		   
	}elseif(XMLReader::TEXT == $reader->nodeType){
		if($reader->nodeType != XMLReader::ELEMENT){
           print "Contents: ".$reader->value."<br/>";
		}
	}
}

?>
