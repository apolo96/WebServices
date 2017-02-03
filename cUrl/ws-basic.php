<?php
$curl = curl_init("http://127.0.1.0/CursoWs/cUrl/datos.txt");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$respuesta = curl_exec($curl);
$info = curl_getinfo($curl);
if( $info['http_code'] == 200){
	$datos = explode(",", $respuesta);
	foreach ($datos as $value) {
		echo "-> ". ucfirst($value) ."<br>";
	}
}else{
	echo "error ".curl_errno($curl);
}
?>