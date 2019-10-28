<?php
include 'conexion.php';
class consul{
    private $db;//database
    private $lista;
    private $prov;
    private $tbl;

    public function __construct(){
    $this->db=conexion::con();
        $this->lista=array();
    }

public function clientes(){
    $consulta=$this->db->query("SELECT * FROM cat_cliente");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function clientes_id($id){
    $consulta=$this->db->query("SELECT * FROM cat_cliente WHERE id_cliente='$id'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function usuarios_cliente($id){
    $consulta=$this->db->query("SELECT * FROM cat_cliente_usuario WHERE cliente='$id'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

public function cliente_pieza($id){
    $consulta=$this->db->query("SELECT * FROM cat_cliente_pieza WHERE id_cliente='$id'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

public function cliente_area($id){
    $consulta=$this->db->query("SELECT * FROM cat_cliente_area  WHERE id_cliente='$id'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function actividades($id){
    $consulta=$this->db->query("SELECT * FROM cat_actividades  WHERE codigo='$id'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function contrato(){
    $consulta=$this->db->query("SELECT * FROM cat_contrato ");
    while($filas=$consulta->fetch_array()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function empleados($id){
    $consulta=$this->db->query("SELECT * FROM empleados where id_cliente='$id' ");
    while($filas=$consulta->fetch_array()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function ins_orden($id_usuario,$jornadas,$actividades,$fecha_inicio,$toat,$id_contrato,$id_pieza,$turno,$id_empleado,$id_area,$horario_pactd,$precio_clnt,$correo_usuario,$captura_reporte,$sueldo_hora,$correo_irs,$trazabilidad,$comentario,$dias,$gpo_turno){
    echo $id_usuario.$jornadas.$actividades.$fecha_inicio.$toat.$id_contrato.$id_pieza.$turno.$id_empleado.$id_area.$horario_pactd.$precio_clnt.$correo_usuario.$captura_reporte.$sueldo_hora.$correo_irs.$trazabilidad.$comentario.$dias.$gpo_turno;
    $consulta=$this->db->query("INSERT INTO orden_servicio (id_usuario, jornadas, actividades, fecha_inicio, toat, id_contrato, id_pieza, turno, id_empleado, id_area, horario_pactd, precio_clnt, correo_usuario, captura_reporte, sueldo_hora, correo_irs, trazabilidad, comentario, dias, gpo_turno) VALUES ('$id_usuario','$jornadas','$actividades','$fecha_inicio','$toat','$id_contrato','$id_pieza','$turno','$id_empleado','$id_area','$horario_pactd','$precio_clnt','$correo_usuario','$captura_reporte','$sueldo_hora','$correo_irs','$trazabilidad','$comentario','$dias','$gpo_turno')");
    echo'<script type="text/javascript">
    alert("orden registrada exitosamente");
    window.location.href="../views/orden_servicio/orden_servicio.php";
    </script>';
}
}
    ?>