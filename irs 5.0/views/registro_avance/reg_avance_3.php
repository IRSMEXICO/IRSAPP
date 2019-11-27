<!-- PHP -->
<?php
include("../../model/sesiones.php");
require_once("../../model/acciones.php");

if (isset($_POST['cliente'], $_POST['usuario'], $_POST['correo'], $_POST['folio'],
$_POST['numeros_parte'], $_POST['actividad'])) {
    $cliente = $_POST['cliente'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $folio = $_POST['folio'];
    $num_parte = $_POST['numeros_parte'];
    $actividad = $_POST['actividad'];

    $colaboradores = new consul();
    $col = $colaboradores->GetColaboradores($folio);
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
            height: 80px !important;
            width: 250px !important;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.menuContainer').load('../inspector.php');
        });
    </script>

</head>



<body onload="mueveReloj()">
    <div class="menuContainer"></div>

    <div class="container">
        <!-- TITULO -->
        <div class="row" style="text-align: center; margin-top: 10%;">
            <div class="col-md-12">
                <h1>Registro de Avance</h1>
            </div>
        </div>
        <!-- TITULO -->

        <!-- HORA A REGISTRAR -->
        <div class="row" style="text-align: center; margin-top: 2%;">

            <div class="col-md-3"> </div>

            <div class="col-md-2">
                <label>Horario</label>
            </div>

            <div class="col-md-2">
                <form name="form_reloj">
                    <input type="text" name="reloj" id="HORA_INICIO" value="" class="form-control" readonly>
                </form>
            </div>

            <div class="col-md-2">
                <form name="form_reloj_final">
                    <input type="text" name="HORA_FIN" id="HORA_FIN" value="" class="form-control" readonly>
                </form>
            </div>

            <div class="col-md-3"> </div>



        </div>
        <!-- HORA A REGISTRAR -->

        <!-- SCRIPT TIEMPO -->
        <script>
            function mueveReloj() {

                momentoActual = new Date()
                hora = momentoActual.getHours() - 1
                minuto = momentoActual.getMinutes()
                segundo = momentoActual.getSeconds()

                str_segundo = new String(segundo)
                if (str_segundo.length == 1)
                    segundo = "0" + segundo

                str_minuto = new String(minuto)
                if (str_minuto.length == 1)
                    minuto = "0" + minuto

                str_hora = new String(hora)
                if (str_hora.length == 1)
                    hora = "0" + hora

                horaImprimible = hora + " : " + minuto + " : " + segundo

                document.form_reloj.reloj.value = horaImprimible

                hora_final = momentoActual.getHours()
                horaImprimibleFinal = hora_final + " : " + minuto + " : " + segundo
                document.form_reloj_final.HORA_FIN.value = horaImprimibleFinal

                setTimeout("mueveReloj()", 1000)
            }

        </script>
        <!-- SCRIPT TIEMPO -->

        <form method="POST" action="../../controller/registro_avances.php">

            <input type="text" name="cliente" id="cliente" value="<?php echo $cliente; ?>" hidden readonly>
            <input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>" hidden readonly>
            <input type="text" name="correo" id="correo" value="<?php echo $correo; ?>" hidden readonly>
            <input type="text" name="folio" id="folio" value="<?php echo $folio; ?>" hidden readonly>
            <input type="text" name="numero_parte" id="numero_parte" value="<?php echo $num_parte; ?>" hidden readonly>
            <input type="text" name="actividad" id="actividad" value="<?php echo $actividad; ?>" hidden readonly>

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
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-success" id="btn-sig" name="btn-sig">Siguiente</button>
                </div>
                <div class="col-md-4"></div>
            </div>
            <!-- BUTTON SIGUIENTE -->
        </form>

    </div>

</body>
                        }
</html>
<!-- HTML -->