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
    public function login($usuario,$contrasena){
        $consulta=$this->db->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

    public function ext_actividad($act){
        $tipo_actividad = $this->db->query("INSERT INTO cat_actividades (tipo_actividad) values ('$act')");
        echo'<script type="text/javascript">
						alert("La actividad '.$act.' se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_cap($capt){
    $tipo_captura = $this->db->query("INSERT INTO cat_captura (tipo_captura) values ('$capt')");
    echo'<script type="text/javascript">
						alert("La captura( '.$capt.' )se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_cont($cont){
    $tipo_contrato= $this->db->query("INSERT INTO cat_contrato (tipo_contrato) values ('$cont')");
    echo'<script type="text/javascript">
						alert("El contrato( '.$cont.' )se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_moneda($moneda){
    $tipo_moneda= $this->db->query("INSERT INTO cat_moneda (tipo_moneda) values ('$moneda')");
    echo'<script type="text/javascript">
						alert("El tipo de moneda( '.$moneda.' )se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_motivo_tm($motivo_tm){
    $tipo_motivo_tm= $this->db->query("INSERT INTO cat_motivo_tm (tipo_motivo_tm) values ('$motivo_tm')");
    echo'<script type="text/javascript">
						alert("El motivo tm( '.$motivo_tm.' )se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_rate($rate){
    $tipo_rate= $this->db->query("INSERT INTO cat_rate (tipo_rate) values ('$rate')");
    echo'<script type="text/javascript">
						alert("El ratet( '.$rate.' )se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_tregistro($tregistro){
    $tipo_tregistro= $this->db->query("INSERT INTO cat_registro (tipo_registro) values ('$tregistro')");
    echo'<script type="text/javascript">
						alert("'.$tregistro.' se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_turno($turno){
    $tipo_turno= $this->db->query("INSERT INTO cat_turno (tipo_turno) values ('$turno')");
    echo'<script type="text/javascript">
						alert("'.$turno.' se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}

public function cat_actividades(){
$cat_actividades=$this->db->query("SELECT * FROM cat_actividades");
while($filas=$cat_actividades->fetch_assoc()){
    $this->lista[]=$filas;
}
return $this->lista;
}
public function cat_captura(){
    $cat_captura=$this->db->query("SELECT * FROM cat_captura");
    while($filas=$cat_captura->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
    }

    public function cat_contrato(){
        $cat_contrato=$this->db->query("SELECT * FROM cat_contrato");
        while($filas=$cat_contrato->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
        }
        public function cat_moneda(){
            $cat_moneda=$this->db->query("SELECT * FROM cat_moneda");
            while($filas=$cat_moneda->fetch_assoc()){
                $this->lista[]=$filas;
            }
            return $this->lista;
            }
            public function cat_mot(){
                $cat_motivo=$this->db->query("SELECT * FROM cat_motivo_tm");
                while($filas=$cat_motivo->fetch_assoc()){
                    $this->lista[]=$filas;
                }
                return $this->lista;
                }
                public function cat_rate(){
                    $cat_rate=$this->db->query("SELECT * FROM cat_rate");
                    while($filas=$cat_rate->fetch_assoc()){
                        $this->lista[]=$filas;
                    }
                    return $this->lista;
                    }
                    public function cat_turno(){
                        $cat_turno=$this->db->query("SELECT * FROM cat_turno");
                        while($filas=$cat_turno->fetch_assoc()){
                            $this->lista[]=$filas;
                        }
                        return $this->lista;
                        }
                        public function cat_registro(){
                            $cat_registro=$this->db->query("SELECT * FROM cat_registro");
                            while($filas=$cat_registro->fetch_assoc()){
                                $this->lista[]=$filas;
                            }
                            return $this->lista;
                            }
public function cat_mod_actividades($tipo_actividad,$id){
    $cat_actividades=$this->db->query("UPDATE cat_actividades set tipo_actividad='$tipo_actividad' WHERE id_codigo='$id'");
    echo'<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';

}
public function cat_mod_captura($tipo_captura,$id){
    $cat_captura=$this->db->query("UPDATE cat_captura set tipo_captura='$tipo_captura' WHERE id_captura='$id'");
    echo'<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';

}
public function cat_mod_contrato($tipo_contrato,$id){
    $cat_contrato=$this->db->query("UPDATE cat_contrato set tipo_contrato='$tipo_contrato' WHERE id_contrato='$id'");
    echo'<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';
}
public function cat_mod_moneda($tipo_moneda,$id){
    $cat_moneda=$this->db->query("UPDATE cat_moneda set tipo_moneda='$tipo_moneda' WHERE id_moneda='$id'");
    echo'<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';
}
public function cat_mod_motivo_tm($tipo_motivo_tm,$id){
    $cat_moneda=$this->db->query("UPDATE cat_motivo_tm set tipo_motivo_tm='$tipo_motivo_tm' WHERE id_motivo_tm='$id'");
    echo'<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';
}
public function cat_mod_rate($tipo_rate,$id){
    $cat_rate=$this->db->query("UPDATE cat_rate set tipo_rate='$tipo_rate' WHERE id_rate='$id'");
    echo'<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';
}
public function cat_mod_registro($tipo_registro,$id){
    $cat_registro=$this->db->query("UPDATE cat_registro set tipo_registro='$tipo_registro' WHERE id_registro='$id'");
    echo'<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';
}
public function cat_mod_turno($tipo_turno,$id){
    $cat_turno=$this->db->query("UPDATE cat_turno set tipo_turno='$tipo_turno' WHERE id_turno='$id'");
    echo'<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';
}
public function cat_del_actividades($id){

    $cat_actividades=$this->db->query("DELETE FROM cat_actividades WHERE id_codigo='$id'");

    echo'<script type="text/javascript">
    alert("Actividad eliminada correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_captura($id){

    $cat_captura=$this->db->query("DELETE FROM cat_captura WHERE id_captura='$id'");

    echo'<script type="text/javascript">
    alert("Captura eliminada correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_contrato($id){

    $cat_contrato=$this->db->query("DELETE FROM cat_contrato WHERE id_contrato='$id'");

    echo'<script type="text/javascript">
    alert("Contrato eliminado correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_moneda($id){

    $cat_moneda=$this->db->query("DELETE FROM cat_moneda WHERE id_moneda='$id'");

    echo'<script type="text/javascript">
    alert("Moneda eliminada correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_motivo_tm($id){

    $cat_motivo_tm=$this->db->query("DELETE FROM cat_motivo_tm WHERE id_motivo_tm='$id'");

    echo'<script type="text/javascript">
    alert("Motivo eliminado correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_rate($id){

    $cat_rate=$this->db->query("DELETE FROM cat_rate WHERE id_rate='$id'");

    echo'<script type="text/javascript">
    alert("Rate eliminado correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_registro($id){

    $cat_registro=$this->db->query("DELETE FROM cat_registro WHERE id_registro='$id'");

    echo'<script type="text/javascript">
    alert("Registro eliminado correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_turno($id){

    $cat_turno=$this->db->query("DELETE FROM cat_turno WHERE id_turno='$id'");

    echo'<script type="text/javascript">
    alert("Turno eliminado correctamente");
    window.history.go(-1);
    </script>';
}

//------------------------COLABORADORES------------------------//
public function colaboradores(){
    $col=$this->db->query("SELECT * FROM cat_colaboradores");
    while($filas=$col->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
    }

public function colaboradores_cons($id_col){
    $cols=$this->db->query("SELECT * FROM cat_colaboradores WHERE Id_usuario ='$id_col'");
    while($filas=$cols->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
    }

public function cat_mod_colaboradores($id_col,$nombre,$email,$cuenta,$contra,$rol){
     $cat_colaboradores=$this->db->query("UPDATE cat_colaboradores set  tipo_usuario='$nombre',email='$email',cuenta='$cuenta',contra='$contra',rol='$rol' WHERE Id_usuario='$id_col'");
    echo'<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';
    }
    public function cat_del_colaboradores($id){

        $cat_tcolaboradores=$this->db->query("DELETE FROM cat_colaboradores WHERE Id_usuario ='$id'");
    
        echo'<script type="text/javascript">
        alert("Colaborador eliminado correctamente");
        window.history.go(-1);
        </script>';
    }
    public function cat_add_colaboradores($nombre,$email,$cuenta,$contra,$rol){
        $cat_colaboradores=$this->db->query("INSERT INTO cat_colaboradores (tipo_usuario,email,cuenta,contra,rol) VALUES('$nombre','$email','$cuenta','$contra','$rol')");
       echo'<script type="text/javascript">
       alert("Colaborador agregado exitosamente");
       window.history.go(-2);
       </script>';
       }
//------------------------CLIENTES------------------------//

public function cliente(){
    $cliente=$this->db->query("SELECT * FROM cat_cliente");
    while($filas=$cliente->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

public function cliente_cons($id_cliente){
    $cols=$this->db->query("SELECT * FROM cat_cliente WHERE id_cliente ='$id_cliente'");
    while($filas=$cols->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
    }

    public function cat_mod_cliente($id,$nombre,$foto){
        $cat_cliente=$this->db->query(" UPDATE cat_cliente SET cliente='$nombre', foto='$foto' where id_cliente= '$id'");
       echo'<script type="text/javascript">
       alert("Cliente agregado exitosamente");
       window.location.href="../views/clientes/index_cliente.php";
       </script>';
       }
       public function cat_mod_cliente1($id,$nombre,$foto_actual){
        $cat_cliente=$this->db->query(" UPDATE cat_cliente SET cliente='$nombre', foto='$foto_actual' where id_cliente= '$id'");
       echo'<script type="text/javascript">
       alert("Cliente agregado exitosamente!");
       window.location.href="../views/clientes/index_cliente.php";
       </script>';
       }

       public function cat_del_cliente($id){

        $cat_tcolaboradores=$this->db->query("DELETE FROM cat_cliente WHERE id_cliente ='$id'");
    
        echo'<script type="text/javascript">
        alert("Cliente eliminado correctamente");
        window.location.href="../views/clientes/index_cliente.php";
        </script>';
}

public function cat_add_cliente($ruta_img,$cliente){
    $cat_cliente_img=$this->db->query("INSERT INTO cat_cliente (cliente,foto) VALUES ('$cliente','$ruta_img')");
    echo'<script type="text/javascript">
    alert("Cliente agregado exitosamente");
    window.location.href="../views/clientes/index_cliente.php";
    </script>';
}

//------------------------CLIENTES------------------------//
public function cat_cliente_area(){
    $cliente_area=$this->db->query("SELECT * FROM cat_cliente_area LEFT JOIN cat_cliente ON cat_cliente_area.id_cliente = cat_cliente.id_cliente");
    while($filas=$cliente_area->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function cat_add_cliente_area($area,$id_cliente){
    $cliente_area=$this->db->query("INSERT INTO cat_cliente_area (area,id_cliente) VALUES ('$area','$id_cliente')");
    echo'<script type="text/javascript">
    alert("Area agregada exitosamente");
    window.location.href="../views/clientes/index_cliente_area.php";
    </script>';
}
public function cat_cliente_area_info($id){
    $cliente_area=$this->db->query("SELECT * FROM cat_cliente_area LEFT JOIN cat_cliente ON cat_cliente_area.id_cliente = cat_cliente.id_cliente WHERE id_area='$id'");
    while($filas=$cliente_area->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function mod_cat_cliente_area($id_cliente,$id_area,$area){
$mod=$this->db->query("UPDATE cat_cliente_area SET area='$area',id_cliente='$id_cliente' WHERE id_area='$id_area'");
echo'<script type="text/javascript">
    alert("Area modificada exitosamente");
    window.location.href="../views/clientes/index_cliente_area.php";
    </script>';
}
public function cat_del_cliente_area($id){
    $cat_cliente_img=$this->db->query("DELETE FROM cat_cliente_area WHERE id_area='$id'");
    echo'<script type="text/javascript">
    alert("Area eliminada exitosamente");
    window.location.href="../views/clientes/index_cliente_area.php";
    </script>';
}
//------------------------PIEZAS------------------------//
public function cat_cliente_pieza(){
    $cliente_area=$this->db->query("SELECT * FROM cat_cliente_pieza LEFT JOIN cat_cliente ON cat_cliente_pieza.id_cliente = cat_cliente.id_cliente");
    while($filas=$cliente_area->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function cat_add_cliente_pieza($ruta_img,$cliente,$piezas){
    $cliente_area=$this->db->query("INSERT INTO cat_cliente_pieza (piezas,foto,id_cliente) VALUES ('$piezas','$ruta_img','$cliente')");
    echo'<script type="text/javascript">
    alert("Pieza agregada exitosamente");
    window.location.href="../views/clientes/index_cliente_piezas.php";
    </script>';
}

public function cat_cliente_pieza_info($id){
    $cliente_area=$this->db->query("SELECT * FROM cat_cliente_pieza LEFT JOIN cat_cliente ON cat_cliente_pieza.id_cliente = cat_cliente.id_cliente WHERE id_pieza='$id'");
    while($filas=$cliente_area->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

public function cat_del_cliente_pieza($id){
    $cat_cliente_img=$this->db->query("DELETE FROM cat_cliente_pieza WHERE id_pieza='$id'");
    echo'<script type="text/javascript">
    alert("Pieza eliminada exitosamente");
    window.location.href="../views/clientes/index_cliente_piezas.php";
    </script>';
}

public function cat_mod_cliente_pieza($id_cliente,$id_pieza,$piezas,$foto_actual){
    $mod=$this->db->query("UPDATE cat_cliente_pieza SET id_cliente='$id_cliente', piezas='$piezas', foto='$foto_actual' WHERE id_pieza='$id_pieza'");
    echo'<script type="text/javascript">
    alert("Pieza modificada exitosamente");
    window.location.href="../views/clientes/index_cliente_piezas.php";
    </script>';
}

public function mod_cliente_pieza($id_cliente,$ruta_fotos,$id_pieza,$piezas){
    $mod1=$this->db->query("UPDATE cat_cliente_pieza SET id_cliente='$id_cliente', piezas='$piezas', foto='$ruta_fotos' WHERE id_pieza='$id_pieza'");
    echo'<script type="text/javascript">
    alert("Pieza modificada exitosamente");
    window.location.href="../views/clientes/index_cliente_piezas.php";
    </script>';
    }

//------------------------cliente------------------------//
public function cat_cliente_info(){
    $cliente=$this->db->query("SELECT * FROM cat_cliente_usuario us LEFT JOIN cat_cliente  cat ON us.cliente = cat.id_cliente");
    while($filas=$cliente->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function insertar($usuario,$id_cliente,$email,$cuenta,$contra){
    $insert=$this->db->query("INSERT INTO cat_cliente_usuario (usuario,cliente,email,cuenta,contra) values('$usuario','$id_cliente','$email','$cuenta','$contra')");
    echo'<script type="text/javascript">
    alert("usuario agregado exitosamente");
    window.location.href="../views/clientes/index_cliente_usuario.php";
    </script>';
}
public function busqueda_usuario_cliente($id_cliente_usuario){
    $busqueda=$this->db->query("SELECT * FROM cat_cliente_usuario where id='$id_cliente_usuario'");
    while($filas=$busqueda->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function modificar($usuario,$id_cliente,$email,$cuenta,$contra,$id){
    $modificar=$this->db->query("UPDATE cat_cliente_usuario SET usuario='$usuario',cliente='$id_cliente',email='$email',cuenta='$cuenta',contra='$contra' where id='$id'");
    echo'<script type="text/javascript">
    alert("usuario modificada exitosamente");
    window.location.href="../views/clientes/index_cliente_usuario.php";
    </script>';
}
public function del_cliente_usuario($id){
    $eliminar=$this->db->query("DELETE FROM cat_cliente_usuario where id='$id'");
    echo'<script type="text/javascript">
    alert("usuario Eliminado exitosamente");
    window.location.href="../views/clientes/index_cliente_usuario.php";
    </script>';
}
}
?>