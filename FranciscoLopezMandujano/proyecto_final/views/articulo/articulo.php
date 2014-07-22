<?php 
  session_start();
      
    include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Articulo.php');
      include ('../../controllers/ArticuloController.php');
      include ('../../libs/Er.php');
      include ('../layouts/header.php');


 $articulo =new ArticuloController();

  if (isset($_POST['nombre'])){
   
    $articulo->insertaArticulo($_POST,$_FILES);

  }
 ?>
<div class="container">
    <div class="row">
            <div class="col-md- col-md-offset-3">
            <?php 
      if ($articulo->muestra_errores) {
    ?>    
       <div class="alert alert-danger">

          <?php //foreach => leer arreglos 
            foreach ($articulo->errores as $value) {
                echo "<p>error: $value</p>";
             
            }


           ?>

       </div>
    <?php 
      }
      else{

        
      }
     ?>


              <form class="form-horizontal "  action="" method="POST" id="form_articulo" enctype="multipart/form-data">
                  <label for="nombre" >Nombre del articulo</label>
                  <input type="text" class="form-control" id="nombre"  name="nombre"   placeholder="nombre" value="<?php echo $articulo->get_nombre(); ?>">
                  <!--********************************************-->
                  <label for="resumen" >Resumen</label>
                  <input type="text" class="form-control"   name="resumen"  id="resumen" placeholder="resumen">
                  <!--********************************************-->

                  <label for="abstract" >Abstract</label>
                  <input type="text" class="form-control" id="abstract"  name="abstract"   placeholder="abstract" value="<?php echo $articulo->get_abstract(); ?>" />
                  <!--********************************************-->

                  <label for="introduccion" >Introduccion</label>
                  <input type="text" class="form-control" name="introduccion"  id="introduccion" placeholder="introduccion" value="<?php echo $articulo->get_introduccion(); ?>" />
                  <!--********************************************-->

                  <label for="metodologia" >Metodologia</label>
                  <input type="text" class="form-control" name="metodologia"  id="metodologia" placeholder="metodologia">
                  <!--********************************************-->

                  <label for="contenido" >Contenido</label>
                  <input type="text" class="form-control" name="contenido"  id="contenido" placeholder="contenido">
                  <!--********************************************-->

                  <label for="archivo" >Archivo (.pdf)</label>
                  <input type="file" class="form-control" name="archivo_pdf"  id="archivo_pdf" placeholder="archivo_pdf">
                  <!--********************************************-->

                   <div class="form-group">
                        <label class="col-lg-3 control-label">Fecha creacion</label>
                        <div class="col-lg-6">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" id="fecha_creacion" name="fecha_creacion"/>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                           
                        </div>
                        
                        </div>
                    </div>

                 <div class="form-group">
                    <label class="col-lg-3 control-label">ID. Status : </label>
                    <select class="col-lg-3" id="id_status" name="id_status">
                      <option value="10">10</option>
                       <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>

                      
                    </select>
                  </div>

                  <label for="conclusiones" >Conclusiones</label>
                  <input type="text" class="form-control" name="conclusiones"  id="conclusiones" placeholder="conclusiones">
                  <!--********************************************-->

                  <label for="agradecimientos" >Agradecimientos</label>
                  <input type="text" class="form-control" name="agradecimientos"  id="agradecimientos" placeholder="agradecimientos">
                  <!--********************************************-->

                  <label for="referencias" >Referencias</label>
                  <input type="text" class="form-control" name="referencias"  id="referencias" placeholder="referencias">
                  <!--********************************************-->
                  <div align="center">
                      <button type="submit" class="btn btn-default">Guardar</button>
                  </div>




                  
              </form>
            </div>

    </div>
</div>




<?php include ('../layouts/footer.php'); ?>