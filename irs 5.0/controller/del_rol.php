<?php 
include ("../model/acciones.php");
$id_rol = $_GET['id'];
$tipo_rol=new consul();
$act_rol=$tipo_rol->cat_del_rol($id_rol);
?>