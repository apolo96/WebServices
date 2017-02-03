<?php
header('Content-Type: application/json');

function showAlumno(){
	$alumno = array(
		"name"=>"Andres Polo",
		"edad"=>"12",
		"pais"=>"Colombia",
		"ciudad"=>"Neiva"
		);
	return $alumno;
}
echo json_encode(showAlumno());
?>