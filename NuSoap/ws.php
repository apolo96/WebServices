<?php
require_once "lib/nusoap.php";
function mostrarPlanetas(){
    $planetas = "Nplanet";
    return $planetas;
}
function mostrarImagen($categoria){
    switch($categoria){
        case 'espacio':
            $img = "imagen.png";
            break;
        default:
            $img = "imagen2.png";
    }
    return $resImg = "<img src='img/".$img."'>";
}
if(!isset($HTTP_RAW_POST_DATA)){
    $HTTP_RAW_POST_DATA = file_get_contents('php://input');
}
$server = new soap_server();
$server->configureWSDL("Info Blog","urn:InfoBlog");
$server->register(
    "mostrarPlanetas",// Nombre del Web Method service
    array(), // Parametros
    array('return'=>'xsd:string'), // Respuesta
    'urn:infoBlog',
    'urn:infoBlog#mostrarPlanetas',
    'rpc', // estilo
    'encoded', // uso
    'Muestra la descripcion del blog planeta'// desc        
);

$server->register(
    "mostrarImagen",// Nombre del Web Method service
    array('categoria'=>'xsd:string'), // Parametros
    array('return'=>'xsd:string'), // Respuesta
    'urn:infoBlog',
    'urn:infoBlog#mostrarImagen',
    'rpc', // estilo
    'encoded', // uso
    'Muestra una imagen'// desc        
);
$server->service($HTTP_RAW_POST_DATA);

?>