<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
echo $id;
$tipo_registro=new consul();
$act_reg=$tipo_registro->cat_del_registro($id);
?>