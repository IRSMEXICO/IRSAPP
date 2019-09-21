<?php
//add actividades
include ("../model/acciones.php");

if(isset($_POST['add_actividad'])){
    $act=$_POST["tipo_actividad"];
    $cod_act=$_POST["codigo_actividad"];
    $rob=new consul();
    $iniciar=$rob->ext_actividad($act,$cod_act);
}
//add captura
elseif(isset($_POST['add_captura'])){
    $capt=$_POST["tipo_captura"];
    $capt_con=new consul();
    $ins_cap=$capt_con->ins_cap($capt);
}
//add contrato
elseif(isset($_POST['add_contrato'])){
    $cont=$_POST["tipo_contrato"];
    $cat_con=new consul();
    $ins_cont=$cat_con->ins_cont($cont);
    }
//add moneda
elseif(isset($_POST['add_moneda'])){
    $moneda=$_POST["tipo_moneda"];
    $cat_moneda=new consul();
    $ins_moneda=$cat_moneda->ins_moneda($moneda);
    }
//add motivo tm
elseif(isset($_POST['add_motivo_tm'])){
    $motivo_tm=$_POST["tipo_motivo_tm"];
    $cat_motivo_tm=new consul();
    $ins_motivo_tm=$cat_motivo_tm->ins_motivo_tm($motivo_tm);
    }
elseif(isset($_POST['add_rate'])){
    $rate=$_POST["tipo_rate"];
    $cat_rate=new consul();
    $ins_rate=$cat_rate->ins_rate($rate);
    }
elseif(isset($_POST['add_tregistro'])){
    $tregistro=$_POST["tipo_tregistro"];
    $cat_tregistro=new consul();
    $ins_tregistro=$cat_tregistro->ins_tregistro($tregistro);    
}
elseif(isset($_POST['add_turno'])){
    $turno=$_POST["tipo_turno"];
    $cat_turno=new consul();
    $ins_turno=$cat_turno->ins_turno($turno);    
}
?>