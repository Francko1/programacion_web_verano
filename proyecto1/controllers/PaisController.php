<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;

		function __construct(){
			 
		}

		public function insertaPais($datos){
			echo "<pre>datos:";
    		print_r($datos);
    		echo "</pre>";
			$equipo = new Pais();
			$equipo->set_nombre($datos['nombre']);
			$equipo->set_bandera($datos['bandera']);
			$equipo->set_idcontinente($datos['idcontinente']);
			
			if (count($pais->errores)>0) {
				print_r($pais->errores);
				die();
			}
			$pais->inserta($pais->get_atributos());

		}
		

	}


?>
