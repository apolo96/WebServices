<?php
$options = array("location" => "http://localhost/CursoWs/SOAP/wservice.php",
 "uri" => "http://localhost/");
try {
 $client = new SoapClient(null, $options);
 $events = $client->getEvents();
 print_r($events);
} catch (SoapFault $e) {
 var_dump($e);
}


?>
