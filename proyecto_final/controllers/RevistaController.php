<?php
	class RevistaController extends Revista {
		
		public $muestra_errores = false;
		function __construct(){
			parent::Revista();
			
		}

		public function insertaRevista($datos,$archivos){
			echo "<pre> datos:";
		 	print_r($datos);
		 	print_r($archivos);
		  	echo"</pre>";
			//$this = new this();
			$this->set_nombre($datos['nombre']);
			$this->set_portada($archivos['portada']);//agregamos archivos por datos
			$this->set_fecha($datos['fecha']);
			$this->set_volumen($datos['volumen']);
			$this->set_titulo($datos['titulo']);
			$this->set_subtitulo($datos['subtitulo']);
			$this->set_numero($datos['numero']);
			$this->set_clave($datos['clave']);
			$this->set_directorio($datos['directorio']);
			$this->set_editorial($datos['editorial']);
			$this->set_id_status($datos['id_status']);
			
			if (count($this->errores)>0) {
                //print_r($pais->errores); //esto no lo debe ver el usuario
                $this->muestra_errores = true;

               //die();
            }
			 else{
                move_uploaded_file($archivos['portada']['tmp_name'],
                 "../images/".$archivos['portada']['name']);

                   $this->inserta($this->get_atributos());
            };
			
		}

	}
?>