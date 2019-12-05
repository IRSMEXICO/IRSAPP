<?php 
include ("../../model/orden_servicio.php");

if(isset($_POST['usuarios'])){
        $usuario = $_POST['usuarios'];
        $usuario_email=new consul();
        $us_em=$usuario_email->GetCorreoDelUsuario($usuario);
        echo json_encode($us_em);
        }

        if(isset($_POST['supervisor'])){
            $supervisor = $_POST['supervisor'];
            $superv_email=new consul();
            $su_em=$superv_email->GetCorreoDelSuperv($supervisor);
            echo json_encode($su_em);
            }

            if(isset($_POST['num_parte'])){
                $pieza = $_POST['num_parte'];
                $numero_pieza=new consul();
                $num_pz=$numero_pieza->GetImagenDePieza($pieza);
                echo json_encode($num_pz);
                }

?>
