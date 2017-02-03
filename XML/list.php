<?php

$list = array("eggs","break","milk","bananas","becon","cheese");

$xml = new SimpleXMLElement("<list />");
foreach ($list as $item) {
  $xml->addChild("item",$item);
}

$dom = dom_import_simplexml($xml)->ownerDocument;
$dom->formatOutput = true;
echo $dom->saveXML();
?>
