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

 ?>

<?php 
  if (isset($_POST['nombre'])){
    $articulo =new ArticuloController();
    $articulo->insertaArticulo($_POST);

  }
 ?>
<div class="container">
    <div class="row">
            <div class="col-md- col-md-offset-3">
              <form class="form-horizontal "  action="" method="POST" id="form_articulo">
                  <label for="nombre" >Nombre del articulo</label>
                  <input type="text" class="form-control" id="nombre"  name="nombre"  id="nombre" placeholder="nombre">
                  <!--********************************************-->
                  <label for="resumen" >Resumen</label>
                  <input type="text" class="form-control"   name="resumen"  id="resumen" placeholder="resumen">
                  <!--********************************************-->

                  <label for="abstract" >Abstract</label>
                  <input type="text" class="form-control" id="abstract"  name="abstract"   placeholder="abstract">
                  <!--********************************************-->

                  <label for="introduccion" >Introduccion</label>
                  <input type="text" class="form-control" name="introduccion"  id="introduccion" placeholder="introduccion">
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
                      <option value="6">1</option>
                      <option value="7">2</option>
                      <option value="8">3</option>
                      <option value="9">4</option>
                      <option value="10">5</option>
                      <option value="8">8</option>

                      
                    </select>
                  </div>

                  <label for="conclusiones" >Conclusiones</label>
                  <input type="text" class="form-control" name="conclusiones"  id="conclusiones" placeholder="conclusiones">
                  <!--********************************************-->

                  <label for="agradecientos" >Agradecientos</label>
                  <input type="text" class="form-control" name="agradecientos"  id="agradecientos" placeholder="agradecientos">
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