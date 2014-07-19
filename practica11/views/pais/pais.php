<?php 
  include ('../../libs/security.php');
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php');
  include ('../../controllers/PaisController.php');
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
   $paisC= new PaisController();
  if (isset($_POST['nombre']))
  {
   
    $paisC->insertaPais($_POST,$_FILES);
  }
?>
    <div class="row">
  <div class="col-md-6">

  <!--meterlo a una funcion-->
      <?php 
      if ($paisC->muestra_errores) {
    ?>    
       <div class="alert alert-danger">

          <?php //foreach => leer arreglos 
            foreach ($paisC->errores as $value) {
                echo "<p>error: $value</p>";
             
            }


           ?>

       </div>
    <?php 
      }
      else{

        
      }
     ?>
        <h4>Pais:</h4>

        <form id="Form_pais" method="POST" class="form-horizontal" ENCTYPE="multipart/form-data">
          
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $paisC->get_nombre(); ?>" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="bandera">Bandera:</label>
            <div class="col-lg-6">
                <input type="file" class="form-control" name="bandera" id="bandera"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" for="idcontinente">Continente:</label>
            <div class="col-lg-5">
            <?php echo $paisC->getDropDown ('continente' ,'idcontinente' , 'idcontinente') ?>
            </div>
          </div>
          <input type="submit" name="Guardar" value="Guardar" />
        </form>  



      </div>
        <div class="col-md-6" align="rigth">
          <h2 class="text-center">lista de registro pais</h2>
          <?php echo  $paisC->show_grid(); ?>
        </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>