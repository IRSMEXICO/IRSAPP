<?php
include("../../model/sesiones.php"); //valida sesiona activa esta linea va en cada php que muestre info o que interacciones con el cliente
require_once("../../model/acciones.php");
$registro_avance = new consul();
$reg_av = $registro_avance->GetRegistroAvance();

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Avance</title>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--**BOOTSTRAP**-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('.menuContainer').load('inspector.php');
        });
    </script>

    <!-- DATA TABLES JQUERY -->
    <script>
        $(document).ready(function() {
            $('#table_reg').DataTable();
        });
    </script>

    <style>
        .table,
        th {
            width: 10px !important;
            font-size: 13px !important;
        }
    </style>
</head>

<body>

    <div class="menuContainer"></div>


    <div class="container-fluid">

        <!-- TITULO -->
        <div class="row" style="text-align: center !important; margin-top: 2% !important;">
            <div class="col-sm-12">
                <h1>Registro de Avances</h1>
            </div>
        </div>
        <!-- TITULO -->

        <!-- BOTON AGREGAR -->
        <div class="row" style="margin-top: 2% !important;">
            <div class="col-sm-12" style="text-align: center !important;">
                <button class="btn-success btn-lg">
                    <i class="fas fa-plus-circle fa-spin"></i>
                </button>
            </div>
        </div>
        <!-- BOTON AGREGAR -->

        <!-- TABLA REGISTROS DE AVANCES -->
        <div class="row">
            <div class="col-sm-12">
                <table id="table_reg" class="table table-dark table-condensed">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Usuario del Cliente</th>
                            <th scope="col">Numero de Parte</th>
                            <th scope="col">Actividad</th>
                            <th scope="col">Turno</th>
                            <th scope="col">Empleado IRS</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Asistencia</th>
                            <th scope="col">Ranking</th>
                            <th scope="col">Piezas OK</th>
                            <th scope="col">Piezas NO OK</th>
                            <th scope="col">Piezas Retrabajadas</th>
                            <th scope="col">Total de Piezas</th>
                            <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($reg_av as $row) {
                            ?>
                            <!--ID-->
                            <tr>
                                <th scope="row">1</th>
                                <td><?php $row['id'] ?></td>
                            </tr>

                            <!--CLIENTE-->
                            <tr>
                                <th scope="row">2</th>
                                <td><?php $row['cliente'] ?></td>
                            </tr>

                            <!--USUARIO DEL CLIENTE -->
                            <tr>
                                <th scope="row">3</th>
                                <td><?php $row['usuario_empresa'] ?></td>
                            </tr>

                            <!--NUMERO DE PARTE -->
                            <tr>
                                <th scope="row">4</th>
                                <td><?php $row['num_parte'] ?></td>
                            </tr>

                            <!--ACTIVIDAD -->
                            <tr>
                                <th scope="row">5</th>
                                <td><?php $row['actividad'] ?></td>
                            </tr>

                            <!-- TURNO-->
                            <tr>
                                <th scope="row">6</th>
                                <td><?php $row['turno'] ?></td>
                            </tr>

                            <!--EMPLEADOR IRS -->
                            <tr>
                                <th scope="row">7</th>
                                <td><?php $row['empleado_irs'] ?></td>
                            </tr>

                            <!--FECHA -->
                            <tr>
                                <th scope="row">8</th>
                                <td><?php $row['fecha'] ?></td>
                            </tr>

                            <!--ASISTENCIA -->
                            <tr>
                                <th scope="row">9</th>
                                <td><?php $row['asistencia'] ?></td>
                            </tr>

                            <!--RANKING -->
                            <tr>
                                <th scope="row">10</th>
                                <td><?php $row['ranking'] ?></td>
                            </tr>

                            <!--PIEZAS OK -->
                            <tr>
                                <th scope="row">11</th>
                                <td><?php $row['pzok'] ?></td>
                            </tr>

                            <!--PIEZAS NO OK -->
                            <tr>
                                <th scope="row">12</th>
                                <td><?php $row['pzmal'] ?></td>
                            </tr>

                            <!--PIEZAS RETRABAJADAS -->
                            <tr>
                                <th scope="row">13</th>
                                <td><?php $row['pzret'] ?></td>
                            </tr>

                            <!--TOTAL-->
                            <tr>
                                <th scope="row">14</th>
                                <td><?php $row['total_pz'] ?></td>
                            </tr>

                            <!--SALDO-->
                            <tr>
                                <th scope="row">15</th>
                                <td><?php $row['saldo'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- //TABLA REGISTROS DE AVANCES -->


    </div>

</body>

</html>