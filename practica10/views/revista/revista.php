<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');


    $revistaC=new RevistaController();
  if (isset($_POST['nombre'])){
  	
  	$revistaC->insertaRevista($_POST,$_FILES);

	}

?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">

  <!--meterlo a una funcion-->
      <?php 
      if ($revistaC->muestra_errores) {
    ?>    
       <div class="alert alert-danger">

          <?php //foreach => leer arreglos 
            foreach ($revistaC->errores as $value) {
                echo "<p>error: $value</p>";
             
            }


           ?>

       </div>
    <?php 
      }
      else{

        
      }
     ?>
          <form class="form-horizontal registerForm"  action="" method="POST"  ENCTYPE="multipart/form-data">
          
            <br>
                <h3 >Revista</h3>
            <br>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Nombre revista </label>
                  <div class="col-lg-6">
                      <input type="text" class="form-control username"  name="nombre" id="nombre"placeholder="nombre" value="<?php echo $revistaC->get_nombre(); ?>"  />
                  </div>
            </div>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Portada </label>
                  <div class="col-lg-6">
                      <input type="file" id="portada" name="portada"  placeholder=""/>
                  </div>
            </div>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Fecha  </label>
                  <div class="col-lg-6">
                  
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" name="fecha" id="fecha"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  
            </div>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Volumen </label>
                  <div class="col-lg-6">
                      <input type="text" class="form-control username" name="volumen" id="volumen" placeholder="vol"/>
                  </div>
            </div>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Titulo </label>
                  <div class="col-lg-6">
                      <input type="text" class="form-control username" name="titulo" id="titulo" placeholder="titulo"/>
                  </div>

            </div>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Subtitulo </label>
                  <div class="col-lg-6">
                      <input type="text" class="form-control username" name="subtitulo" id="subtitulo"placeholder="subtitulo" />
                  </div>
                  
            </div>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Numero </label>
                  <div class="col-lg-3">
                      <input type="text" class="form-control" name="numero" id="numero" placeholder="numero"/>
                  </div>
                  
            </div>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Clave </label>
                  <div class="col-lg-4">
                      <input type="text" class="form-control username" name="clave" id="clave" placeholder="Clave"/>
                  </div>
                  
            </div>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Directorio </label>
                  <div class="col-lg-6">
                      <textarea class="form-control" name="directorio" id="directorio" placeholder="directorio"></textarea>
                  </div>
                  
            </div>
            <div class="form-group">
                  <label class="col-lg-3 control-label">Editorial </label>
                  <div class="col-lg-6">
                      <textarea class="form-control" name="editorial" id="editorial" placeholder="editorial"></textarea>
                  </div>
                  
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">ID.   : </label>
              <select class="col-lg-3" id="id_status" name="id_status">
                      <option value="10">10</option>
                       <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>

                
              </select>
            </div>
            <br>
            <button type="submit" class="btn btn-default">Guardar</button>
            <br>
            <br>
          </form>
  </div>
</div>


<?php include ('../layouts/footer.php'); ?>