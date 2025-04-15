<?php
class Venta{

    private int $numero;
    private int $fecha;
    private int $refCliente;
    private array $refMotos; 
    private float $precioFinal;

    public function __construct($num,$date,$refC){

    $this->numero=$num;
    $this->fecha=$date;
    $this->refCliente=$refC;
    $this->refMotos=[]; 
    $this->precioFinal=0.0;

    }

    public function getNumero(){
        return $this->numero;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getRefCliente(){
        return $this->refCliente;
    }

    public function getRefMotos(){
        return $this->refMotos;
    }

    public function getPrecio(){
        return $this->precioFinal;
    }

    public function setNumero($nroNuevo){
    $this->numero=$nroNuevo;
    }

    public function setFecha($fechaNueva){
        $this->fecha=$fechaNueva;
    }

    public function setRefCliente($refClNueva){
        $this->refCliente=$refClNueva;
    }

    public function setRefMotos($refMoNueva){
        $this->refMotos=$refMoNueva;
    }

    public function setPrecio($precioFiNuevo){
        $this->precioFinal=$precioFiNuevo;
    }

    public function incorporarMoto($objMoto){
        $activa=$objMoto->getActiva();
        $resultado=false;
        $coleccionM=[];
        if ($activa==true){
            $coleccionM=$this->getRefMotos();
            $coleccionM[]=$objMoto;
            $this->setRefMotos($coleccionM);
            $precioMoto=$objMoto-> darPrecioVenta();
            $precioFinal=$this->getPrecio();
            $this->setPrecio($precioMoto+$precioFinal);
            $resultado=true;
        }
        return $resultado;
    }

    public function __toString(){
        $cadenaM="";
        $coleccionM=$this->getRefMotos();
        foreach($coleccionM as $moto){
            $cadenaM.=$moto."\n";
        }
       return "Numero: ". $this->getNumero()."\n".  
       "Fecha: ". $this->getFecha()."\n". 
       "Cliente: ". $this->getRefCliente()."\n". 
       "Coleccion Motos: ". $cadenaM."\n". 
       "Precio Final".$this->getPrecio(). "\n";
    }
}