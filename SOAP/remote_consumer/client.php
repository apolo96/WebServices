<?php
$url = "http://api.radioreference.com/soap2/?wsdl&v=latest";
$client = new SoapClient($url);
$countries  = $client->getCountryList();
print_r($countries);
?>
