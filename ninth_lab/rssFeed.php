
<?php

function getXmlData($xml)
{
	foreach($xml->children() as $temp=>$val)
	{		
		echo $temp , " : ", $val,"<br/>";
		getXmlData($val);
	}	
}
	
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$response = file_get_contents('https://news.google.com/news?ned=us&topic=h&output=rss', false, stream_context_create($arrContextOptions));
$xml = new SimpleXMLElement($response,0,false);
getXmlData($xml);
 ?>
