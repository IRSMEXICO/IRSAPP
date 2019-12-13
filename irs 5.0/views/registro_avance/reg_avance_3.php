<!-- PHP -->
<?php
include("../../model/sesiones.php");
require_once("../../model/acciones.php");

if (isset($_POST['cliente'], $_POST['usuario'], $_POST['correo'], $_POST['folio'],
 $_POST['numeros_parte'], $_POST['actividad']) 
 && (!empty($_POST['cliente'])) 
 && (!empty($_POST['usuario'])) 
 && (!empty($_POST['correo'])) 
 && (!empty($_POST['folio'])) 
 && (!empty($_POST['numeros_parte'])) 
 && (!empty($_POST['actividad'])) ) {

    $cliente = $_POST['cliente'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $folio = $_POST['folio'];
    $num_parte = $_POST['numeros_parte'];
    $actividad = $_POST['actividad'];

    $colaboradores = new consul();
    $col = $colaboradores->GetColaboradores($folio);
   

    $tipo = new consul();
    $tip = $tipo->GetTipo($folio);
    foreach($tip as $row){$tipo = $row['id_contrato'];}

    $captura = new consul();
    $cap = $captura->GetCaptura($tipo); 

} else if (isset($_GET['cliente'], $_GET['usuario'], $_GET['correo'], $_GET['folio'],
            $_GET['numeros_parte'], $_GET['actividad']) 
            && (!empty($_GET['cliente'])) 
            && (!empty($_GET['usuario'])) 
            && (!empty($_GET['correo'])) 
            && (!empty($_GET['folio'])) 
            && (!empty($_GET['numeros_parte'])) 
            && (!empty($_GET['actividad'])) ) {

        
        $cliente = urldecode(rawurldecode($_GET['cliente']));
        $usuario = urldecode(rawurldecode($_GET['usuario']));
        $correo = urldecode(rawurldecode($_GET['correo']));
        $folio = urldecode(rawurldecode($_GET['folio']));
        $num_parte = urldecode(rawurldecode($_GET['numeros_parte']));
        $actividad = urldecode(rawurldecode($_GET['actividad']));

        $colaboradores = new consul();
        $col = $colaboradores->GetColaboradores($folio);
        

        $tipo = new consul();
        $tip = $tipo->GetTipo($folio);
        foreach($tip as $row){$tipo = $row['id_contrato'];}

        $captura = new consul();
        $cap = $captura->GetCaptura($tipo); 

        }

        else{
            $cliente = urlencode(rawurlencode($_POST['cliente']));
            echo '<script type="text/javascript">
            alert("Favor de llenar el formulario");
            window.location.href="reg_avance_2.php?cliente='.$cliente.' ";
            </script>';
        }  

?>
<!-- PHP -->

<!-- HTML -->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Avance</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--**BOOTSTRAP**-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <style>
        label {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 30px !important;
        }

        input {
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-size: 20px !important;
        }

        button {
            height: 50px !important;
            width: 250px !important;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.menuContainer').load('../inspector.php');
        });
    </script>

</head>



<body onload="startTime();">
    

    <div class="container">
        <!-- TITULO -->
        <div class="row" style="text-align: center; margin-top: 10%;">
            <div class="col-md-12">
                <h1>Registro de Avance</h1>
            </div>
        </div>
        <!-- TITULO -->
     
        <?php foreach($cap as $row){?>
      <input type="text" value="<?php echo $row['tipo_captura']; ?>" id="tipo" name="tipo">
        <?php } ?>

        <!-- HORA A REGISTRAR -->
        <div class="row" style="text-align: center; margin-top: 2%;">

            <div class="col-md-3"> </div>

            <div class="col-md-2">
                <label>Horario</label>
            </div>

            <div class="col-md-2">
               
            <input type="text" name="hora_inicio" id="hora_inicio" value="" class="form-control" readonly>
               
            </div>

            <div class="col-md-2">
            
            <input type="text" name="hora_final" id="hora_final" value="" class="form-control" readonly>
            
            </div>

            <div class="col-md-3"> </div>



        </div>
        <!-- HORA A REGISTRAR -->


        <form method="POST">

            <input type="text" name="cliente" id="cliente" value="<?php echo $cliente; ?>" hidden readonly>
            <input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>" hidden readonly>
            <input type="text" name="correo" id="correo" value="<?php echo $correo; ?>" hidden readonly>
            <input type="text" name="folio" id="folio" value="<?php echo $folio; ?>" hidden readonly>
            <input type="text" name="numero_parte" id="numero_parte" value="<?php echo $num_parte; ?>" hidden readonly>
            <input type="text" name="actividad" id="actividad" value="<?php echo $actividad; ?>" hidden readonly>
            <input type="text" name="tipo" id="tipo" value="<?php echo $row['tipo_captura']; ?>" hidden readonly>
            <!-- OPERADOR -->
            <div class="row" style="text-align: center; margin-top: 1%;">

                <div class="col-md-3"></div>

                <div class="col-md-2">
                    <label>Operador</label>
                </div>

                <div class="col-md-4">
                    <select name="operador" id="operador" class="form-control">
                        <option value="">Seleccionar Operador:</option>
                        <?php foreach ($col as $row) { ?>
                            <option value="<?php echo $row['id_empleado']; ?>"><?php echo $row['id_empleado']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-3"></div>

            </div>
            <!-- OPERADOR -->

            <!-- CLAVE DE ACCESO -->
            <div class="row" style="text-align: center; margin-top: 2%;">
                <div class="col-md-4"></div>

                <div class="col-md-1">
                    <label for="">Clave </label>
                </div>

                <div class="col-md-3">
                    <input type="password" name="contra" id="contra" class="form-control">
                </div>

                <div class="col-md-4"></div>

            </div>
            <!-- CLAVE DE ACCESO -->


            <!-- BUTTON SIGUIENTE -->
            <div class="row" style="text-align: center; margin-top: 5%;">
                <div class="col-md-4">
                <button type="submit" formaction="reg_avance_2.php?cliente=<?php echo $cliente ?>"  class="btn btn-danger">Atras</button>
                </div>
                <div class="col-md-4">
                
                </div>
                <div class="col-md-4">
                <button class="btn btn-success" formaction="../../controller/registro_avances.php" id="btn-sig" name="btn-sig">Siguiente</button>
                </div>
            </div>
            <!-- BUTTON SIGUIENTE -->
        </form>

    </div>

     <!-- SCRIPT -->
     <script>
        function startTime() {
            var today = new Date();
            var hr = today.getHours();
            var min = today.getMinutes();
            var sec = today.getSeconds();
            var fecha1 = new Date(2000, 1, 1, 23, 0, 0, 0);
            var fecha2 = new Date(2000, 1, 1, 22, 0, 0, 0);
            var diferenciaHoras = fecha1.getHours() - fecha2.getHours();
            
            //Add a zero in front of numbers<10
            min = checkTime(min);
            sec = checkTime(sec);
            // document.getElementById("hora_inicio").value = hr + " : " + min + " : " + sec;
            // document.getElementById("hora_final").value = hora_actual + " : " + min + " : " + sec;

            if (hr >= "6" && hr < "18") {
                var turno = document.getElementById("turno");
                // turno.value = "Matutino";
            } else if (hr >= "18" && hr < "6") {
                var turno = document.getElementById("turno");
                // turno.value = "Nocturno";
            }

            if(min<="15"){
                document.getElementById("hora_inicio").value = hr - diferenciaHoras + ":" + "00" +":"+ "00";
                document.getElementById("hora_final").value = hr + ":" + "00" +":"+ "00";
            }else if(min>"15"){
                document.getElementById("hora_inicio").value = hr + ":" + "00" +":"+ "00";
                document.getElementById("hora_final").value = hr + diferenciaHoras + ":" + "00" +":"+ "00";
            }

            var time = setTimeout(function() {
                startTime()
            }, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    </script>
</body>
                        }
</html>
<!-- HTML -->