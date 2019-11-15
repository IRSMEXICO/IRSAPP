<?php
include("../../model/sesiones.php"); //valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");

//CLIENTES//
$ordenes_servicio = new consul();
$ord_serv = $ordenes_servicio->GetOrdenesDeServicio();

?>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Avance</title>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--**BOOTSTRAP**-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.menuContainer').load('inspector.php');
        });
    </script>

</head>

<body>
    <div class="menuContainer"></div>

    <div class="container">

        <!-- TITULO -->
        <div class="row" style="text-align: center !important;">
            <div class="col-sm-12">
                <h1>Agregar Registro de Avance</h1>
            </div>
        </div>
        <!-- TITULO -->

        <!-- TITULOS -->
        <div class="row" style="text-align: center !important;">
            <div class="col-sm-6">
                <h3>CLIENTE</h3>
            </div>

            <div class="col-sm-6">
                <h3>USUARIO DEL CLIENTE</h3>
            </div>
        </div>
        <!-- TITULOS -->

        <!-- COMBOBOXES CLIENTE & USUARIO CLIENTE -->
        <div class="row">
            <!-- COMBOBOX  CLIENTE -->
            <div class="col-sm-6">
                <select id="CLIENTE" name="CLIENTE" class="form-control">
                    <option value="">SELECCIONAR CLIENTE:</option>
                    <?php
                    foreach ($ord_serv as $row) {
                        ?>
                        <option value="<?php echo $row['id_cliente']; ?>"><?php echo $row['id_cliente']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!-- COMBOBOX  CLIENTE -->

            <!-- COMBOBOX USUARIO DEL CLIENTE-->
            <div class="col-sm-6">
                <select name="USUARIO_CLIENTE" id="USUARIO_CLIENTE" class="form-control">
                    <option value="">SELECCIONAR USUARIO DEL CLIENTE:</option>
                </select>
            </div>
            <!-- COMBOBOX USUARIO DEL CLIENTE -->
        </div>
        <!-- COMBOBOXES CLIENTE & USUARIO CLIENTE -->

        <!-- TITULOS -->
        <div class="row" style="text-align: center !important;">
            <div class="col-sm-6">
                <h3>NUMERO DE PARTE</h3>
            </div>

            <div class="col-sm-6">
                <h3>ACTIVIDAD</h3>
            </div>
        </div>
        <!-- TITULOS -->

        <!-- NUMERO DE PARTE O PIEZAS & ACTIVIDAD -->
        <div class="row">
            <div class="col-sm-6">
                <select name="NUMERO_PARTE" id="NUMERO_PARTE" class="form-control">
                    <option value="">SELECCIONAR NUMERO DE PARTE:</option>
                </select>
            </div>

            <div class="col-sm-6">
                <input class="form-control" type="text" id="ACTIVIDAD" readonly>
            </div>
        </div>
        <!-- NUMERO DE PARTE O PIEZAS & ACTIVIDAD -->

        <!-- TITULOS -->
        <div class="row" style="text-align: center !important;">
            <div class="col-sm-6">
                <h3>AREA</h3>
            </div>

            <div class="col-sm-6">
                <h3>IMAGEN</h3>
            </div>
        </div>
        <!-- TITULOS -->

        <!-- AREA & IMAGEN -->
        <div class="row">
            <div class="col-sm-6">
                <input class="form-control" type="text" id="AREA" readonly value="SIN AREA ASIGNADA">
            </div>
            <div class="col-sm-6">
                <img src="" id="IMAGEN">
            </div>
        </div>
        
    </div>

    <!-- SCRIPT USUARIO_CLIENTE -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var usuarios = $('#USUARIO_CLIENTE');
            $('#CLIENTE').change(function() {
                var cliente = $(this).val();
                if (cliente !== '') {
                    $.ajax({
                        data: {
                            cliente: cliente
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: 'acciones.php',
                    }).done(function(data) {
                        var len = data.length;
                        $("#USUARIO_CLIENTE").empty();
                        var seleccionar = "SELECCIONAR USUARIO DEL CLIENTE:";
                        $("#USUARIO_CLIENTE").append("<option value=''>" + seleccionar + "</option>");
                        for (var i = 0; i < len; i++) {

                            var usuario_cliente = data[i]['id_usuario'];
                            $("#USUARIO_CLIENTE").append("<option value='" + usuario_cliente + "'>" + usuario_cliente + "</option>");
                        }

                    });
                } else {
                    var seleccionar = "SELECCIONAR USUARIO DEL CLIENTE:";
                    $("#USUARIO_CLIENTE").empty();
                    $("#USUARIO_CLIENTE").append("<option value=''>" + seleccionar + "</option>");

                }
            });
        });
    </script>
    <!-- SCRIPT USUARIO_CLIENTE -->

    <!-- SCRIPT NUMERO DE PARTE -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var numero_parte = $('#NUMERO_PARTE');
            $('#USUARIO_CLIENTE').change(function() {
                var usuario_cliente = $(this).val();
                if (usuario_cliente !== '') {
                    $.ajax({
                        data: {
                            usuario_cliente: usuario_cliente
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: 'acciones.php',
                    }).done(function(data) {
                        var len = data.length;
                        $("#NUMERO_PARTE").empty();
                        var seleccionar = "SELECCIONAR NUMERO DE PARTE:";
                        $("#NUMERO_PARTE").append("<option value=''>" + seleccionar + "</option>");
                        for (var i = 0; i < len; i++) {

                            var numero_parte = data[i]['id_pieza'];

                            $("#NUMERO_PARTE").append("<option value='" + numero_parte + "'>" + numero_parte + "</option>");
                        }

                    });
                } else {
                    var seleccionar = "SELECCIONAR NUMERO DE PARTE:";
                    $("#NUMERO_PARTE").empty();
                    $("#NUMERO_PARTE").append("<option value=''>" + seleccionar + "</option>");
                }
            });
        });
    </script>
    <!-- SCRIPT NUMERO DE PARTE -->

    <!-- SCRIPT ACTIVIDAD-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var actividad = $('#ACTIVIDAD');
            $('#NUMERO_PARTE').change(function() {
                var numero_parte = $(this).val();
                var usuario = $("#USUARIO_CLIENTE").val();
                if (numero_parte !== '') {
                    $.ajax({
                        data: {
                            numero_parte: numero_parte,
                            usuario: usuario
                            
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: 'acciones.php',
                    }).done(function(data) {
                        var len = data.length;
                        $("#ACTIVIDAD").val('');
                        for (var i = 0; i < len; i++) {
                            var actividad = data[i]['actividades'];
                            $("#ACTIVIDAD").val(actividad);
                        }

                    });
                } else {
                    $("#ACTIVIDAD").val('');
                }
            });
        });
    </script>
    <!--SCRIPT ACTIVIDAD-->
    
    <!-- SCRIPT AREA-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var area = $('#AREA');
            $('#NUMERO_PARTE').change(function() {
                var numero_parte2 = $(this).val();
                var usuario2 = $("#USUARIO_CLIENTE").val();
                if (numero_parte2 !== '') {
                    $.ajax({
                        
                        data: {
                            numero_parte2: numero_parte2,
                            usuario2:usuario2
                            
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: 'acciones.php',
                    }).done(function(data) {
                        var len = data.length;
                        $("#AREA").val('');
                        for (var i = 0; i < len; i++) {
                            var area = data[i]['id_area'];
                            $("#AREA").val(area);
                        }

                    });
                } else {
                    $("#AREA").val('SIN AREA ASIGNADA');
                }
            });
        });
    </script>
    <!-- SCRIPT AREA-->

    <!-- SCRIPT IMAGEN -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var imagen = $('#IMAGEN');
            var src = '../../content/img/coming.gif'
            $('#NUMERO_PARTE').change(function() {
                var numero_parte3 = $(this).val();
                if (numero_parte3 !== '') {
                    $.ajax({
                        data: {
                            numero_parte3: numero_parte3
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: 'acciones.php',
                    }).done(function(data) {
                        var len = data.length;
                        imagen.attr('src',src);
                        for (var i = 0; i < len; i++) {
                            var src2 = data[i]['foto'];
                            imagen.attr('src',src2);
                        }

                    });
                } else {
                    imagen.attr('src',src);
                }
            });
        });
    </script>
    <!-- SCRIPT IMAGEN -->
</body>

</html>