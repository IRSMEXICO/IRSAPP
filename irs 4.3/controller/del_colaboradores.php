<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
$tipo_moneda=new consul();
$act_mon=$tipo_moneda->cat_del_colaboradores($id);
?>