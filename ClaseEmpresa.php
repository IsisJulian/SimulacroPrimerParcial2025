<?php
class Empresa{

    private string $nombreOficial;
    private string $direccion; 
    private array $coleccionC;
    private array $coleccionM;
    private array $coleccionV;

    public function __construct($nomOf, $dire, $coleC, $coleM, $coleV){

        $this->nombreOficial=$nomOf;
        $this->direccion=$dire;
        $this->coleccionC=$coleC;
        $this->coleccionM=$coleM;
        $this->coleccionV=$coleV;
    }

    public function getNomOf(){
        return $this->nombreOficial;
    }

    public function getDire(){
        return $this->direccion;
    }

    public function getColeC(){
        return $this->coleccionC;
    }

    public function getColeM(){
        return $this->coleccionM;
    }

    public function getColeV(){
        return $this->coleccionV;
    }

    public function setNomOf($nomOfNueva){
         $this->nombreOficial=$nomOfNueva;
    }

    public function setDire($direNueva){
         $this->direccion=$direNueva;
    }

    public function setColeC($coleCNueva){
         $this->coleccionC=$coleCNueva;
    }

    public function setColeM($coleMNueva){
         $this->coleccionM=$coleMNueva;
    }

    public function setColeV($colVNueva){
         $this->coleccionV=$colVNueva;
    }

     public function __toString() {
        $clientes = $this->getColeC();
        $motos = $this->getColeM();
        $ventas = $this->getColeV();

        $cadenaC = "";
        foreach ($clientes as $cliente) {
            $cadenaC .= $cliente . "\n";
        }

        $cadenaM = "";
        foreach ($motos as $moto) {
            $cadenaM .= $moto . "\n";
        }

        $cadenaV = "";
        foreach ($ventas as $venta) {
            $cadenaV .= $venta . "\n";
        }

        $cadena = (
            "Denominación: " . $this->getNomOf() . "\n" .
            "Dirección: " . $this->getDire() . "\n" .
            "Clientes:\n" . $cadenaC .
            "Motos:\n" . $cadenaM .
            "Ventas:\n" . $cadenaV
        );

        return $cadena;
    }

   

    public function retornarMoto($codigoMotoIngresado){ 
        $coleccionM=$this->getColeM();
        $motoEncontrada=null;
        foreach ($coleccionM as $unaMoto){
            $codigoMoto=$unaMoto->getCodigo();
            if($codigoMoto==$codigoMotoIngresado){
                $motoEncontrada=$unaMoto;
            }
        }
        return $motoEncontrada;
    }

    public function registrarVenta($colCodigosMoto, $objCliente){
        $importeFinal=0;
        $colMoto=[];
        $objVenta=null;

        if ($objCliente->getEstado()){
            foreach($colCodigosMoto as $codigoMoto){
                $objMoto=$this->retornarMoto($codigoMoto);
                if ($objMoto != null && $objMoto->getActiva()){
                    $colMoto= array_push ($colMoto, $objMoto);
                }
            }
            
            if (count($colMoto) > 0) {
          
                $cantVenta= count($this->getColeV());
                $objVenta= new Venta ($cantVenta+1,date("Y"),$objCliente);
                foreach($colMoto as $unaMoto){
                    $objVenta->incorporarMoto($unaMoto);
                }
                $importeFinal=$objVenta->getPrecio();
            }

        }
        return $importeFinal;
    }

    public function retornarVentasXCliente($tipo,$nroDoc){
        $colVentaCl=[];
        $colVenta=$this->getColeC();
        foreach ($colVenta as $objVenta){
            $objCliente=$objVenta->getRefCliente();
            if ($objCliente->getTipoDoc()== $tipo && $objCliente->getNroDoc()== $nroDoc){
                $colVentaCl=array_push($colVentaCl,$objVenta);
            }
        }
        return$colVentaCl;
    }
}
