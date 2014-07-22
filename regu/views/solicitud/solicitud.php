<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Solicitud.php');
  include ('../../controllers/SolicitudController.php');
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
    $solicitudC= new SolicitudController();
     
    $solicitudC->insertaSolicitud($_POST,$_FILES);
  }
?>
   <div class="row">
  <div class="col-md-10">
     
        <h4>Solicitud de trabajo</h4>

        <form id="Form_Solicitud" method="POST" class="form-horizontal" >
          
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="nombre" id="nombre"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="apellido">Apellido:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="apellido" id="apellido"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="ciudad">ciudad natal:</label>
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
            <label class="col-lg-3 control-label" for="sueldo">Sueldo que quiere ganar:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="sueldo" id="sueldo"/>
            </div>
          </div>

     <div class="form-group">
      <label class="col-lg-3 control-label">Fecha de envio </label>
      <div class="col-lg-6">
      
        <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" name="fecha" id="fecha"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
      </div>
      
</div>

           <div class="form-group">
            <label class="col-lg-3 control-label" for="recomendacion">recomendacion(PDF):</label>
            <div class="col-lg-6">
                <input type="file" class="form-control" name="recomendacion" id="recomendacion"/>
            </div>
          </div>




          <div class="form-group">
            <label class="col-lg-3 control-label" for="Foto">Foto:</label>
            <div class="col-lg-6">
                <input type="file" class="form-control" name="foto" id="foto"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" for="area">area de trabajo:</label>
            <div class="col-lg-5">
              <select id="area" name="area" class="form-control" required>
                  <option value="" disabled selected>Seleccionar</option>
                  <option value="1">fuente de sodas</option>
                  <option Value="2">Llantas</option>
                  <option value="3">Cajas</option>
                  <option value="4">Electronicos</option>
                  <option value="5">Gerencia</option>
              </select>
            </div>
          </div>
         <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Numero telefonico:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="telefono" id="telefono"/>
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-lg-3 control-label" for="celular">Numero celular:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="celular" id="celular"/>
            </div>
          </div>

          
<div style="position: relative; padding: 100px;">

    <button id="b01">Play "beer_can_opening"</button>
    <button id="b02">Play "bell_ring"</button>

</div>

          <input type="submit" name="Guardar" value="Guardar" id="b1" />
        </form>  

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>