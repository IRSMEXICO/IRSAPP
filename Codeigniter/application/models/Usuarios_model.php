<?php defined('BASEPATH') OR exit ('No direct script acces allowed');
/*AMERICO CARDENAS ROCHA */
/*MODELO_USUARIO*/
class Usuarios_model extends CI_Model{

public function login($username,$password){
    $this->db->where("correo",$username);
    $this->db->where("contrasena",$password);

    $resultados = $this->db->get("usuarios");
    if($resultados->num_rows() > 0){
        return $resultados->row();
        }
    
    else{
        return false;
        }
    }
}

    
