<?php
	class ContinenteController extends Continente{
		
		public $muestra_errores = false;

		function __construct(){
		
		}

		public function insertaContinente($datos){
			echo "<pre>datos:"; 
    		print_r($datos);
    		echo "</pre>";
			$continente = new Continente();

			$continente->set_nombre($datos['nombre']);

		if (count($continente->errores)>0) {
				print_r($continente->errores);
				
				die();
			}

			$continente->inserta($continente->get_atributos());

		}
		

	}


?>
