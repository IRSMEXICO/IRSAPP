<html>
    <head>
        <title>IRS | Registro de Avances</title>
        <!-- Bootstrap -->
	    <link href="../../content/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../content/css/style_nav.css" rel="stylesheet">
        <style>
          .box-container{margin-top: 10%;}

          input[type=radio] {
              height: 30px;
              width: 30px;
              

          }
        </style>

        
    </head>
<body style="background-color: white;">

<nav class="navbar navbar-default navbar-fixed-top">
    <?php include("nav.php");?>
</nav>

<div class="box-container container" style="text-align: center;">
<div class="row">
<div class="col-sm-4">
<form action="#">
<label>Llenado por:</label>
<div></div>
<label><input type="radio" value="Grupo" id="rd1" name="rd"> Grupo</label>
<div></div>
<label><input type="radio" value="Persona" id="rd2" name="rd"> Persona</label>
</form>
</div>

<div class="col-sm-4" style="text-align: center;">
    <label>PIEZAS OK:</label> <input type="number" name="" id="">
    <label>PIEZAS NO OK:</label> <input type="number" name="" id="">
    <label>PIEZAS RETRABAJADAS:</label> <input type="number" name="" id="">
    <label>TOTAL PIEZAS:</label> <input type="number" name="" id="" disabled="true">
    <div></div>
    <label>SALDO:</label> <input type="number" name="" id="" disabled="true">
</div>

<div class="col-sm-4" style="text-align: center;">
<label for="">Tiempo Muerto</label>
<div></div>
<label><input type="radio" value="Grupo" id="rd1" name="rd"> Falto Material</label>
<div></div>
<label><input type="radio" value="Grupo" id="rd1" name="rd"> Falto Montac</label>
<div></div>
<label><input type="radio" value="Grupo" id="rd1" name="rd"> Otra</label>
<div></div>
<textarea name="" id="" cols="30" rows="10" style="resize: none;"></textarea>
<div></div>
<button  class="btn btn-primary" style="margin-top: 2%;">Enviar Correo</button>

</div>
</div>
</div>

</body>
</html>