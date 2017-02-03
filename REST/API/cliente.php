<?php

$url = "http://127.0.1.0/CursoWs/REST/API/alumnos/alumno.php";

$JSON = file_get_contents($url);

$datos = json_decode($JSON);

echo $datos->name;