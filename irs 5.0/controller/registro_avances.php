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

if (isset($_POST['folio'], $_POST['us_irs'])) {
    $folio = $_POST['folio'];
    $us_irs = $_POST['us_irs'];
    $parte = new consul();
    $pa = $parte->GetNumeroDeParte($folio,$us_irs);
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
        $tipo = $row['id_rol'];
    }

    if (sizeof($iniciar) > 0) {
        $_SESSION['login'] = true;
        $_SESSION['cuenta'] = $us;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (600); //tiempo de 600segundos por sesion

        if ($tipo == "Administrador") {

            $_SESSION['tipo_usuario'] = $tipo;

            
         
                    
            header("location: ../views/registro_avance/reg_avance_4.php?".http_build_query($args));
            
        } else if ($tipo == "10") {

            $_SESSION['tipo_usuario'] = $tipo;
     
            $operador2 = urlencode(rawurlencode($_POST['operador']));
            $cliente = urlencode(rawurlencode($_POST['cliente']));
            $usuario = urlencode(rawurlencode($_POST['usuario']));
            $correo = urlencode(rawurlencode($_POST['correo']));
            $folio = urlencode(rawurlencode($_POST['folio']));
            $numero_parte = urlencode(rawurlencode($_POST['numero_parte']));
            $actividad = urlencode(rawurlencode($_POST['actividad']));
            $tipo = urlencode(rawurlencode($_POST['tipo']));
            
            header("location: ../views/registro_avance/reg_avance_4.php?operador=$operador2&cliente=$cliente&usuario=$usuario&correo=$correo&folio=$folio&numero_parte=$numero_parte&actividad=$actividad&tipo=$tipo");

         
        } else if ($tipo == "Inspector") {
            $_SESSION['tipo_usuario'] = $tipo;
            header("location: ../views/registro_avance/reg_avance_4.php");
            
        }
    } else {
            
            $cliente = urlencode(rawurlencode($_POST['cliente']));
            $usuario = urlencode(rawurlencode($_POST['usuario']));
            $correo = urlencode(rawurlencode($_POST['correo']));
            $folio = urlencode(rawurlencode($_POST['folio']));
            $numero_parte = urlencode(rawurlencode($_POST['numero_parte']));
            $actividad = urlencode(rawurlencode($_POST['actividad']));
            echo '<script type="text/javascript">
            alert("Usuario y/o contraseña incorrectos");    
            window.location.href="../views/registro_avance/reg_avance_3.php?cliente='.$cliente.'&usuario='.$usuario.'&correo='.$correo.'&folio='.$folio.'&numeros_parte='.$numero_parte.'&actividad='.$actividad.'";
            </script>';

           
    }
}

if(isset($_POST['folio'],$_POST['cliente'],$_POST['usuario'],$_POST['numeros_parte']
,$_POST['actividad'],$_POST['turno'],$_POST['operadores'],$_POST['fecha'],$_POST['asistencia']
,$_POST['piezas_ok'],$_POST['piezas_no'],$_POST['piezas_ret'],$_POST['piezas_totales'])
){

   

$folio = $_POST['folio'];
$cliente = $_POST['cliente'];
$usuario = $_POST['usuario'];
$numeros_parte = $_POST['numeros_parte'];
$actividad = $_POST['actividad'];
$turno = $_POST['turno'];
$operadores = $_POST['operadores'];
$fecha = $_POST['fecha'];
$asistencia = $_POST['asistencia'];
$pzok = $_POST['piezas_ok'];
$pzmal = $_POST['piezas_no'];
$pzret = $_POST['piezas_ret'];
$totalpz = $_POST['piezas_totales'];
$pz_insp = $_POST['pz_insp'];


$reg_avance = new consul();
$reg_folio = $reg_avance->Folio($folio);

if($reg_folio>0&&$pzok==0 && $pzret==0 && $pzmal ==0){

    $correo = $_POST['correo'];
    $motivo = $_POST['motivo'];
    $observacion = $_POST['observacion'];

    $enviar_correo = new consul();
    $envio = $enviar_correo->CorreoCliente($correo,$motivo,$observacion);
    
}elseif($reg_folio == NULL){
    $push_data = new consul();
    $data = $push_data->SetData($folio,$cliente,$usuario,$numeros_parte,$actividad,$turno,$operadores,$fecha,$asistencia,$pzok,$pzmal,$pzret,$totalpz);
    

}elseif($reg_folio>0&&!empty($pzok)&&!empty($pzmal)&&!empty($pzret)){
    $update_data = new consul();
    foreach($reg_folio as $row){$total_pz1 = $row['total_pz'];$pzok1 = $row['pzok'];$pzmal1= $row['pzmal'];$pzret1= $row['pzret'];}
    $total = $total_pz1 + $totalpz;
    $pzok_total = $pzok1 + $pzok;
    $pzmal_total = $pzmal1 + $pzmal;
    $pzret_total = $pzret1 + $pzret;
    $data = $update_data->UpdateData($folio,$turno,$operadores,$fecha,$asistencia,$pzok_total,$pzmal_total,$pzret_total,$total);
}



}
