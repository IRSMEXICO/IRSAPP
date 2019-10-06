<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
$tipo_rate=new consul();
$act_rate=$tipo_rate->cat_del_rate($id);
?>