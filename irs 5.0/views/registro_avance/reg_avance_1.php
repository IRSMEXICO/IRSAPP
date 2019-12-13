<!-- PHP -->
<?php
include("../../model/sesiones.php");
require_once("../../model/acciones.php");
$get_clientes = new consul();
$clientes = $get_clientes->GetClientes();
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('.menuContainer').load('../inspector.php');
        });
    </script>

    <style>
        button {
            height: 150px !important;
            width: 150px !important;
            border: 1px solid black !important;
        }

        label {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
        }
    </style>

</head>

<body>
    

    <div class="container">

        <!-- TITULO -->
        <div class="row" style="text-align: center; margin-top: 2%;">
            <div class="col-md-12">
                <h1>Clientes</h1>
            </div>
        </div>
        <!-- TITULO -->

        <!-- CLIENTES -->
        <form method="POST">
            <div class="row" style="text-align: center; margin-top: 2%;">
                <?php foreach ($clientes as $row) { ?>
                    <div class="col-md-4" style="text-align: center; margin-top: 2%;">

                        <button type="submit" id="btn-cliente" name="btn-cliente" value="<?php echo $row['cliente']; ?>" style="background-image: url(<?php echo $row['foto']; ?>);
                            background-size: 150px 150px; 
                                color: transparent !important;" formaction="reg_avance_2.php">
                        </button>

                    </div>
                <?php } ?>
            </div>
        </form>
        <!-- CLIENTES -->

    </div>

</body>

</html>
<!-- HTML -->