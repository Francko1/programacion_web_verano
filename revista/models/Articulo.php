<?php

class Articulo extends Modelo{
    public $nombre_tabla = 'articulo';
    public $pk = 'id_articulo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'resumen'=>array(),
        'abstract'=>array(),
        'introduccion'=>array(),
        'metodologia'=>array(),
        'contenido'=>array(),
        'archivo_pdf'=>array(),
        'fecha_creacion'=>array(),
        'id_status'=>array(),
        'conclusiones'=>array(),
        'agradecimientos'=>array(),
        'referencias'=>array(),
        
    );
    
    public $errores = array( );
    
    private $nombre;
    private $resumen;
    private $abstract;
    private $introduccion;
    private $metodologia;
    private $contenido;
    private $fecha_creacion;
    private $archivo_pdf;
    private $id_status;
    private $conclusiones;
    private $agradecimientos;
    private $referencias;
    
       
    
    function Articulo(){
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
      $this->nombre = trim($valor);
    }

    public function get_resumen(){
        return $this->resumen;
    } 

    public function set_resumen($valor){

            $this->resumen = $valor;
      $this->resumen = trim($valor);  
    }
    
 //--------------------------------------------------------------------------------------------   
    

    public function get_abstract(){
        return $this->abstract;
    } 

    public function set_abstract($valor){

            $this->abstract = $valor;
       $this->abstract = trim($valor); 
    }

 //--------------------------------------------------------------------------------------------   
    
    public function get_introduccion(){
        return $this->introduccion;
    } 

    public function set_introduccion($valor){

            $this->introduccion = $valor;
        $this->introduccion = trim($valor);
    }
 //--------------------------------------------------------------------------------------------   
    

    public function get_metodologia(){
        return $this->metodologia;
    } 

    public function set_metodologia($valor){

            $this->metodologia = $valor;
        $this->metodologia = trim($valor);
    }
 //--------------------------------------------------------------------------------------------   
    

    public function get_(){
        return $this->contenido;
    } 

    public function set_contenido($valor){

            $this->contenido = $valor;
        $this->contenido = trim($valor);
    }
 //--------------------------------------------------------------------------------------------   
    

    public function get_fecha_creacion(){
        return $this->fecha_creacion;
    } 

    public function set_fecha_creacion($valor){

            $this->fecha_creacion = $valor;
        $this->fecha_creacion = trim($valor);
    }
 //--------------------------------------------------------------------------------------------   
    

    public function get_archivo_pdf(){
        return $this->archivo_pdf;
    } 

    public function set_archivo_pdf($valor){

            $this->archivo_pdf = $valor;
        $this->archivo_pdf  = trim($valor);
    }

 //--------------------------------------------------------------------------------------------   
    
    public function get_id_status(){
        return $this->id_status;
    }
    
    public function set_id_status($valor){
        $er = new Er();
        
        if ( !$er->valida_idnum($valor) ){
            $this->errores[] = "Este id (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from articulo where id_status = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este id (".$valor.") ya esta registrado"; 
        }else{
            $this->id_status = trim($valor);
        }
    }
 //--------------------------------------------------------------------------------------------   
    

    public function get_conclusiones(){
        return $this->conclusiones;
    } 

    public function set_conclusiones($valor){

            $this->conclusiones = $valor;
        $this->conclusiones = trim($valor);
    }
 //--------------------------------------------------------------------------------------------   
    

    public function get_agradecimientos(){
        return $this->agradecimientos;
    } 

    public function set_agradecimientos($valor){

            $this->agradecimientos = $valor;
        $this->agradecimientos  = trim($valor);
    }

 //--------------------------------------------------------------------------------------------   
    
    
    public function get_referencias(){
        return $this->referencias;
    } 

    public function set_referencias($valor){

            $this->referencias = $valor;
        $this->referencias = trim($valor);
    }    


    
    
    
}

?>