<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
$tipo_contrato=new consul();
$act_cont=$tipo_contrato->cat_del_contrato($id);
?>