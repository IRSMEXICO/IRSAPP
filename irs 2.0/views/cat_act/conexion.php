<?php
/*Datos de conexion a la base de datos*/
$db_host = "irsweb22019.mysql.database.azure.com";
$db_user = "adminirs@irsweb22019";
$db_pass = "IRSDEMEXICO#2019";
$db_name = "irs";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>