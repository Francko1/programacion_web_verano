<?php
    class PaisController {
        
        public $muestra_errores = false;
        function __construct(){
        }
        
        public function insertaPais($datos,$archivos){
            echo "<pre>datos:";
            print_r($datos);
            print_r($archivos);
            echo "</pre>";
            //die();
            $pais = new Pais();
            $pais->set_nombre($datos['nombre']);
            $pais->set_bandera($archivos['bandera']);
            $pais->set_idcontinente($datos['idcontinente']);

            if (count($pais->errores)>0) {
                print_r($pais->errores);
                die();
            }
            else{
                move_uploaded_file($archivos['bandera']['tmp_name'],
                 "../images/".$archivos['bandera']['name']);
            }

            $pais->inserta($pais->get_atributos());

        }

    }

?>