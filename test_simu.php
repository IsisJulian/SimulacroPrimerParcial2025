<?php
include "simu.php";
echo "hola";
$objCliente1= new Cliente("Julian", "Bravo", "activo", "dni",42166032);

$objCliente2= new Cliente("Alvarez", "Enzo", "bajo", "pasaporte",42177032);

$moto1= new Moto(11,2230000,2022,"Benelli Imperiale 400",85,true);

$moto2= new Moto(12,584000,2021,"Zanella Zr 150 Ohc",70,true);

$moto3= new Moto(13,999900,2023,"Zanella Patagonian Eagle 250",55,false);

$empresa= new Empresa("Alta Gama", "Av Arg 123",[$moto1,$moto2,$moto3],[$objCliente1,$objCliente2],[]);

// a partir del punto 5 no se como invocar a los metodos se me ocurre $metodo=regirtrarVentas($codMoto, $objCl)











