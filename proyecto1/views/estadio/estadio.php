<?php   	  
	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Estadio.php');
      include ('../../controllers/EstadioController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php');
 ?>

<?php 
  if (isset($_POST['nombre'])){
  	echo "<pre>";
 	 print_r($_POST);
  	echo"</pre>";

	}

?>
<div class="row">
			<div class="col-md-4 col-md-offset-4">
						 <form method="post" id="form_estadio" action="">
						  <div class="form-group">
						    <label for="nombre">Nombre</label>
						    <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="nombre" requiered>
						  </div>
						 
						  <div class="form-group">
						   <label for="idciudad">Ciudad</label>
						   	<select class="form-control " id="idciudad" name="idciudad" required>
						   		<option value="1">Mexico</option>
						   		<option value="2">Argentina</option>
						   		<option value="3">Alemania</option>
						   		<option value="4">Francia</option>
						   		

						   		
						   	</select>
						  </div>
						 
						 <button type="submit" class="btn btn-primary">Guardar</button>
						</form>
										
			</div>
			
		</div>




<?php include ('../layouts/footer.php'); ?>
