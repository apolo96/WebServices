<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/CursoWs/NuSoap/ws.php");
$planetas = $cliente->call("mostrarPlanetas");
$imagen = $cliente->call("mostrarImagen",array("categoria" => "es"));
echo "<h1>Planetas</h1>";
echo $planetas;
var_dump($imagen);
?>