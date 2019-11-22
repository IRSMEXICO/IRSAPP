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
public function actividades(){
    $consulta=$this->db->query("SELECT * FROM cat_actividades ");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

public function Colaboradores(){
    $consulta=$this->db->query("SELECT tipo_usuario from cat_colaboradores where id_rol = '9'");
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
public function ins_orden($id_cliente,$id_usuario,$jornadas,$actividades,$fecha_inicio,$toat,$id_contrato,$id_pieza,$turno,$id_empleado,$id_area,$horario_pactd,$precio_clnt,$correo_usuario,$captura_reporte,$sueldo_hora,$correo_irs,$trazabilidad,$comentario,$dias,$gpo_turno){
   $consulta=$this->db->query("INSERT INTO orden_servicio (id_cliente,id_usuario, jornadas, actividades, fecha_inicio, toat, id_contrato, id_pieza, turno, id_empleado, id_area, horario_pactd, precio_clnt, correo_usuario, captura_reporte, sueldo_hora, correo_irs, trazabilidad, comentario, dias, gpo_turno) VALUES ('$id_cliente','$id_usuario','$jornadas','$actividades','$fecha_inicio','$toat','$id_contrato','$id_pieza','$turno','$id_empleado','$id_area','$horario_pactd','$precio_clnt','$correo_usuario','$captura_reporte','$sueldo_hora','$correo_irs','$trazabilidad','$comentario','$dias','$gpo_turno')");
    echo'<script type="text/javascript">
    alert("orden registrada exitosamente");
    window.location.href="../views/orden_servicio/orden_servicio.php";
    </script>';
}
public function ordenes($id){
    $consulta=$this->db->query("SELECT orden_servicio.id_orden,orden_servicio.fecha_inicio,orden_servicio.jornadas,cat_actividades.tipo_actividad,cat_cliente_usuario.usuario 
    FROM orden_servicio 
    LEFT JOIN cat_cliente_usuario 
    ON orden_servicio.id_usuario= cat_cliente_usuario.id 
    LEFT JOIN cat_actividades
    ON orden_servicio.actividades = cat_actividades.id_codigo
    WHERE orden_servicio.id_cliente = '$id'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

public function detalle_orden($id_orden){
    $consulta=$this->db->query("SELECT 
    cat_cliente.cliente,
    cat_cliente_usuario.usuario,
    orden_servicio.jornadas,
    cat_actividades.tipo_actividad,
    orden_servicio.fecha_inicio,
    orden_servicio.toat,
    cat_contrato.tipo_contrato,
    cat_cliente_pieza.piezas,
    orden_servicio.turno,
    empleados.nom_empleado,
    cat_cliente_area.area,
    orden_servicio.horario_pactd, 
    orden_servicio.precio_clnt, 
    orden_servicio.correo_usuario, 
    orden_servicio.captura_reporte, 
    orden_servicio.sueldo_hora, 
    orden_servicio.correo_irs, 
    orden_servicio.trazabilidad, 
    orden_servicio.comentario, 
    orden_servicio.dias, 
    orden_servicio.gpo_turno
    FROM orden_servicio
    LEFT JOIN cat_cliente
    ON orden_servicio.id_cliente = cat_cliente.id_cliente
    LEFT JOIN cat_cliente_usuario 
    ON orden_servicio.id_usuario = cat_cliente_usuario.id 
    LEFT JOIN cat_actividades
    ON orden_servicio.actividades = cat_actividades.id_codigo
    LEFT JOIN cat_cliente_area
    ON orden_servicio.id_area = cat_cliente_area.id_area
    LEFT JOIN cat_cliente_pieza
    ON orden_servicio.id_pieza = cat_cliente_pieza.id_pieza 
    LEFT JOIN cat_contrato
    ON orden_servicio.id_contrato = cat_contrato.id_contrato 
    LEFT JOIN empleados
    ON orden_servicio.id_empleado = empleados.id_empleado
    WHERE orden_servicio.id_orden = '$id_orden'
    ");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

public function orden_ins(){
    $consulta=$this->db->query(" SELECT clie.cliente ,clie.foto, ord.id_orden, ord.id_usuario,ccu.usuario, ord.jornadas, ord.dias, ord.gpo_turno
    FROM cat_cliente clie,
    orden_servicio ord,
    cat_cliente_usuario  Ccu
    where clie.id_cliente = ord.id_cliente
    AND ord.id_usuario = Ccu.id;
    ");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}


public function GetOrdenDelCliente($cliente){
    $orden_cliente=$this->db->query("SELECT id_orden FROM orden_servicio WHERE id_cliente = '$cliente'");
    while($filas=$orden_cliente->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}


}
    ?>