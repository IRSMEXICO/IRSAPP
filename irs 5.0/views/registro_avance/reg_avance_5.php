<!-- PHP -->
    <?php
    include("../../model/sesiones.php");
    require_once("../../model/acciones.php");


if(isset($_POST['folio'],$_POST['cliente'],$_POST['usuario'],$_POST['numeros_parte']
    ,$_POST['actividad'],$_POST['turno'],$_POST['operadores'],$_POST['fecha'],$_POST['asistencia'],$_POST['correo'],$_POST['tipo'])
    &&(!empty($_POST['folio']))&&(!empty($_POST['cliente']))&&(!empty($_POST['usuario']))
    &&(!empty($_POST['numeros_parte']))&&(!empty($_POST['actividad']))&&(!empty($_POST['turno']))
    &&(!empty($_POST['operadores']))&&(!empty($_POST['fecha']))&&(!empty($_POST['asistencia']))&&(!empty($_POST['correo']))
    &&(!empty($_POST['tipo']))){

    $correo = $_POST['correo'];
    $tipo = $_POST['tipo'];

    $folio = $_POST['folio'];
    $cliente = $_POST['cliente'];
    $usuario = $_POST['usuario'];
    $numeros_parte = $_POST['numeros_parte'];
    $actividad = $_POST['actividad'];
    $turno = $_POST['turno'];
    $operadores = array($_POST['operadores']);
    $fecha = $_POST['fecha'];
    $asistencia = $_POST['asistencia'];
    $usuario_captura = $_POST['usuario_captura'];
    
    $reg_avance = new consul();
    $reg_folio = $reg_avance->Folio($folio);
    
    if($reg_folio == NULL){
        $pz_insp = "0";
        
        
    }elseif($reg_folio>0){
        foreach($reg_folio as $row){$pz_insp = $row['total_pz'];}
    }

    $piezas_contratadas = new consul();
    $pz_cont = $piezas_contratadas->GetPiezasContratadas($folio);

    if($pz_cont>0){
    foreach($pz_cont as $row){$pz_contratadas = $row['total_piezas'];}
    }else{
        $pz_contratadas = 0; 
    }

   

    }


    

    
    ?>

<!-- PHP -->

<!-- HTML -->
<html>

    <head>
        <!-- META -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Registro de Avance</title>
        <!-- META -->

        <!-- BOOTSTRAP -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--BOOTSTRAP-->

        <!-- JQUERY & FONT AWESOME -->
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script src='https://kit.fontawesome.com/a076d05399.js'></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
        <!-- JQUERY & FONT AWESOME -->
    
        <!-- STYLES -->
            <style> 
             h1,h2{
            font-size: 25px !important;
            }      

            label{
                font-weight: bold;
            }

            input{
                text-align: center !important;
            }


            </style>
        <!-- STYLES -->

  

    </head>

    <body onload="TotalDePiezas();">

      

        <div class="container">
            
            <!-- TITULO -->
                <div class="row" style="text-align: left !important; margin-top: 2% !important;">
                    <div class="col-md-12">
                        <h1>Registro de Avance</h1>
                    </div>
                </div>         
            <!-- TITULO -->         

            <!--LABEL-->
                <div class="row" style="text-align: center !important; margin-top: 1% !important;">
                    <div class="col md-12">
                        <label>Favor de Llenar los Datos</label>
                    </div>
                </div>
            <!--LABEL-->
            
            <!-- LABEL -->
                <div class="row" style="text-align: center !important; margin-top: 2% !important;">
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                        <label for="">Llenado por:</label>
                    </div>

                    <div class="col-md-3">
                    <input type="text" name="tipo" id="tipo" value="<?php echo $tipo; ?>" class="form-control" readonly>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            <!-- LABEL -->

            <form method="post">

            <input type="text" name="folio"  value="<?php echo $folio; ?>" hidden readonly>
            <input type="text" name="cliente"  value="<?php echo $cliente; ?>" hidden readonly>
            <input type="text" name="usuario" value="<?php echo $usuario; ?>" hidden readonly>
            <input type="text" name="numeros_parte"  value="<?php echo $numeros_parte; ?>" hidden readonly>
            <input type="text" name="numero_parte"  value="<?php echo $numeros_parte; ?>" hidden readonly>
            <input type="text" name="actividad"  value="<?php echo $actividad; ?>" hidden readonly>
            <input type="text" name="turno"  value="<?php echo $turno; ?>" hidden readonly>
            <?php print_r($operadores); ?>
            <?php foreach($operadores as $key => $valor) {?>
            <?php echo'<input type="text" name="operadores"  value="<'.$valor.'>" hidden readonly>'; ?>
            <?php } ?>
            <input type="text" name="operador"  value="<?php echo $usuario_captura; ?>" hidden readonly>
            <input type="text" name="fecha"  value="<?php echo $fecha; ?>" hidden readonly>
            <input type="text" name="asistencia"  value="<?php echo $asistencia; ?>" hidden readonly>
            <input type="text" name="tipo"  value="<?php echo $tipo; ?>" hidden readonly>

            <!-- PIEZAS CONTRATADAS -->
                <div class="row" id="os" style="text-align: center !important; margin-top: 1% !important;">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                <label for="">Total Piezas OS:</label>
                </div>
                <div class="col-md-2">
                    <input type="text" id="piezas_contratadas" readonly class="form-control" value="<?php echo $pz_contratadas;?>">
                </div>
                <div class="col-md-4"></div>
                </div>
            <!-- PIEZAS CONTRATADAS --> 
            
            <!-- PIEZAS INSPECCIONADAS -->
                <div class="row" id="inspeccionadas" style="text-align: center !important; margin-top: 1% !important;">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                <label for="">Piezas Inspeccionadas:</label>
                </div>
                <div class="col-md-2">
                    <input type="text" readonly class="form-control" value="<?php echo $pz_insp; ?>" name="pz_insp" id="pz_insp">
                </div>
                <div class="col-md-4"></div>
                </div>
            <!-- PIEZAS INSPECCIONADAS -->

            <!-- PIEZAS OK -->
                <div class="row" id="ok" style="text-align: center !important; margin-top: 1% !important;">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                <label for="">Piezas OK:</label>
                </div>
                <div class="col-md-2">
                    <input type="number" name="piezas_ok" id="piezas_ok" m value="0" min="0" class="form-control" onchange="TotalDePiezas();">
                </div>
                <div class="col-md-4"></div>
                </div>
            <!-- PIEZAS OK -->

            <!-- PIEZAS NO -->
                <div class="row" id="no" style="text-align: center !important; margin-top: 1% !important;">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                <label for="">Piezas NO OK:</label>
                </div>
                <div class="col-md-2">
                    <input type="number" name="piezas_no" id="piezas_no" m value="0" min="0" class="form-control" onchange="TotalDePiezas();">
                </div>
                <div class="col-md-4"></div>
                </div>
            <!-- PIEZAS NO -->

            <!-- PIEZAS RETRABAJADAS -->
                <div class="row" id="ret" style="text-align: center !important; margin-top: 1% !important;">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                <label for="">Piezas Retrabajas:</label>
                </div>
                <div class="col-md-2">
                    <input type="number" name="piezas_ret" id="piezas_ret" value="0" min="0" class="form-control" onchange="TotalDePiezas();">
                </div>
                <div class="col-md-4"></div>
                </div>
            <!-- PIEZAS RETRABAJADAS -->

            <!-- PIEZAS TOTAL -->
                <div class="row" id="total" style="text-align: center !important; margin-top: 1% !important;">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                <label for="">Total Piezas:</label>
                </div>
                <div class="col-md-2">
                    <input type="text" value="0" name="piezas_totales" id="piezas_totales" readonly class="form-control">
                </div>
                <div class="col-md-4"></div>
                </div>
            <!-- PIEZAS TOTAL -->

            <!-- SALDO-->
                <div class="row" id="saldo1" style="text-align: center !important; margin-top: 1% !important;">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                <label for="">Saldo:</label>
                </div>
                <div class="col-md-2">
                    <input type="text" readonly class="form-control" id="saldo" value="0">
                </div>
                <div class="col-md-4"></div>
                </div>
            <!-- SALDO-->

            <!-- EMAIL -->
            <div class="row" id="email" style="text-align: center !important; margin-top: 2% !important;">
                </div>
            <!-- EMAIL -->

            <!-- GUARDAR -->
                <div class="row" style="text-align: center !important; margin-top: 2% !important;">
                <div class="col-md-4">
                <button type="submit" class="btn-lg btn-danger" formaction="reg_avance_4.php" formmethod="get">Atras</button>
                </div>
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button type="submit" class="btn-lg btn-success" formaction="../../controller/registro_avances.php">Guardar</button>
                    </div>
                </div>
            <!-- GUARDAR -->

            </form>

            
          
        
        </div>
    
    </body>

    <!-- SCRIPTS -->

    


        <!--SCRIPT TOTAL  -->
            <script>
               
                    var pz_cont = document.getElementById("piezas_contratadas").value;
                    var pz_insp= document.getElementById("pz_insp").value;
                    var saldo =  parseInt(pz_cont)- parseInt(pz_insp);
                    document.getElementById("saldo").value = saldo;
               
                function TotalDePiezas() {
                    var total = document.getElementById("piezas_totales").value;
                    var pzok = document.getElementById("piezas_ok").value;
                    var pzno = document.getElementById("piezas_no").value;
                    var pzret = document.getElementById("piezas_ret").value;
                    var resultado = parseInt(pzok) + parseInt(pzno) + parseInt(pzret);
                    document.getElementById("piezas_totales").value = resultado;

                    if(pzok == 0 && pzno == 0 && pzret == 0){
                        alert("Es necesario enviar un email al cliente");
                        document.getElementById('email').innerHTML = 
                        "<div class='col-md-3'></div>"
                        +"<div class='col-md-2'><label>Email</label></div>"
                        +"<div class='col-md-4'><input type='text' name='correo' id='correo' value='<?php echo $correo; ?>' readonly class='form-control'/></div>"
                        +"<div class='col-md-3'></div>"
                        
                        +"<div class='col-md-3'></div>"
                        +"<div class='col-md-2'><label>Motivo</label></div>"
                        +"<div class='col-md-4'><select name='motivo' id='motivo' class='form-control'>"
                        +"<option value='Seleccionar Motivo'>SELECCIONAR MOTIVO</option>"
                        +"<option value='TIEMPO MUERTO'>TIEMPO MUERTO</option>"
                        +"<option value='FALTA DE EQUIPO'>FALTA DE EQUIPO</option>"
                        +"</select></div>"
                        +"<div class='col-md-3'></div>"

                        +"<div class='col-md-3'></div>"
                        +"<div class='col-md-2'><label>Observaciones</label></div>"
                        +"<div class='col-md-4'>"
                        +"<textarea name='observacion' id='observacion' cols='47' rows='5' class='form-control'></textarea>"
                        +"</div>"
                        +"<div class='col-md-3'></div>"
                        ;

                    }else{
                        document.getElementById('email').innerHTML = "";
                    }
                }
            </script>
        <!-- SCRIPT TOTAL -->

    <!-- SCRIPTS -->
</html>
<!-- HTML -->