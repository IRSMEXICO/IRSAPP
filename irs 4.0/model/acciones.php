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
    alert("Actividad eliminada correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_contrato($id){

    $cat_contrato=$this->db->query("DELETE FROM cat_contrato WHERE id_contrato='$id'");

    echo'<script type="text/javascript">
    alert("Actividad eliminada correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_moneda($id){

    $cat_moneda=$this->db->query("DELETE FROM cat_moneda WHERE id_moneda='$id'");

    echo'<script type="text/javascript">
    alert("Actividad eliminada correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_motivo_tm($id){

    $cat_motivo_tm=$this->db->query("DELETE FROM cat_motivo_tm WHERE id_motivo_tm='$id'");

    echo'<script type="text/javascript">
    alert("Actividad eliminada correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_rate($id){

    $cat_rate=$this->db->query("DELETE FROM cat_rate WHERE id_rate='$id'");

    echo'<script type="text/javascript">
    alert("Actividad eliminada correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_registro($id){

    $cat_registro=$this->db->query("DELETE FROM cat_registro WHERE id_registro='$id'");

    echo'<script type="text/javascript">
    alert("Actividad eliminada correctamente");
    window.history.go(-1);
    </script>';
}
public function cat_del_turno($id){

    $cat_turno=$this->db->query("DELETE FROM cat_turno WHERE id_turno='$id'");

    echo'<script type="text/javascript">
    alert("Actividad eliminada correctamente");
    window.history.go(-1);
    </script>';
}
}
?>