
    </div><!--/.container-->
<!--FancyBox-->
  

    <script>
        $(document).ready(function() {
            $(".fancyy").fancybox({
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'width': 680,
                'height': 450,
                'type': 'iframe'
            });
        });
    </script>


 <script type="text/javascript">
   $(function () {
                $('#datetimepicker1').datetimepicker({
                    language: 'es',
                    
                });
            });
</script>

 <script type="text/javascript">
    
 


    $(document).ready(function() {
     
        $('#Form_registro').bootstrapValidator({
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
                 apellido: {
                    validators: {
                        notEmpty: {
                            message: 'El apellido es requerido.'
                        }
                    }
                },
            
                 ciudad: {
                    validators: {
                        notEmpty: {
                            message: 'El apellido es requerido.'
                        }
                    }
                },
            
                foto: {
                    validators: {
                        file: {
                            extension: 'jpeg,png,jpg',
                            type: 'image/jpeg,image/png,image/jpg',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'E archivo seleccionado no es valido'
                        }
                    }
                },

         
              
               telefono: {
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
            }
            }
        });
    });

  </script>

  <script type="text/javascript">
    
 


    $(document).ready(function() {


     
        $('#Form_Solicitud').bootstrapValidator({
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
                 apellido: {
                    validators: {
                        notEmpty: {
                            message: 'El apellido es requerido.'
                        }
                    }
                },
            
                 ciudad: {
                    validators: {
                        notEmpty: {
                            message: 'El apellido es requerido.'
                        }
                    }
                },
            
                foto: {
                    validators: {
                        file: {
                            extension: 'jpeg,png,jpg',
                            type: 'image/jpeg,image/png,image/jpg',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'E archivo seleccionado no es valido'
                        }
                    }
                },

         
              
               telefono: {
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
              sueldo: {
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
                celular: {
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
            }
            }
        });
    });



  </script>
<script>
    $(document).ready(function(){

        $.ionSound({
            sounds: [
                "beer_can_opening",
                "bell_ring",
                "branch_break",
                "water_droplet"
            ],
            path: "sounds/",
            multiPlay: true,
            volume: "1.0"
        });

        $("#b01").on("click", function(){
            $.ionSound.play("beer_can_opening");
        });
        $("#b02").on("click", function(){
            $.ionSound.play("bell_ring");
        });

    });
</script>
 
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrapValidator.min.js"></script>
    <script src="../js/ion.sound.min.js"></script>
  
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>
  <!-- All JS -->

<script src="../js/ion.sound.js"></script>





  </body>
 
</html>