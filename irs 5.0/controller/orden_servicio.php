<?php
include ("../model/orden_servicio.php");
$id_cliente=$_POST['id_cliente'];
$id_usuario=$_POST['usuarios'];
$jornadas=$_POST['jornadas_horas'];
$actividades=$_POST['actividades'];
$fecha_inicio=$_POST['fecha_inicio'];
$toat=$_POST['toat'];
$id_contrato=$_POST['contrato'];
$id_pieza=$_POST['num_parte'];
$turno=$_POST['acomodo_turno'];
$id_empleado=$_POST['id_empleado'];
$id_area=$_POST['area_trabajo'];
$horario_pactd=$_POST['horario_pactd'];
$precio_clnt=$_POST['precio_clnt'];
$correo_usuario=$_POST['correo_usuario'];
$captura_reporte=$_POST['captura_reporte'];
$sueldo_hora=$_POST['sueldo_hora'];
$correo_irs=$_POST['correo_irs'];
$trazabilidad=$_POST['trazabilidad'];
$comentario=$_POST['comentario'];
$dias = implode(',',$_POST['Days']);
$gpo_turno=implode(',',$_POST['gpo_turno']);
$obj=new consul();
$iniciar=$obj->ins_orden($id_cliente,$id_usuario,$jornadas,$actividades,$fecha_inicio,$toat,$id_contrato,$id_pieza,$turno,$id_empleado,$id_area,$horario_pactd,$precio_clnt,$correo_usuario,$captura_reporte,$sueldo_hora,$correo_irs,$trazabilidad,$comentario,$dias,$gpo_turno);
?>