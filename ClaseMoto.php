<?php
class Moto{
    private int $codigo;
    private int $costo;
    private int $anioFab;
    private string $descripcion;
    private float $porcentaje;
    private bool $activa;

    public function __construct($cod,$cost,$anio,$descri,$porce,$act){

       $this->codigo=$cod;
       $this->costo=$cost;
       $this->anioFab=$anio;
       $this->descripcion=$descri; 
       $this->porcentaje=$porce;
       $this->activa=$act;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getCosto(){
        return $this->costo;
    }
    
    public function getAnioFab(){
        return $this->anioFab;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getPorcentaje(){
        return $this->porcentaje;
        //creo que tendria que hacer la operacion aca del porcentaje 
    }

    public function getActiva(){
        return $this->activa;
    }

    public function setCodigo($codNuevo){
        $this->codigo=$codNuevo;
    }

    public function setCosto($costoNuevo){
         $this->costo=$costoNuevo;
    }
    
    public function setAnioFab($nuevoAnio){
     $this->anioFab=$nuevoAnio;
    }

    public function setDescripcion($descripcionNueva){
         $this->descripcion=$descripcionNueva;
    }

    public function setPorcentaje($porcentajeNuevo){
     $this->porcentaje=$porcentajeNuevo; 
        //creo que tendria que hacer la operacion aca del porcentaje 
    }

    public function setActiva($nuevaActiva){
     $this->activa=$nuevaActiva; 
    }


    public function __toString(){
        return "Su nombre es:". $this->getCodigo(). "y su apellido: ".$this->getCosto();
        //me falta completar con todos los datos 
    }

    public function darPrecioVenta(){ 
        $venta=-1;
        if ($this->getActiva() == false) {
            $venta;
        }else{
            $venta= $this->getCosto() + $this->getCosto() * (($this->getAnioFab() - (int)date("Y")) * $this->getPorcentaje());
        }
     return $venta;    
    }

}