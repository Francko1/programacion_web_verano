<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;

		function __construct(){
			 
		}

		public function insertaEquipo($datos){
			echo "<pre>datos:";
    		print_r($datos);
    		echo "</pre>";
			$equipo = new Equipo();
			$equipo->set_nombre($datos['nombre']);
			$equipo->set_idpais($datos['idpais']);
			$equipo->set_escudo($datos['escudo']);
			
			if (count($equipo->errores)>0) {
				print_r($equipo->errores);
				die();
			}
			$equipo->inserta($equipo->get_atributos());

		}
		

	}


?>
