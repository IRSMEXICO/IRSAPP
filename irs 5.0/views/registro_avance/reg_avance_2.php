<?php
include("../../model/sesiones.php");
require_once("../../model/acciones.php");

$cliente = $_POST['btn-cliente'];

$get_usuarios_clientes = new consul();
$usuarios_clientes = $get_usuarios_clientes->GetUsuariosClientes($cliente);

?>

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
        button {
            width: 150px !important;
        }

        .img {
            height: 150px !important;
            width: 300px !important;
            border: 1px solid black !important;
        }

        label {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
        }

        input {
            text-align: center;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.menuContainer').load('../inspector.php');
        });
    </script>

</head>

<body>
    <div class="menuContainer"></div>

    <div class="container">

        <form method="POST">

            <!-- TITULO -->
            <div class="row" style="text-align: center; margin-top: 2%;">
                <div class="col-md-12">
                    <h1>Registro de Avance</h1>
                </div>
            </div>
            <!-- TITULO -->

            <!-- CLIENTE -->
            <div class="row" style="text-align: center; margin-top: 2%;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <label>Cliente</label>
                    <input type="text" name="cliente" id="cliente" value="<?php echo $cliente ?>" readonly class="form-control">
                </div>
                <div class="col-md-4"></div>
            </div>
            <!-- CLIENTE -->

            <!-- USUARIO -->
            <div class="row" style="text-align: center; margin-top: 2%;">

                <!-- SELECT USUARIO -->
                <div class="col-md-6">
                    <label>Usuario: </label>
                    <select name="usuario" id="usuario" class="form-control">
                        <option value="">Seleccionar Usuario:</option>
                        <?php foreach ($usuarios_clientes as $row) { ?>
                            <option value="<?php echo $row['id_usuario']; ?>"><?php echo $row['id_usuario']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <!-- SELECT USUARIO -->

                <!-- INPUT CORREO -->
                <div class="col-md-6">
                    <label>Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control" readonly>
                </div>
                <!-- INPUT CORREO -->

            </div>
            <!-- USUARIO -->

            <!-- FOLIO -->
            <div class="row" style="text-align: center; margin-top: 3%;">
                <div class="col-md-4"></div>

                <div class="col-md-4">

                    <label>Folio: </label>

                    <select name="folio" id="folio" class="form-control">
                        <option value="">Seleccionar Folio:</option>
                    </select>

                </div>

                <div class="col-md-4"></div>
            </div>
            <!-- FOLIO -->

            <!-- NUMEROS DE PARTE & ACTIVIDAD - IMAGEN -->
            <div class="row" style="text-align: center; margin-top: 5%;">
                
            <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="">Numeros de Parte</label>
                    <select name="numeros_parte" id="numeros_parte" class="form-control">
                        <option value="">Seleccionar Numero De Parte:</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label>Actividad</label><br>
                    <input type="text" id="actividad" name="actividad" class="form-control" readonly><br>
                    <img src="" id="img" name="img" height="150px" width="350px" style="height:150px !important; width:350x !important;">
                </div>
                <div class="col-md-2"></div>                
            </div>
            <!-- NUMEROS DE PARTE & ACTIVIDAD - IMAGEN -->

               <!-- BUTTON SIGUIENTE -->
               <div class="row" style="text-align: center; margin-top: 5%;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" formaction="reg_avance_3.php"  class="btn btn-success">Siguiente</button>
                </div>
                <div class="col-md-4"></div>
            </div>
            <!-- BUTTON SIGUIENTE -->
        </form>
         
        <!-- INSTRUCTIVO -->
        <div class="row" style="text-align: center; margin-top: 5%;">
        <div class="col-md-4"></div>
                <div class="col-md-4">
                    <label>Instructivo</label><br>
                    <a id="btn-instructivo" href="" download="Instructivo">
                        <button id="instructivo" name="instructivo" class=" btn btn-lg btn-danger">
                            <i class="fas fa-file-download fa-spin"></i>
                        </button>
                    </a>
                </div>
                <div class="col-md-4"></div>
        </div> 
        <!-- INSTRUCTIVO -->      
        
        <div class="row" style="text-align: center; margin-top: 10%;">
            <div class="col-md-12"></div>
        </div>
    </div>

    <!-- SCRIPT CORREO -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#usuario').change(function() {
                var usuario = $(this).val();
                var cliente = $('#cliente').val();
                if (usuario !== '') {
                    $.ajax({
                        data: {
                            cliente: cliente,
                            usuario: usuario

                        },
                        dataType: 'json',
                        type: 'POST',
                        url: '../../controller/registro_avances.php',
                    }).done(function(data) {
                        var len = data.length;
                        $("#correo").val('');

                        for (var i = 0; i < len; i++) {

                            var correo = data[i]['correo_usuario'];
                            $("#correo").val(correo);
                        }

                    });
                } else {
                    var sincorreo = "Usuario sin correo";
                    $("#correo").empty();
                    $("#correo").val(sincorreo);

                }
            });
        });
    </script>
    <!-- SCRIPT CORREO-->


    <!-- SCRIPT FOLIO-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#usuario').change(function() {
                var usuario_cliente = $(this).val();
                var cliente2 = $('#cliente').val();

                if (usuario_cliente !== '') {
                    $.ajax({
                        data: {
                            cliente2: cliente2,
                            usuario_cliente: usuario_cliente

                        },
                        dataType: 'json',
                        type: 'POST',
                        url: '../../controller/registro_avances.php',
                    }).done(function(data) {
                        var len = data.length;
                        $("#folio").empty();
                        var seleccionar = "Seleccionar Folio:";
                        $("#folio").append("<option value=''>" + seleccionar + "</option>");
                        for (var i = 0; i < len; i++) {

                            var folio = data[i]['folio'];

                            $("#folio").append("<option value='" + folio + "'>" + folio + "</option>");
                        }

                    });
                } else {
                    var seleccionar = "Seleccionar Folio:";
                    $("#folio").empty();
                    $("#folio").append("<option value=''>" + seleccionar + "</option>");
                }
            });
        });
    </script>
    <!-- SCRIPT FOLIO -->

    <!-- SCRIPT NUMERO DE PARTE-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#folio').change(function() {
                var folio = $(this).val();


                if (folio !== '') {
                    $.ajax({
                        data: {
                            folio: folio

                        },
                        dataType: 'json',
                        type: 'POST',
                        url: '../../controller/registro_avances.php',
                    }).done(function(data) {
                        var len = data.length;
                        $("#numeros_parte").empty();
                        var seleccionar = "Seleccionar Numero De Parte:";
                        $("#numeros_parte").append("<option value=''>" + seleccionar + "</option>");
                        for (var i = 0; i < len; i++) {

                            var pieza = data[i]['id_pieza'];

                            $("#numeros_parte").append("<option value='" + pieza + "'>" + pieza + "</option>");
                        }

                    });
                } else {
                    var seleccionar = "Seleccionar Numero De Parte:";
                    $("#numeros_parte").empty();
                    $("#numeros_parte").append("<option value=''>" + seleccionar + "</option>");
                }
            });
        });
    </script>
    <!-- SCRIPT NUMERO DE PARTE -->

    <!-- SCRIPT INSTRUCTIVO -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#folio').change(function() {
                var folio3 = $(this).val();

                if (folio3 !== '') {
                    $.ajax({
                        data: {
                            folio3: folio3
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: '../../controller/registro_avances.php',
                    }).done(function(data) {

                        var len = data.length;

                        for (var i = 0; i < len; i++) {

                            var instructivo = data[i]['instructivo'];

                            $("#btn-instructivo").attr("href", instructivo);
                        }

                    });
                }
            });
        });
    </script>
    <!-- SCRIPT INSTRUCTIVO -->

    <!-- SCRIPT ACTIVIDAD -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#numeros_parte').change(function() {
                var folio4 = $('#folio').val();

                if (folio4 !== '') {
                    $.ajax({
                        data: {
                            folio4: folio4
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: '../../controller/registro_avances.php',
                    }).done(function(data) {

                        var len = data.length;
                        $("#actividad").val('');
                        for (var i = 0; i < len; i++) {

                            var actividad = data[i]['actividades'];
                            $("#actividad").val(actividad);
                        }

                    });
                } else {
                    var sinact = "Orden de Servicio Sin Actividad";
                    $("#actividad").empty();
                    $("#actividad").val(sinact);
                }
            });
        });
    </script>
    <!-- SCRIPT ACTIVIDAD  -->

    <!-- SCRIPT IMAGEN -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#numeros_parte').change(function() {
                var parte = $(this).val();

                if (parte !== '') {
                    $.ajax({
                        data: {
                            parte: parte
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: '../../controller/registro_avances.php',
                    }).done(function(data) {

                        var len = data.length;

                        for (var i = 0; i < len; i++) {

                            var imagen = data[i]['foto'];

                            $("#img").attr("src", imagen);
                        }

                    });
                }
            });
        });
    </script>
    <!--SCRIPT IMAGEN -->


</body>

</html>