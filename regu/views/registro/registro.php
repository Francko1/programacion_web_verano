<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Registro.php');
  include ('../../controllers/RegistroController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 

    //echo "<pre>datos:";
    //print_r($_POST);
    //print_r($_FILES);
    //echo "</pre>";
    //die();
  
  /*if (isset($_FILES['bandera'])) {
    $nom=$_FILES['bandera']['nom'];
    move_uploaded_file($_FILES['bandera']['tmp_name'], "../../models".$nom);
  }*/
   
  if (isset($_POST['nombre']))
  {
    $registroC= new RegistroController();
     
    $registroC->insertaRegistro($_POST,$_FILES);
  }
?>
   <div class="row">
  <div class="col-md-10">
     
        <h4>Registro Escolar</h4>

        <form id="Form_registro" method="POST" class="form-horizontal" >
          
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="nombre" id="nombre"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Apellido:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="apellido" id="apellido"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">ciudad natal:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="ciudad" id="ciudad"/>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Direccion actual:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="direccion" id="direccion"/>
            </div>
          </div>

     <div class="form-group">
      <label class="col-lg-3 control-label">Fecha apertura </label>
      <div class="col-lg-6">
      
        <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" name="fecha" id="fecha"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
      </div>
      
</div>




          <div class="form-group">
            <label class="col-lg-3 control-label" for="Foto">Foto:</label>
            <div class="col-lg-6">
                <input type="file" class="form-control" name="foto" id="foto"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" for="Especialidad">Especialidad:</label>
            <div class="col-lg-5">
              <select id="esspecialidad" name="esspecialidad" class="form-control" required>
                  <option value="" disabled selected>Seleccionar</option>
                  <option value="1">Informatica</option>
                  <option Value="2">mecanicaica</option>
                  <option value="3">mecatronica</option>
                  <option value="4">Industrial</option>
                  <option value="5">Bioquimica</option>
              </select>
            </div>
          </div>
         <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Numero telefonico:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="telefono" id="telefono"/>
            </div>
          </div>


          <input type="submit" name="Guardar" value="Guardar" />
        </form>  

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>