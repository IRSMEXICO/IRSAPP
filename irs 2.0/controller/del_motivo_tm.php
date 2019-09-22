<?php 
include ("../model/acciones.php");
$id = $_GET['id'];
echo $id;
$tipo_motivo_tm=new consul();
$act_motivo_tm=$tipo_motivo_tm->cat_del_motivo_tm($id);
?>