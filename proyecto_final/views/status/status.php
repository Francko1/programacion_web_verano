<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Status.php');
  include ('../../controllers/StatusController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['status'])){
  	
  	$statusC=new StatusController();
  	$statusC->insertaStatus($_POST);

	}

?>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
          <form class="form-horizontal registerForm" id="form_status" action="" method="POST">
            <br>
          
            <br>
            <div class="form-group">
                  
                  <div class="col-lg-6" align="right">
                    <h2>Status</h2>
                      <input type="text" class="form-control username" name="status" id="status" align="rigth" />
                      <br>
                       <button type="submit" class="btn btn-default">Guardar</button>
                  </div>
            </div>





            <br>
           
            <br>
            <br>
          </form>
  </div>
</div>


<?php include ('../layouts/footer.php'); ?>