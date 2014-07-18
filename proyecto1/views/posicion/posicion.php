<?php 
  //session_start();
  	  
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
  	echo "<pre>";
 	 print_r($_POST);
  	echo"</pre>";

	}
 ?>

		<div class="row">
			<div class="col-md-4 col-md-offset-4">
						<form role="form"  method="POST" action="" id="form_posicion">
						  <div class="form-group">
						    <label for="nombre">Nombre</label>
						    <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="nombre" required/>
						  </div>
						
						 <div class="form-group">
				            <label for="abreviatura">Abreviatura:</label>
				            <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Ingresa la abreviatura" required />
				         

						  </div>
						 
						 <button type="submit" class="btn btn-primary">Guardar</button>
						</form>
										
			</div>
			
		</div>




<?php include ('../layouts/footer.php'); ?>
