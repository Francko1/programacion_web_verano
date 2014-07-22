<?php

class Registro extends Modelo{
    public $nombre_tabla = 'Registro';
    public $pk = 'idRegistro';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'ciudad'=>array(),
        'direccion'=>array(),
        'especialidad'=>array(),
        'foto'=>array(),
        'telefono'=>array(),

    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $ciudad;
    private $direccion;
    private $especialidad;
    private $foto;
    private $telefono;
       
    
    function Registro(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
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
    //**********************************************************
        public function get_apellido(){
        return $this->_apellido;
    } 

    public function set_apellido($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este apellido (".$valor.") no es valido";
        }
            $this->_apellido = trim($valor);
        
    }

    public function get_foto(){
        return $this->foto;
    }
    
    public function set_foto($valor){
  
        $er = new Er();
        
        if ( !$er->valida_imagen($valor['name']) ){
            $this->errores[] = "Esta foto (".$valor['name'].") no es valida";
        }
        $this->foto = trim($valor['name']);
    
    }


    public function get_telefono(){
        return $this->telefono;
    }

     public function set_telefono($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Esta telefono (".$valor.") no es valida";
        }

        $this->telefono = trim($valor);
    
    }

    public function get_ciudad(){
        return $this->_apellido;
    } 

    public function set_ciudad($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este ciudad (".$valor.") no es valido";
        }
            $this->_ciudad = trim($valor);
        
    }

     public function get_especialidad(){
        return $this->_especialidad;
    } 

    public function set_especialidad($valor){

        $er = new Er();
        
    
            $this->_especialidad= trim($valor);
        
    }

}

?>
