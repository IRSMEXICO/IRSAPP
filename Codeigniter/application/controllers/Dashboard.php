<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/*AMERICO CARDENAS ROCHA */
/*CONTROLADOR_LOGIN*/

class Dashboard extends CI_Controller{

    
    public function index(){
        $this->load->view("menuadmin");
    }
}
