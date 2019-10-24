<html>
    <head>
        <title>IRS | Registro de Avances</title>
        <!-- Bootstrap -->
	    <link href="../../content/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../content/css/style_nav.css" rel="stylesheet">
        <style>
          .box-container{margin-top: 10%;}

          body button{
            background-color: transparent !important;
            border: 1px solid black!important;
    
          }
        </style>

        <script type="text/javascript">
        //----------------------------------------------//
        var input = document.getElementById("turno");

        function mueveReloj(){
        var tiempo = new Date();
        var horas = tiempo.getHours();
        var minutos = tiempo.getMinutes();
        var segundos = tiempo.getSeconds();
        //----------------------------------------------//
        var ampm = horas >= 12 ? 'pm' : 'am';
        hora = horas % 12;
        hora = horas ? horas : 12;
        minutos = minutos < 10 ? '0'+minutos : minutos;
        var tiempoactual = horas + ':' + minutos + ':' + segundos + ' ' +ampm;
        document.form_reloj.tm.value = tiempoactual;
        if(horas>=06 && horas<=18){
        document.getElementById("turno").value = "Turno Matutino";
        }else{document.getElementById("turno").value = "Turno Nocturno";}
        setTimeout("mueveReloj()",1000);
        }
        </script>

        </head>


<body style="background-color: white;" onload="mueveReloj()">

    <nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
    </nav>

    <div class="box-container container" style="text-align: center;">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <form class="form-group" name="form_reloj">
        <input type="text" name="turno" class="form-control" id="turno" disabled="true" style="text-align: center; background-color: #56AAF3; color: white; font-weight: bold; letter-spacing: 0.3em;">
        <input type="text" class="form-control" name="tm" id="tm" disabled="true" style="margin-top: 5%; text-align: center;">
        </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
    </div>



</body>
</html>