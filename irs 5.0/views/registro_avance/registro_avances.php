<html>
    <head>
        <title>IRS | Registro de Avances</title>
        <!-- Bootstrap -->
	      <link href="../../content/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../content/css/style_nav.css" rel="stylesheet">
        <style>
          .box-container{margin-top: 5%;}

          body button{
            background-color: transparent !important;
            border: 1px solid black!important;
    
          }
        </style>
        </head>


<body style="background-color: white;">
    <nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
    </nav>
    
    <div class="box-container container" style="text-align: center;">
    <div class="row">
<!------------------------------------------------------------------------------------>
    <div class="col-sm-4">
    <button type="button" class="btn btn-primary">
    <img src="../../content/img/logo_caterpillar.png" id="imagen" width="100" height="100">
    </button>
    </div>

    <div class="col-sm-4">
    <button type="button" class="btn btn-primary">
    <img src="../../content/img/logo_nemak.jpg" width="100" height="100">
    </button>
    </div>

    <div class="col-sm-4">
    <button type="button" class="btn btn-primary">
        <img src="../../content/img/logo_prolamsa.png" width="100" height="100">
    </button>
    </div>
  </div>
    <!------------------------------------------------------------------------------------>
    <div class="row" style="margin-top: 3%;">
    <div class="col-sm-4">
        <button type="button" class="btn btn-primary">
        <img src="../../content/img/logo_metalsa.jpg" width="100" height="100">
        </button>
        </div>
    
        <div class="col-sm-4">
        <button type="button" class="btn btn-primary">
        <img src="../../content/img/logo_brembo.png" width="100" height="100">
        </button>
        </div>
    
        <div class="col-sm-4">
        <button type="button" class="btn btn-primary">
            <img src="../../content/img/logo_magna.png" width="100" height="100">
        </button>
        </div>
      </div>
    <!------------------------------------------------------------------------------------>
    
    <!------------------------------------------------------------------------------------>
    <div class="row" style="margin-top: 3%;">
    <div class="col-sm-4">
        <button type="button" class="btn btn-primary">
        <img src="../../content/img/coming.gif" width="100" height="100">
        </button>
        </div>
    
        <div class="col-sm-4">
        <button type="button" class="btn btn-primary">
        <img src="../../content/img/coming.gif" width="100" height="100">
        </button>
        </div>
    
        <div class="col-sm-4">
        <button type="button" class="btn btn-primary">
            <img src="../../content/img/coming.gif" width="100" height="100">
        </button>
        </div>
      </div>
    <!------------------------------------------------------------------------------------>
    </div>

    <script>
    function imagen(){
    var src = document.getElementById("imagen").src;
    setTimeout("location.href=registro_avances2.php", 5000);
      
                      }
    </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../content/js/bootstrap.min.js"></script> 
</body>

</html>