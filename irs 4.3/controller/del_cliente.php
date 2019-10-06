<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
$cliente=new consul();
$act_mod=$cliente->cat_del_cliente($id);
?>