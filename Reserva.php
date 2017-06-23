<?php
class Reserva
{
var $Idreserva;		
var $Cliente;
var $Costo;
var $Parqueadero;
var $TipoVehiculo;

public function __construct($Idreserva,$Cliente,$Costo,$Parqueadero,$TipoVehiculo)
{
$this->Idreserva=$Idreserva;
$this->Cliente=$Cliente;
$this->Costo=$Costo;
$this->Parqueadero=$Parqueadero;
$this->TipoVehiculo=$TipoVehiculo;
}

//set  y get
public function getIdreserva()
{
return($this->Idreserva);	
}
public function getCliente()
{
return($this->Cliente);	
}
public function getCosto()
{
return($this->Costo);	
}
public function getParqueadero()
{
return($this->Parqueadero);	
}
public function getTipoVehiculo()
{
return($this->TipoVehiculo);	
}



}


?>