<?php
include("../model/acciones.php");

if (isset($_POST['cliente'], $_POST['usuario'])) {
    $cliente = $_POST['cliente'];
    $usuario = $_POST['usuario'];
    $correo_usuario = new consul();
    $correo_us = $correo_usuario->GetCorreo($cliente, $usuario);
    echo json_encode($correo_us);
}

if (isset($_POST['cliente2'], $_POST['usuario_cliente'])) {
    $cliente2 = $_POST['cliente2'];
    $usuario_cliente = $_POST['usuario_cliente'];
    $folio = new consul();
    $fo = $folio->GetFolio($cliente2, $usuario_cliente);
    echo json_encode($fo);
}

if (isset($_POST['folio'])) {
    $folio = $_POST['folio'];
    $parte = new consul();
    $pa = $parte->GetNumeroDeParte($folio);
    echo json_encode($pa);
}

if (isset($_POST['folio3'])) {
    $folio3 = $_POST['folio3'];
    $instructivo = new consul();
    $inst = $instructivo->GetInstructivo($folio3);
    echo json_encode($inst);
}

if (isset($_POST['folio4'])) {
    $folio4 = $_POST['folio4'];
    $actividad = new consul();
    $act = $actividad->GetActividad($folio4);
    echo json_encode($act);
}

if (isset($_POST['parte'])) {
    $parte = $_POST['parte'];
    $parte_img = new consul();
    $p_i = $parte_img->GetParteImg($parte);
    echo json_encode($p_i);
}

if (isset($_POST['operador'], $_POST['contra'])) {
    session_start();

    #region
    //variables//
    $operador = $_POST['operador'];
    $contra = $_POST['contra'];
    //variables//
    #endregion

    $iniciar_sesion = new consul();
    $iniciar = $iniciar_sesion->LogueoColaborador($operador, $contra);
    foreach ($iniciar as $row) {
        $tipo = $row['tipo_usuario'];
    }

    if (sizeof($iniciar) > 0) {
        $_SESSION['login'] = true;
        $_SESSION['cuenta'] = $us;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (600); //tiempo de 600segundos por sesion

        if ($tipo == "Administrador") {

            $_SESSION['tipo_usuario'] = $tipo;

            
         
                    
            header("location: ../views/registro_avance/reg_avance_4.php?".http_build_query($args));
            
        } else if ($tipo == "Colaborador") {

            $_SESSION['tipo_usuario'] = $tipo;
     
            $operador2 = urlencode(rawurlencode($_POST['operador']));
            $cliente = urlencode(rawurlencode($_POST['cliente']));
            $usuario = urlencode(rawurlencode($_POST['usuario']));
            $correo = urlencode(rawurlencode($_POST['correo']));
            $folio = urlencode(rawurlencode($_POST['folio']));
            $numero_parte = urlencode(rawurlencode($_POST['numero_parte']));
            $actividad = urlencode(rawurlencode($_POST['actividad']));
            
header("location: ../views/registro_avance/reg_avance_4.php?operador=$operador2&cliente=$cliente&usuario=$usuario&correo=$correo&folio=$folio&numero_parte=$numero_parte&actividad=$actividad");

            // echo '<script type="text/javascript">
            // alert("Bienvenido '.$us.' ");
            // </script>';
        } else if ($tipo == "Inspector") {
            $_SESSION['tipo_usuario'] = $tipo;
            header("location: ../views/registro_avance/reg_avance_4.php");
            // echo '<script type="text/javascript">
            // alert("Bienvenido '.$us.' ");
            // </script>';
        }
    } else {
        echo '<script type="text/javascript">
            alert("Usuario y/o contraseña incorrectos");
            </script>';
    }
}
