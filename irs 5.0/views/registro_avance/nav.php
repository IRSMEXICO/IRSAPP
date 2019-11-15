<!DOCTYPE html>
<html>
<!--BOOTSTRAP-->
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        
	    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<div>
</head>
    <body>
	<div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
           </button>
           <a class="navbar-brand" href="../../controller/home.php">
			        <img src="../../content/img/irs.png" width="130" height="30" alt="">
             </a>
    
             <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <!--Clientes-->
        <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../clientes/index_cliente.php">Clientes</a>
          <a class="dropdown-item" href="../clientes/index_cliente_area.php">Area</a>
          <a class="dropdown-item" href="../clientes/index_cliente_piezas.php">Piezas</a>
          <a class="dropdown-item" href="../clientes/index_cliente_usuario.php">Usuarios</a>    
        </div>
         </li>
             <!--**Clientes**-->

             <!--COLABORADORES-->
               <li class="nav-item active">
                  <a class="nav-link" href="../colaboradores/index_colaboradores.php">Colaboradores</a>
               </li>
             <!--**COLABORADORES**-->

             <!--ORDEN SERVICIO-->
                <li class="nav-item active">
                   <a class="nav-link" href="../orden_servicio/orden_servicio.php">Orden de Servicio</a>
                </li>
             <!--**ORDEN SERVICIO**-->

                <!--OS INSPECTORES-->
                <li class="nav-item active">
                 <a class="nav-link" href="#">OS Inspectores</a>
               </li>
              <!--**OS INSPECTORES**-->

              <!--REGISTRO AVANCES-->
              <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Registro de avances
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="registro_avance/admin.php">Admin</a>
          <a class="dropdown-item" href="registro_avance/inspector.php">Inspector</a>
          <a class="dropdown-item" href="registro_avance/reg_avance1.php">Registro de Avances 1</a>
          <a class="dropdown-item" href="registro_avance/reg_avance2.php">Registro de Avances 2</a>  
        </div>
         </li>
          <!--**REGISTRO AVANCES**-->
          
          <!--REPORTES-->
          <li class="nav-item active">
          <a class="nav-link" href="#">Reportes</a>
          </li>
          <!--**REPORTES**-->

          <!--REPORTES IRS-->
          <li class="nav-item active">
            <a class="nav-link" href="#">Reportes IRS</a>
            </li>
            <!--**REPORTES IRS**-->

          <!--CATALOGOS-->
          <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catalogos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cat_contratos.php">Contratos</a>
          <a class="dropdown-item" href="cat_actividades.php">Actividades</a>
          <a class="dropdown-item" href="cat_rate.php">Rates</a>
          <a class="dropdown-item" href="cat_turno.php">Turnos</a>
          <a class="dropdown-item" href="cat_moneda.php">Monedas</a>
          <a class="dropdown-item" href="cat_captura.php">Tipo Captura</a>
          <a class="dropdown-item" href="cat_reg.php">Tipo de Registro</a>
          <a class="dropdown-item" href="cat_motivo_tm.php">Motivos TM</a>
        </div>
      </li>
      <li  class="nav-item active">
            <a style=" float: right;" class="nav-link" href="../../model/cerrar.php">Cerrar Sesión</a>
          </li>
      <!--**CATALOGOS**-->
        </ul>
      </div>
    </nav>
    </div>
  <!--**MENU**-->
  </body>
</html> 
					
					
					

