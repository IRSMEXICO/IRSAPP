<?php
require_once("../../model/acciones.php");
$cliente_p= new consul();
$pieza= $cliente_p->cat_cliente_pieza(); 
?>
<!DOCTYPE html>
<head>

		<link href="../../content/css/style_nav.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	      <title>Datos de Catalogo de Clientes-Piezas</title>
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	      
	<style>
		.content {
			margin-top: 80px;
		}
		.img_piezas img{
  	 width: 60px;
  	 height: auto;
   	margin: auto;
	}
	</style>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<?php include('../../views/clientes/nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Catalogo de Piezas</h2>
			<hr />	
			<br />
			<form class="form-inline my-2 my-lg-0" style="float: right;" action= "add_cliente_piezas.php">
			<button style="float: right;"  type="submit"  class="btn btn-success" value="Agregar Datos" ><span class="fas fa-plus-circle" ></span> Agregar Datos </button>
			</form>
			<br />
			<br />
			
			<div class="table-responsive">
			<table id="tablelol" class="table table-hover">
    		  <thead class="thead-light">
				<tr>
				
				<th>ID</th>
                    <th>Clientes</th>
                    <th>Piezas</th>
					<th>Imagen</th>
                    <th>Acciones </th>
										
				</tr>
        </thead>
        <?php
              foreach ($pieza as $row) { 
	      ?>
						<tr>
              				<td><?php echo $row['id_pieza'];?></td>
							<td><?php echo $row['cliente'];?></td>
							<td><?php echo $row['piezas'];?></td>
							<td class="img_piezas"><img src="<?php echo $row['foto']?>" alt="<?php echo $row['piezas'];?>"></td>
							<td>
							<a href="edit_cliente_piezas.php?nik=<?php echo $row['id_pieza'];?>" title="Editar datos" class="btn btn-info btn-sm"><span class="fa fa-refresh fa-spin"></span> Editar Datos</a>
								<a href="../../controller/del_pieza.php?id=<?php echo $row['id_pieza'];?>" title="Eliminar" onclick="return confirm('¿Esta seguro de borrar al cliente <?php echo $row['piezas'];?>);" class="btn btn-danger btn-sm"><span class="fas fa-trash-alt" ></span> Eliminar</a>
                	</td>
              
              <?php }?>
			</table>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
	$(document).ready( function () {
   		 $('#tablelol').DataTable({
				language:{
    			"sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
				}
			}
		});
	} );
	</script>
	<br>
</body>
</html>
