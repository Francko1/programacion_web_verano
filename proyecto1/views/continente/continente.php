<?php 
  session_start();
      
    include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Continente.php');
      include ('../../controllers/ContinenteController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php');
 
  if (isset($_POST['nombre'])){
    $continente =new ContinenteController();
    $continente->insertaContinente($_POST);

  }
 ?>


<br>
<div class="row">
      
      <div class="col-md-9">
             <h2>CONTINENTE</h2> 
      <br>
          <form method="POST" id="form_continente" action="">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del continente" required>
                </div>

                <br>
                <br>

                <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
      </div>
      <div class="col-md-2"></div>
      
</div>


<?php include ('../layouts/footer.php'); ?>