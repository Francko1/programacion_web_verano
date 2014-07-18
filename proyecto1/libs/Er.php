<?php

class Er {

	     //--------------------------------------------------------------------------------------------   
	public function valida_pdf($valor){
		$exp_reg = '%\.(pdf|PDF)$%i'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}


	 //--------------------------------------------------------------------------------------------   
	public function valida_nombre($valor){
		$exp_reg = '/^[a-zA-Z_áéíóúñ\s]*$/'; 
		if (preg_match($exp_reg, $valor)) {
			 return true;
		} else { 
		    return false;
		} 
	}




		 //--------------------------------------------------------------------------------------------   
	public function valida_peso($valor){
		$exp_reg = '/^[a-zA-Z_áéíóúñ\s]*$/'; 
		if (preg_match($exp_reg, $valor)) {
			 return false;
		} else { 
		    return true;
		} 
	}

			 //--------------------------------------------------------------------------------------------   
	public function valida_edad($valor){
		$exp_reg = '/^[a-zA-Z_áéíóúñ\s]*$/'; 
		if (preg_match($exp_reg, $valor)) {
			 return false;
		} else { 
		    return true;
		} 
	}


	//--------------------------------------------------------------------------------------------
	public function valida_pais($valor){
		$exp_reg = '/^d+$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	//--------------------------------------------------------------------------------------------
	public function valida_equipo($valor){
		$exp_reg = '/^d+$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	//-----------------------------------------------------------------------------------------
	public function valida_escudo($valor){
		$exp_reg = '(.*\.jpg)|(.*\.jpeg)|(.*\.png)|(.*\.gif)'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	//-----------------------------------------------------------------------------------------
	public function valida_foto($valor){
		$exp_reg = '(.*\.jpg)|(.*\.jpeg)|(.*\.png)|(.*\.gif)'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		//-----------------------------------------------------------------------------------------
	public function valida_bandera($valor){
		$exp_reg = '(.*\.jpg)|(.*\.jpeg)|(.*\.png)|(.*\.gif)'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
}

?>    