 
	 <div class="row">
	 	
	 	<div class="col-md-12">
	 		<hr>
	 		<p class="text-center">
	 			
	 			Clase programación web. <br><span class="glyphicon glyphicon-registration-mark"> </span> <?php echo date('Y'); ?>
	 			
	 		</p>
	 	</div>	
	 	
	 </div>

 </div> <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

     <!--<script src="../js/jquery-1.10.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
          Required JS -->
      <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>




     	<script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>

     	<script type="text/javascript" src="../js/moment.js"></script>

    	<script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>

    	<script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>


    	<script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   
  
    <script type="text/javascript" src="../js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="../js/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="../js/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="../js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script type="text/javascript" src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>
    <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>
    <script src="../js/main.js"></script>




  <!--Valida el formulario articulo-->
    <script>
    $(document).ready(function() {
        $('#form_articulo').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nombre: {
                    validators: {
                        notEmpty: {
                            message: 'El nombre es requerido.'
                        },
                           stringLength: {
                        min: 1,
                        max: 30,
                         message: 'De 10 a 45 caracteres'
                        },
                        regexp: {
                          regexp: /^[a-z]+$/,
                            message: 'Ingrese solo letras'
                        }

                     
                    }
                },
                archivo_pdf: { 
                    validators: {
                       
                            notEmpty: {
                            message: 'The selected file is not valid'
                        }
                    }
                }
            
        });
    });
  </script>




  </body>
</html>