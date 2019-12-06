<?php
require_once("../../model/acciones.php");
$id= $_GET['nik'];
$pieza= new consul();
$informacion_c = $pieza->cat_cliente_pieza_info($id);
$cliente=$pieza->cliente();
?>
<!DOCTYPE html>
<html lang="es">
<head>	
		<?php
				foreach ($informacion_c as $row) { 
		?>

        <link href="../../content/css/style_nav.css" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	      <title>Agregar Productos</title>
	<style>
		.content {
			margin-top: 80px;
		}
		
	</style>
		<script language="javascript">
function callme()
{
document.form1.file_input.value=<?php echo $row['foto'];?>;
}

</script>

</head>
<body>
<?php include('../../views/clientes/nav.php');?>

	<div class="container">
		<div class="content">
			<h2>Agregar Productos o Numeros de Parte en los que se va a Trabajar &raquo; Editar datos</h2>
			<hr />
			<hr />

			<form class="form-horizontal" action="../../controller/add_actividad.php" method="post" enctype="multipart/form-data">
			  
      
				<div class="form-group">
					<label class="col-sm-3 control-label">Folio</label>
					<div class="col-sm-3">
						<input type="text" name="folio" value="<?php echo $row ['folio']; ?>" class="form-control" readonly onmousedown="return false;" placeholder="NIK" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">No. de Parte &nbsp; </label>
                <div class="col-sm-3">
                     <select name="num_parte" id="num_parte " class="form-control notItemOne">
                     <option value="">SELECCIONAR PIEZA:</option>
                        <?php foreach($piezas as $rowP){?>
                      <option value="<?php echo $rowP['id_pieza']?>"><?php echo $rowP['id_pieza']."-".$rowP['piezas']?></option>
                          <?php } ?> 
                     </select>
                    </div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Rate x Horas </label>
					<div class="col-sm-3">
						<input type="number" name="rate" class="form-control" required>
					</div> 
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Actividad a Realizar </label>
					<div class="col-sm-3">
						<input type="number" name="actividad_realizar" class="form-control" required>
					</div> 
				</div>

                <label><b>Instructivo Operativo  &nbsp;</b></label><input type="file" name="file" id="file">
                 
				<div class="form-group">
                <label class="col-sm-3 control-label" for="foto">Foto Pieza</label>
                      <div style="margin-left: 0.9rem" class="prevPhoto col-sm-3">
                     <label for="foto"></label>
                     <img id="imgSalida" width="50%" height="50%" src="" />
                      </div>
                      </div>
					         <div class="form-group">
					                   <label class="col-sm-3 control-label">&nbsp;</label>
                             <div class="col-sm-3 upimg">
                             <input type="file" name="foto" id="foto">
                          </div>
						 </div>
                        
                        		
				<br>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save_piezas" class="btn btn-info" value="Guardar datos">
						<a href="index_cliente_piezas.php" class="btn btn-danger">Cancelar</a>
						<a href="index_cliente_piezas.php" class="btn btn-warning">Regresar al Catalogo</a>
					
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php }	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript">
	$(window).load(function(){

$(function() {
 $('#foto').change(function(e) {
	 addImage(e); 
	});

	function addImage(e){
	 var file = e.target.files[0],
	 imageType = /image.*/;
   
	 if (!file.type.match(imageType))
	  return;
 
	 var reader = new FileReader();
	 reader.onload = fileOnload;
	 reader.readAsDataURL(file);
	}
 
	function fileOnload(e) {
	 var result=e.target.result;
	 $('#imgSalida').attr("src",result);
	}
   });
 });

</script>

<!-- SCRIPT IMAGEN -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var imagen = $('#imagen_pieza');
            var src = '../../content/img/coming.gif'
            $('#num_parte').change(function() {
                var num_parte = $(this).val();
                if (num_parte !== '') {
                    $.ajax({
                        data: {
                          num_parte: num_parte
                        },
                        dataType: 'json',
                        type: 'POST',
                        url: 'acciones.php',
                    }).done(function(data) {
                        var len = data.length;
                        imagen.attr('src', src);
                        for (var i = 0; i < len; i++) {
                            var src2 = data[i]['foto'];
                            imagen.attr('src', src2);
                        }

                    });
                } else {
                    imagen.attr('src', src);
                }
            });
        });
    </script>
    <!-- SCRIPT IMAGEN -->
</body>
</html>