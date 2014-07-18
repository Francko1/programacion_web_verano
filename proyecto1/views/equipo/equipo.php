<?php 
  session_start();
  	  
	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php');
      include ('../../controllers/EquipoController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php');

 ?>

<?php 
  if (isset($_POST['nombre'])){
  	$equipo =new EquipoController();
  	$equipo->insertaEquipo($_POST);

	}
 ?>

		<div class="row">
			<div class="col-md-4 col-md-offset-4">
						<form  method="post" accion="" id="form_equipo"> 
						  <div class="form-group">
						    <label for="nombre">Nombre</label>
						    <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="nombre">
						  </div>
						  <div class="form-group">
						    <label for="escudo">Escudo</label>
						    <input type="file" class="form-control" id="escudo" name="escudo" placeholder="escudo">
						  </div>
						  <div class="form-group">
						   	<select class="form-control " id="idpais" name="idpais">
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
