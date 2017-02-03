<?php
require_once "lib/nusoap.php";
$client = new nusoap_client("http://localhost/CursoWs/NuSoap-Mysql/soup/Ebooks_Service.php");
$libros = $client->call("eBooks");
var_dump($libros);
?>