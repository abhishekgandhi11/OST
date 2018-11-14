<?php
// Pull in the NuSOAP code

require_once('lib\nusoap.php');
// Create the client instance
$client = new nusoap_client('http://localhost/Sem_Fourth_practical/nusoap/server.php?wsdl', true);


// Call the SOAP method
$result = $client->call('calcl.power',array('no1'=>123,'no2'=>2));

if ($client->fault) {
	echo '<h2> error in calling</h2><pre>’ . $err1 . ‘</pre>';
}

echo "response : " .$result;
?>