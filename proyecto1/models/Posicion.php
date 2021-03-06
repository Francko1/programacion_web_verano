
<?php


class Equipo extends Modelo{
   public $nombre_tabla = 'fifa.equipo';
   public $pk = 'idequipo';
   
   
   public $atributos = array(
       'nombre'=>array(),
       'idpais'=>array(),
       'escudo'=>array(),
   );
   
   public $errores = array( );
   
   private $nombre;
   private $idpais;
   private $escudo;
      
   
   function Equipo(){
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


  //----------------------------------Valida abreviatura------------------------------------------- 
   public function get_abreviatura(){
       return $this->abreviatura;
   } 

   public function set_abreviatura($valor){


       $er = new Er();

       
       if ( !$er->valida_abreviatura($valor) ){
           $this->errores[] = "Este nombre (".$valor.") no es valido";
       }

          
       $this->abreviatura = trim($valor);

       
   }

   
}

?>
