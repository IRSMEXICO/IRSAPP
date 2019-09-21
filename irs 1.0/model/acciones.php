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

    public function ext_actividad($act,$cod_act){
        $tipo_actividad = $this->db->query("INSERT INTO cat_actividades (tipo_actividad,codigo) values ('$act','$cod_act')");
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
    $tipo_contrato= $this->db->query("INSERT INTO cat_contrato (contrato) values ('$cont')");
    echo'<script type="text/javascript">
						alert("El contrato( '.$cont.' )se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_moneda($moneda){
    $tipo_moneda= $this->db->query("INSERT INTO cat_moneda (moneda) values ('$moneda')");
    echo'<script type="text/javascript">
						alert("El tipo de moneda( '.$moneda.' )se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_motivo_tm($motivo_tm){
    $tipo_motivo_tm= $this->db->query("INSERT INTO cat_motivo_tm (motivo_tm) values ('$motivo_tm')");
    echo'<script type="text/javascript">
						alert("El motivo tm( '.$motivo_tm.' )se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_rate($rate){
    $tipo_rate= $this->db->query("INSERT INTO cat_rate (rate) values ('$rate')");
    echo'<script type="text/javascript">
						alert("El ratet( '.$rate.' )se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_tregistro($tregistro){
    $tipo_tregistro= $this->db->query("INSERT INTO cat_tregistro (tregistro) values ('$tregistro')");
    echo'<script type="text/javascript">
						alert("'.$tregistro.' se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
public function ins_turno($turno){
    $tipo_turno= $this->db->query("INSERT INTO cat_turno (turno) values ('$tregistro')");
    echo'<script type="text/javascript">
						alert("'.$tregistro.' se ha registrado correctamente");
						window.history.go(-1);
						</script>';
}
}
?>