<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/*AMERICO CARDENAS ROCHA */
/*CONTROLADOR_LOGIN*/

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function login(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $res = $this->Usuarios_model->login($username,$password);

        if(!$res){
            redirect(base_url());
        }
        else{
            $data = array(
                'id' => $res->ID,
                'nombre' => $res->NOMBRE,
                'rol' => $res->ROL,
                'login' => TRUE
            );
            $this->session->set_userdata($data);
            redirect(base_url('index.php/dashboard/index'));
        }
    }

  
}
