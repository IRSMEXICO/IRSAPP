<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
echo $id;
$tipo_act=new consul();
$act_mod=$tipo_act->cat_del_captura($id);
?>