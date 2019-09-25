<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
echo $id;
$tipo_moneda=new consul();
$act_mon=$tipo_moneda->cat_del_moneda($id);
?>