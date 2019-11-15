<?php 
include ("../../model/acciones.php");
if(isset($_POST['cliente'])){
$cliente = $_POST['cliente'];
$usuario_cliente=new consul();
$us_cli=$usuario_cliente->GetUsuariosDelCliente($cliente);
echo json_encode($us_cli);
}

if(isset($_POST['usuario_cliente'])){
    $usuario_cliente = $_POST['usuario_cliente'];
    $numero_parte=new consul();
    $num_part=$numero_parte->GetParteDelUsuario($usuario_cliente);
    echo json_encode($num_part);
    }

    if(isset($_POST['numero_parte'],$_POST['usuario'])){
        $numero_parte = $_POST['numero_parte'];
        $usuario = $_POST['usuario'];
        $actividad=new consul();
        $act=$actividad->GetActividad($numero_parte,$usuario);
        echo json_encode($act);
        }
    
        if(isset($_POST['numero_parte2'],$_POST['usuario2'])){
            $numero_parte2 = $_POST['numero_parte2'];
            $usuario2 = $_POST['usuario2'];
            $area=new consul();
            $ar=$area->GetArea($numero_parte2,$usuario2);
            echo json_encode($ar);
            }

            if(isset($_POST['numero_parte3'])){
                $numero_parte3 = $_POST['numero_parte3'];
                $imagen=new consul();
                $img=$imagen->GetImagen($numero_parte3);
                
                echo json_encode($img);
                }
?>