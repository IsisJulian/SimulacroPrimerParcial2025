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

    public function __toString(){
        return "Su nombre es: {$this->nombre} y su apellido: {$this->apellido}";
    }

}

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

    public function __toString(){
        return "Su nombre es: {$this->codigo} y su apellido: {$this->costo}";
        //me falta completar con todos los datos 
    }

    public function darPrecioVenta(){
        if ($this->activa == false) {
            $venta=-1;
        }else{
            $venta= $this->costo + $this->costo * ($this->anioFab* $this->porcentaje);
            //tendria que sacar los años desde que se fabrico hasta el actual? el año - 2025?
        }
    }

}

class Venta{

    private int $numero;
    private int $fecha;
    private int $refCliente;
    private int $refMotos; 
    private float $precioFinal;

    public function __construct($num,$date,$refC,$refM,$precio){

       $this->numero=$num;
       $this->fecha=$date;
       $this->refCliente=$refC;
       $this->refMotos=$refM; 
       $this->precioFinal=$precio;

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

    public function __toString(){
        return "Su nombre es: {$this->numero} y su apellido: {$this->fecha}";
    }

    public function incorporarMoto($objMoto){
        // supongo que el param obj sale del test y la coleccion moto no se donde debe crearse. Se deberia llamar al metodo darPrecioVenta???
    }

}

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

    public function __toString()
    {
        return "El nombre es: {$this->nombreOficial} y su dire es: {$this->direccion}";
    }

    public function retornarMoto($codigoMoto){
        // tendria que ir un foreach $coleccionM as $codigoMoto y tendria que ir un return
    }

    public function registrarVenta($colCodigosMoto, $objCliente){
        //y se incorpora a la colección de motos de la instancia ESTO NO SE COMO SE HACE. 
    }

    public function retornarVentasXCliente($tipo,$numDoc){
        foreach ($numDoc as $coleccionV){ //no se si es lo correcto 
             return "Las ventas realizadas son: ";
        }
    }
}
