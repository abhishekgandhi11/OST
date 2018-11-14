<?php
// Pull in the NuSOAP code

require_once('lib/nusoap.php');

class calcl
{

	public function add($no1,$no2=0) {
		$x= $no1+$no2;
		return $x;
	}
	
	public function power($no1,$no2) {
		$x= $no1**$no2;
		return $x;
	}
	
}

// Create the server instance
$server = new nusoap_server();

// Initialize WSDL support
$server->configureWSDL('calc', 'urn:calc');

// Register the method to expose
$server->register('calcl.add', // method name
array('no1'=>'xsd:integer' ,'no2'=>'xsd:integer'), // input parameters
array('return' => 'xsd:integer'), // output parameters
'urn:calc', // namespacex
'urn:calc#add', // soap action
'rpc', // style
'encoded', // use
'Perform Addition of Two Numbers' // documentation
);

// Register the method to expose
$server->register('calcl.power', // method name
array('no1'=>'xsd:integer' ,'no2'=>'xsd:integer'), // input parameters
array('return' => 'xsd:integer'), // output parameters
'urn:calc', // namespacex
'urn:calc#power', // soap action
'rpc', // style
'encoded', // use
'Perform power of Two Numbers as base and raise' // documentation
);


//Use the request to (try to) invoke the service
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : "";
//$server->service($HTTP_RAW_POST_DATA);
$server->service(file_get_contents("php://input"));

?>