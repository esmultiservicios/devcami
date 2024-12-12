<?php
session_start();   
include "../funtions.php";
	
//CONEXION A DB
$mysqli = connect_mysqli();

$identidad = $_POST['identidad'];

$query = "SELECT pacientes_id 
    FROM pacientes 
	WHERE identidad = '$identidad'";
$result = $mysqli->query($query);

$pacientes_id = 0;

if($result->num_rows>0){
	$consulta2 = $result->fetch_assoc();
	$pacientes_id = $consulta2['pacientes_id'];
}

if($pacientes_id != 0){
	echo 1;
}else{
	echo 2;
}

$result->free();//LIMPIAR RESULTADO
$mysqli->close();//CERRAR CONEXIÓN