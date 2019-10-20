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

}
    ?>