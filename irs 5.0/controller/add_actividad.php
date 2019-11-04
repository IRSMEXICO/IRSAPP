<?php
//add actividades
include ("../model/acciones.php");
//INSERT INTO-------------------INSERTAR---------------------------------//
if(isset($_POST['add_actividad'])){
    $act=$_POST["tipo_actividad"];
    $rob=new consul();
    $iniciar=$rob->ext_actividad($act);
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
elseif(isset($_POST['add_rol'])){
    $rol=$_POST['tipo_rol'];
    $cat_rol=new consul();
    $ins_rol=$cat_rol->ins_rol($rol);
}
//UPDATE -------------------MODIFICAR---------------------------------//
if(isset($_POST['save_act'])){
$id=$_POST['id'];
$tipo_actividad=$_POST['tipo_actividad'];
$tipo_act=new consul();
$act_mod=$tipo_act->cat_mod_actividades($tipo_actividad,$id);  
} 
if(isset($_POST['save_rol'])){
    $id=$_POST['id'];
    $tipo_rol=$_POST['tipo_rol'];
    $tipo_roles=new consul();
    $act_rol=$tipo_roles->cat_mod_rol($tipo_rol,$id);
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
//----------colaboradores---------//
if(isset($_POST['save_colaboradores'])){
    $id_col=$_POST['Id_usuario'];
    $nombre=$_POST['tipo_usuario'];
    $email=$_POST['email'];
    $cuenta=$_POST['cuenta'];
    $contra=$_POST['contra'];
    $rol=$_POST['id_rol'];
    $col=new consul();
    $cols=$col->cat_mod_colaboradores($id_col,$nombre,$email,$cuenta,$contra,$rol);
    }
    if(isset($_POST['add_colaborador'])){
        $nombre=$_POST['tipo_usuario'];
        $email=$_POST['email'];
        $cuenta=$_POST['cuenta'];
        $contra=$_POST['contra'];
        $rol=$_POST['id_rol'];
        $col=new consul();
        $cols=$col->cat_add_colaboradores($nombre,$email,$cuenta,$contra,$rol);
        }
//----------clientes---------//

if(isset($_POST['save_cliente'])){
    $id= $_POST['id_cliente'];
    $cliente=$_POST['cliente'];
    $foto= $_FILES[ 'foto' ][ 'tmp_name' ];
    $ruta_img="../../content/img/cliente/IMG_$cliente.jpg";
    $name_img="IMG_$cliente.jpg";
    $ruta="../content/img/cliente/";
    move_uploaded_file($foto, "$ruta$name_img");
    $add_cliente=new consul();
    $add=$add_cliente->cat_mod_cliente($id,$ruta_img,$cliente);
    }
/*if(isset($_POST['save_cliente'])){
    $id= $_POST['id_cliente'];
    $foto_actual= $_POST['foto_actual'];
    $foto= $_FILES[ 'file_input' ][ 'name' ];
    $nombre=$_POST['cliente'];
    $col=new consul();
if ($foto == 0){
    
    $cols=$col->cat_mod_cliente1($id,$nombre,$foto_actual);
    
}
else{
    $ruta_archivos = '../content/img/cliente';
    move_uploaded_file( $_FILES[ 'file_input' ][ 'tmp_name' ], $ruta_archivos.$_FILES[ 'file_input' ][ 'name' ]);
 
    $cols=$col->cat_mod_cliente($id,$nombre,$foto);
}
    
    }*/

if(isset($_POST['add_cliente'])){
$cliente=$_POST['cliente'];
$foto= $_FILES[ 'foto' ][ 'tmp_name' ];
$ruta_img="../../content/img/cliente/IMG_$cliente.jpg";
$name_img="IMG_$cliente.jpg";
$ruta="../content/img/cliente/";
move_uploaded_file($foto, "$ruta$name_img");
$add_cliente=new consul();
$add=$add_cliente->cat_add_cliente($ruta_img,$cliente);
}
if(isset($_POST['add_area'])){
    $id_cliente=$_POST['id_cliente'];
    $area=$_POST['area'];
    $reg_area= new consul();
    $reg=$reg_area->cat_add_cliente_area($area,$id_cliente);
}

if(isset($_POST['mod_area'])){
    $id_cliente=$_POST['id_cliente'];
    $id_area=$_POST['id_area'];
    $area=$_POST['area'];
    $mod=new consul();
    $m=$mod->mod_cat_cliente_area($id_cliente,$id_area,$area);
}
//----------piezas--------//
if(isset($_POST['add_pieza'])){
    $cliente=$_POST['id_cliente'];
    $piezas=$_POST['piezas'];
    $foto= $_FILES[ 'foto' ][ 'tmp_name' ];
    $ruta_img="../../content/img/piezas/IMG_$piezas.jpg";
    $name_img="IMG_$piezas.jpg";
    $ruta="../content/img/piezas/";
    move_uploaded_file( $_FILES[ 'foto' ][ 'tmp_name' ], $ruta.$name_img);
    $add_cliente=new consul();
    $add=$add_cliente->cat_add_cliente_pieza($ruta_img,$cliente,$piezas);
    }
/*----------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------*/
if(isset($_POST['save_piezas'])){
    $id_pieza = $_POST['id_pieza'];
    $cliente=$_POST['id_cliente'];
    $piezas=$_POST['piezas'];
    $foto= $_FILES[ 'foto' ][ 'tmp_name' ];
    $ruta_img="../../content/img/piezas/IMG_$piezas.jpg";
    $name_img="IMG_$piezas.jpg";
    $ruta="../content/img/piezas/";
    move_uploaded_file( $foto, "$ruta$name_img");
    $add_cliente=new consul();
    $add=$add_cliente->cat_mod_cliente_pieza($cliente,$id_pieza,$piezas,$ruta_img);
    } 
/*if(isset($_POST['save_piezas'])){
        $id_cliente= $_POST['id_cliente'];
        $id_pieza=$_POST['id_piezas'];
        $piezas=$_POST['piezas'];
        $foto_actual= $_POST['foto_actual'];
        $foto= $_FILES[ 'file_input' ][ 'name' ];
        $col=new consul();
    if ($foto==NULL){
        $cols=$col->cat_mod_cliente_pieza($id_cliente,$id_pieza,$piezas,$foto_actual);
    }
    else{
        $ruta_fotos = '../../content/img/piezas/'.$foto;
        $ruta_archivos = '../content/img/piezas/';
        move_uploaded_file( $_FILES[ 'file_input' ][ 'tmp_name' ], $ruta_archivos.$_FILES[ 'file_input' ][ 'name' ]);
        $cols=$col->mod_cliente_pieza($id_cliente,$ruta_fotos,$id_pieza,$piezas);
    }
        
        }
/*----------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------*/
    //--------------CLIENTE USUARIO---------------------//
    if(isset($_POST['add_cliente_usuario'])){
        $usuario=$_POST['usuario'];
        $id_cliente=$_POST['cliente'];
        $email=$_POST['email'];
        $cuenta=$_POST['cuenta'];
        $contra=$_POST['contra'];
        $ins = new consul();
        $insertar = $ins->insertar($usuario,$id_cliente,$email,$cuenta,$contra);

    }
    if(isset($_POST['save_usuario_cliente'])){
        $id=$_POST['id'];
        $usuario=$_POST['usuario'];
        $id_cliente=$_POST['cliente'];
        $email=$_POST['email'];
        $cuenta=$_POST['cuenta'];
        $contra=$_POST['contra'];
        $mod = new consul();
        $modificar= $mod->modificar($usuario,$id_cliente,$email,$cuenta,$contra,$id);
    }
?>