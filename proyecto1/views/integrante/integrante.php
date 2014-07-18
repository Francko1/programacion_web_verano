<?php 
  //session_start();
  	  
	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Integrante.php');
      include ('../../controllers/IntegranteController.php');
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
						<form role="form"  method="POST" action=""  id="form_integrante">
						  <div class="form-group">
						    <label for="nombre">Nombre</label>
						    <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="nombre">
						  </div>

						  <div class="form-group">
						    <label for="Apellido">Apellido</label>
						    <input type="text" class="form-control" id="apellido"  name="apellido" placeholder="apellido">
						  </div>


						  <div class="form-group">
						    <label for="Peso">Peso</label>
						    <input type="text" class="form-control" id="peso"  name="peso" placeholder="peso">
						  </div>

						  <div class="form-group">
						    <label for="estatura">Estatura</label>
						    <input type="text" class="form-control" id="estatura"  name="estatura" placeholder="estatura">
						  </div>



						  <div class="form-group">
						    <label for="Foto">Foto</label>
						    <input type="file" class="form-control" id="foto" name="foto" >
						  </div>

						   <div class="form-group">
						    <label for="edad">Edad</label>
						    <input type="text" class="form-control" id="edad"  name="edad" placeholder="edad">
						  </div>

						  <div class="form-group">
						   	<select class="form-control " id="idequipo" name="idequipo">
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
