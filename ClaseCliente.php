<?php
class Cliente{

    private string $nombre;
    private string $apellido;
    private string $estado;
    private string $tipoDoc;
    private int $nroDoc;

    public function __construct($nom,$ap,$est,$tipoDocu,$nroDocu){

       $this->nombre=$nom;
       $this->apellido=$ap;
       $this->estado=$est;
       $this->tipoDoc=$tipoDocu; 
       $this->nroDoc=$nroDocu;

    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }
    
    public function getEstado(){
        return $this->estado;
    }

    public function getTipoDoc(){
        return $this->tipoDoc;
    }

    public function getNroDoc(){
        return $this->nroDoc;
    }

    public function setNom($nomNuevo){
         $this->nombre=$nomNuevo;
    }

    public function setApellido($apNuevo){
        $this->apellido=$apNuevo;
    }

    public function setEstado($estadoNuevo){
        $this->estado=$estadoNuevo;
    }

    public function setTipoDoc($tipoDocNuevo){
      $this->tipoDoc=$tipoDocNuevo;
    }

    public function setNroDoc($nroDocNuevo){
        $this->nroDoc= $nroDocNuevo;
    }

    public function __toString(){
        return "su nombre es: " .$this->getNombre(). "y su apellido es: ". $this->getApellido();
    }
   
}



