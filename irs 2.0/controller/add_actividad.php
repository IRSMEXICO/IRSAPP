<?php
//add actividades
include ("../model/acciones.php");
//INSERT INTO-------------------INSERTAR---------------------------------//
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
//UPDATE -------------------MODIFICAR---------------------------------//
if(isset($_POST['save_act'])){
$id=$_POST['id'];
$tipo_actividad=$_POST['tipo_actividad'];
$tipo_act=new consul();
$act_mod=$tipo_act->cat_mod_actividades($tipo_actividad,$id);  
} 
if(isset($_POST['save_captura'])){
    $id=$_POST['id'];
    $tipo_captura=$_POST['tipo_captura'];
    $tipo_cap=new consul();
    $act_cap=$tipo_cap->cat_mod_captura($tipo_captura,$id);  
    } 
if(isset($_POST['save_contrato'])){
    $id=$_POST['id'];
    $tipo_contrato=$_POST['tipo_contrato'];
    $tipo_con=new consul();
    $act_con=$tipo_con->cat_mod_contrato($tipo_contrato,$id);  
    } 

    if(isset($_POST['save_moneda'])){
        $id=$_POST['id'];
        $tipo_moneda=$_POST['tipo_moneda'];
        $tipo_mon=new consul();
        $act_mon=$tipo_mon->cat_mod_moneda($tipo_moneda,$id);  
        } 

        if(isset($_POST['save_motivo_tm'])){
            $id=$_POST['id'];
            $tipo_motivo_tm=$_POST['tipo_motivo_tm'];
            $tipo_mot=new consul();
            $act_mot=$tipo_mot->cat_mod_motivo_tm($tipo_motivo_tm,$id);  
            } 
   if(isset($_POST['save_rate'])){
     $id=$_POST['id'];
    $tipo_rate=$_POST['tipo_rate'];
    $tipo_rat=new consul();
    $act_rate=$tipo_rat->cat_mod_rate($tipo_rate,$id);  
     }
     if(isset($_POST['save_registro'])){
        $id=$_POST['id'];
       $tipo_reg=$_POST['tipo_registro'];
       $tipo_registro=new consul();
       $act_regis=$tipo_registro->cat_mod_registro($tipo_reg,$id);  
        }
        if(isset($_POST['save_turno'])){
            $id=$_POST['id'];
           $tipo_turno=$_POST['tipo_turno'];
           $tipo_tur=new consul();
           $act_turn=$tipo_tur->cat_mod_turno($tipo_turno,$id);  
            }
?>