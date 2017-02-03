<?php
require_once "../lib/nusoap.php";
require_once "../model/Ebooks.php";
function eBooks(){
	$eBook = new Libro();
	return $eBook->showEbooks();
}
if(!isset($HTTP_RAW_POST_DATA)){
    $HTTP_RAW_POST_DATA = file_get_contents('php://input');
}
$server = new soap_server();
$server->configureWSDL("Ebooks Apolo","urn:EBAPOLO");
$server->register(
	"eBooks",
	array(), // Parametros
	array('return'=>'xsd: array'), // Respuesta
	"urn:EBAPOLO", // Namespace
	"urn:EBAPOLO#ebooks", // Accion
	"rpc", // Estilo
	"encoded",//Uso
	"Muestra todos los libros de la biblioteca"// Descripcion
	);
$server->service($HTTP_RAW_POST_DATA);
?>