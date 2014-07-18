<?php


class Pais extends Modelo{
   public $nombre_tabla = 'pais';
   public $pk = 'idpais';
   
   
   public $atributos = array(
       'nombre'=>array(),
       'bandera'=>array(),
       'idcontinente'=>array(),
   );
   
   public $errores = array( );
   
   private $nombre;
   private $idcontinente;
   private $bandera;
      
   
   function Pais(){
       parent::Modelo();
   }
   
   public function get_atributos(){
       $rs = array();
       foreach ($this->atributos as $key => $valor) {
           $rs[$key]=$this->$key;
       }
       return $rs;
   }
   
  //----------------------------------Valida nombre------------------------------------------- 
   public function get_nombre(){
       return $this->nombre;
   } 

   public function set_nombre($valor){


       $er = new Er();

       
       if ( !$er->valida_nombre($valor) ){
           $this->errores[] = "Este nombre (".$valor.") no es valido";
       }

          
       $this->nombre = trim($valor);

       
   }




//-------------------------------------Valida bandera-----------------------------------------------
   public function get_bandera(){
       return $this->bandera;
   } 

   public function set_bandera($valor){

       $er = new Er();
       
       if ( !$er->valida_bandera($valor) ){
           $this->errores[] = "Este formato  (".$valor.") no es valido";
       }

              
       $this->bandera = trim($valor);
       
   }


   
   
   
}

?>
