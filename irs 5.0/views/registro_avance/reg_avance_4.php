<!-- PHP -->
<?php
        include("../../model/sesiones.php");
        require_once("../../model/acciones.php");

        $operador = urldecode(rawurldecode($_GET['operador']));
        $cliente = urldecode(rawurldecode($_GET['cliente']));
        $usuario = urldecode(rawurldecode($_GET['usuario']));
        $correo = urldecode(rawurldecode($_GET['correo']));
        $folio2 = urldecode(rawurldecode($_GET['folio']));
        $numero_parte = urldecode(rawurldecode($_GET['numero_parte']));
        $actividad = urldecode(rawurldecode($_GET['actividad']));

        $colabordores_orden = new consul();
        $col_orden = $colabordores_orden->GetColaboradoresByFolio($folio2);
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
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <style>
        input[type=text] {
            text-align: center !important;
        }

        table{
            text-align: center !important;
            font-size: 15px;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.menuContainer').load('../inspector.php');
        });
    </script>

</head>

<body onload="startTime();">

    <!-- MENU -->
    <div class="menuContainer"></div>
    <!-- MENU -->

    <div class="container">


        
        <!-- TITULO -->
        <div class="row" style="text-align: center; margin-top: 5%;">
            <div class="col-md-12">
                <h1>Registro de Avance</h1>
            </div>
        </div>
        <!-- TITULO -->


        <!-- USUARIO -->
        <div class="row" style="text-align: center; margin-top: 3%;">
            <div class="col-md-4"></div>
            <div class="col-md-1">
                <h2>¡Hola!</h2>
            </div>

            <div class="col-md-3">
                <input type="text" value="<?php echo $operador; ?>" name="usuario" id="usuario" readonly class="form-control">
            </div>

            <div class="col-md-4"></div>


        </div>
        <!-- USUARIO -->

        <!-- TIUTLO -->
        <div class="row" style="text-align: center; margin-top: 2%;">
            <div class="col-md-12">
                <label> Favor de seleccionar a los compañeros que participaran en la inspección</label>
            </div>
        </div>
        <!-- TITULO -->


        <!-- TURNO -->
        <div class="row" style="text-align: center; margin-top: 2%;">

            <div class="col-md-12">
                <h4>Turno</h4>
            </div>

        </div>

        <div class="row" style="text-align: center; margin-top: 2%;">

            <div class="col-md-4"></div>
            <div class="col-md-4">

                <input type="text" name="turno" id="turno" value="" class="form-control" readonly>

            </div>
            <div class="col-md-4"></div>

        </div>

        <!-- TURNO -->

        <!-- HORA A REGISTRAR -->
        <div class="row" style="text-align: center; margin-top: 4%;">

            <!-- <div class="col-md-4"> </div> -->

            <div class="col-md-4"></div>

            <div class="col-md-1">
                <h4>Horario</h4>
            </div>

            <div class="col-md-2">

                <input type="text" name="hora_inicio" id="hora_inicio" value="" class="form-control" readonly>

            </div>

            <div class="col-md-2">

                <input type="text" name="hora_final" id="hora_final" value="" class="form-control" readonly>

            </div>

            <div class="col-md-4"></div>

            <!-- <div class="col-md-3"> </div> -->



        </div>
        <!-- HORA A REGISTRAR -->

        <!-- TABLA COLABORADORES -->
        <div class="row" style="text-align: center; margin-top: 4%;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <table class="table table-responive table-dark table-hover">
        <thead>
            <th scope="col">Colaborador</th>
            <th scope="col">Asistencia</th>
        </thead>

        <?php foreach($col_orden as $row) {?>
            <td><?php echo $row['id_empleado'];?></td>
            <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Si" data-off="No"></td>
        <?php } ?>
        </table>
        </div>
        <div class="col-md-4"></div>
        </div>
        <!-- TABLA COLABORADORES -->
        
        <!-- BOTON -->
        <div class="row" style="text-align: center; margin-top: 2%;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button type="submit" class="btn-success btn-lg">Siguiente</button>
        </div>
            <div class="col-md-4"></div>
        </div>
        <!-- BOTON -->

    </div>

    <!-- SCRIPT -->
    <script>
        function startTime() {
            var today = new Date();
            var hora_actual = today.getHours();
            var fecha1 = new Date(2000, 1, 1, 23, 0, 0, 0);
            var fecha2 = new Date(2000, 1, 1, 22, 0, 0, 0);
            var diferenciaHoras = fecha1.getHours() - fecha2.getHours();
            var hr = today.getHours() - diferenciaHoras;
            var min = today.getMinutes();
            var sec = today.getSeconds();
            //Add a zero in front of numbers<10
            min = checkTime(min);
            sec = checkTime(sec);
            document.getElementById("hora_inicio").value = hr + " : " + min + " : " + sec;
            document.getElementById("hora_final").value = hora_actual + " : " + min + " : " + sec;

            if (hora_actual >= "6" && hora_actual < "18") {
                var turno = document.getElementById("turno");
                turno.value = "Matutino";
            } else if (hora_actual >= "18" || hora_actual < "6") {
                var turno = document.getElementById("turno");
                turno.value = "Nocturno";
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

</html>