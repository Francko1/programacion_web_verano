 
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


      <!--Valida el formulario equipo-->
    <script>
    $(document).ready(function() {
        $('#form_equipo').bootstrapValidator({
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
                escudo: { 
                    validators: {
                        file: {
                            extension: 'jpeg,png.jpg',
                            type: 'image/jpg,image/jpeg,image/png',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'The selected file is not valid'
                        }
                    }
                }
            }
        });
    });
  </script>

  <!--Validación de continente-->
  
<script>
$(document).ready(function() {
    $('#form_continente')
        .bootstrapValidator({
            // The disabled elements are excluded
            // Hidden elements (including the rating star) are included
            excluded: ':disabled',
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
                     
                        regexp: {
                          regexp: /^[aA-zZ]+$/,
                            message: 'Ingrese solo letras'
                        }

                     
                    }
                }
                
                
            }
        }); }); 

</script>

<script>
    $(document).ready(function() {
        $('#form_estadio').bootstrapValidator({
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
                }
            }
        });
    });
  </script>

<!--valida integrante-->

<script>
      $(document).ready(function() {
          $('#form_integrante').bootstrapValidator({
                  
                  excluded: [':disabled'],
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
                              }
                          }
                      },
                      id_pais: {
                          validators: {
                              notEmpty: {
                                  message: 'El pais es necesario'
                              }
                          }
                      },
                      apellido: {
                          validators: {
                              notEmpty: {
                                  message: 'El apellido es requerido.'
                              }
                          }
                      },
                      peso: {
                          validators: {
                              integer: {
                                  message: 'solo enteros'
                              }
                          }
                      },
                      estatura: {
                          validators: {
                              integer: {
                                  message: 'solo enteros'
                              }
                          }
                      },
                      edad: {
                          validators: {
                              integer: {
                                  message: 'solo enteros'
                              }
                          }
                      },
                      foto: {
                          validators: {
                              file: {
                                  extension: 'jpeg,png',
                                  type: 'image/jpeg,image/png',
                                  maxSize: 2048 * 1024,   // 2 MB
                                  message: 'The selected file is not valid'
                              }
                          }
                      },
                  }
              });
      });
      </script>

<!--valida pais-->
    <script>
    $(document).ready(function() {
        $('#form_pais').bootstrapValidator({
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
                escudo: { 
                    validators: {
                        file: {
                            extension: 'jpeg,png',
                            type: 'image/jpeg,image/png',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'The selected file is not valid'
                        }
                    }
                }
            }
        });
    });
  </script>



  </body>
</html>