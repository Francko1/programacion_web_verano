
<?php


class Integrante extends Modelo{
   public $nombre_tabla = 'fifa.integrante';
   public $pk = 'idintegrante';
   
   
   public $atributos = array(
       'nombre'=>array(),
       'apellido'=>array(),
       'peso'=>array(),
       'estatura'=>array(),
       'foto'=>array(),
       'edad'=>array(),
       'idequipo'=>array(),
       
   );
   
   public $errores = array( );
   
       private $nombre;
       private $apellido;
       private $peso;
       private $estatura;
       private $foto;
       private $edad;
       private $idequipo;
      
   
   function Integrante(){
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

   //----------------------------------Valida apellido------------------------------------------- 
   public function get_apellido(){
       return $this->apellido;
   } 

   public function set_apellido($valor){


       $er = new Er();

       
       if ( !$er->valida_apellido($valor) ){
           $this->errores[] = "Este apellido (".$valor.") no es valido";
       }

          
       $this->apellido = trim($valor);

       
   }



  //----------------------------------Valida peso------------------------------------------- 
   public function get_peso(){
       return $this->peso;
   } 

   public function set_peso($valor){


       $er = new Er();

       
       if ( !$er->valida_peso($valor) ){
           $this->errores[] = "Este peso (".$valor.") no es valido";
       }

          
       $this->peso = trim($valor);

       
   }


  //----------------------------------Valida estatura------------------------------------------- 
   public function get_estatura(){
       return $this->estatura;
   } 

   public function set_estatura($valor){


       $er = new Er();

       
       if ( !$er->valida_estatura($valor) ){
           $this->errores[] = "Esta estatura (".$valor.") no es valido";
       }

          
       $this->estatura = trim($valor);

       
   }


//-------------------------------------Valida foto-----------------------------------------------
   public function get_foto(){
       return $this->foto;
   } 

   public function set_foto($valor){

       $er = new Er();
       
       if ( !$er->valida_foto($valor) ){
           $this->errores[] = "Este formato  (".$valor.") no es valido";
       }

              
       $this->foto = trim($valor);
       
   }


//-------------------------------------Valida edad-----------------------------------------------
   public function get_edad(){
       return $this->edad;
   } 

   public function set_edad($valor){

       $er = new Er();
       
       if ( !$er->valida_edad($valor) ){
           $this->errores[] = "Esta edad  (".$valor.") no es valido";
       }

              
       $this->edad = trim($valor);
       
   }




//-------------------------------------Valida equipo-----------------------------------------------
   public function get_idequipo(){
       return $this->idequipo;
   } 

   public function set_idequipo($valor){

       $er = new Er();
       
       if ( !$er->valida_equipo($valor) ){
           $this->errores[] = "Este ID  (".$valor.") no es valido";
       }

              
       $this->idequipo = trim($valor);
       
   }



   
   
   
}

?>
