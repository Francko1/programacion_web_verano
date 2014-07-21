 
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
 <script type="text/javascript">
        $(document).ready(function() {
           $('#datetimepicker1').datetimepicker({
                       language: 'es'
                });
           $('.registerForm').bootstrapValidator({
               
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
            numero: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 1,
                        max: 10,
                         message: 'De 10 a 45 caracteres'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                       message: 'Ingrese solo valores numericos'
                    }
                }
            },
            clave: {
                validators: {
                    notEmpty: {
                         message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 10,
                        max: 45,
                        message: 'De 10 a 45 caracteres'
                    }, 
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                       message: 'La clave solo puede tener letras, numeros y guion bajo'
                    }
                }
            },
            volumen: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 10,
                        max: 45,
                         message: 'De 10 a 45 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                       message: 'El volumen solo puede tener letras, numeros y guion bajo'
                    }
                }
            },
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }

                }
            },
            portada: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            titulo: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            subtitulo: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            
          
        }
    });
    });</script>



  </body>
</html>