<?php
    class RegistroController extends Registro{
        
        public $muestra_errores = false; //se pondra en cierto cuando encuentre un error
        function __construct(){

            parent::Registro();
        }
        
        public function insertaRegistro($datos,$archivos){
            echo "<pre>datos:";
            print_r($datos);
            print_r($archivos);
            echo "</pre>";
            //die();
           // $this = new Pais();

            $this->set_nombre($datos['nombre']);
            $this->set_nombre($datos['apellido']);
            $this->set_nombre($datos['ciudad']);
            $this->set_nombre($datos['direccion']);
            $this->set_foto($archivos['foto']);
            $this->set_idcontinente($datos['especialidad']);
            $this->set_nombre($datos['telefono']);

            if (count($this->errores)>0) {
                //print_r($pais->errores); //esto no lo debe ver el usuario
                $this->muestra_errores = true;

               //die();
            }
            else{
                move_uploaded_file($archivos['foto']['tmp_name'],
                 "../images/".$archivos['foto']['name']);

                   $this->inserta($this->get_atributos());
            }

         

        }

    }

?>