<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
$tipo_act=new consul();
$act_mod=$tipo_act->cat_del_cliente($id);
?>