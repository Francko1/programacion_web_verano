<?php
    class PaisController extends Pais{
        
        public $muestra_errores = false; //se pondra en cierto cuando encuentre un error
        function __construct(){

            parent::Pais();
        }
        
        public function insertaPais($datos,$archivos){
            echo "<pre>datos:";
            print_r($datos);
            print_r($archivos);
            echo "</pre>";
            //die();
           // $this = new Pais();

            $this->set_nombre($datos['nombre']);
            $this->set_bandera($archivos['bandera']);
            $this->set_idcontinente($datos['idcontinente']);

            if (count($this->errores)>0) {
                //print_r($pais->errores); //esto no lo debe ver el usuario
                $this->muestra_errores = true;

               //die();
            }
            else{
                move_uploaded_file($archivos['bandera']['tmp_name'],
                 "../images/".$archivos['bandera']['name']);

                   $this->inserta($this->get_atributos());
            }

         

        }

    }

?>