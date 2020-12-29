<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "focuson";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));
}
?>
