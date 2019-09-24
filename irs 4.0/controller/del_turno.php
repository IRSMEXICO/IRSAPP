<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
echo $id;
$tipo_turno=new consul();
$act_tur=$tipo_turno->cat_del_turno($id);
?>