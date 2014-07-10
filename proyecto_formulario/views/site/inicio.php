<?php 
  session_start();
  include ('../layouts/header.php');
?>

  
<div class="container">
          <body>
  <div class="row">
      
                      
                        <div class="col-md-4">
                          <h3>valida acceso</h3>
                            <form class="registerForm">
                              <div class="form-group">
                                  <label>nombre estadio</label>
                                  <input type="text" class="form-control" name="username" />
                                  
                              </div>
                              <div class="form-group">
                                  <label>ciudad </label>
                                  <input type="text" class="form-control" name="email" />
                              </div>
                            </form>
                        </div>


    </div>

    <script type="text/javascript">
        $(document).ready(function() {
           $('.registerForm').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                 invalid: 'glyphicon glyphicon-remove',
                 validating: 'glyphicon glyphicon-refresh'
               },
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 4,
                        max: 10,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
    });</script>

    </div>


<?php include ('../layouts/footer.php'); ?>
