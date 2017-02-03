<?php
$hotels = file_get_contents("hotels.xml");
$xml = new SimpleXMLElement($hotels);
echo "List Hotels: <br>";
foreach ($xml->children() as $hotel) {
  var_dump($hotel);
}

?>
