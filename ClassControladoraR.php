<?php


class ControladoraR
{
	
var $Idreserva;		
var $Cliente;
var $Costo;
var $Parqueadero;
var $TipoVehiculo;
var $R;

public function __construct($Idreserva,$Cliente,$Costo,$Parqueadero,$TipoVehiculo)
{
$this->Idreserva=$Idreserva;
$this->Cliente=$Cliente;
$this->Costo=$Costo;
$this->Parqueadero=$Parqueadero;
$this->TipoVehiculo=$TipoVehiculo;
$this->R="";

}

public function getR()
{
return($this->R);	
}	


public function Mostrar()
{
include_once("../Modelo/CRUDreserva.php");
$Obj1= new CRUDreserva('','','','','');
$Obj1->Conectarbd();
$Obj1->Consultardatos();
$this->R=$Obj1->getregistros();
	
}

public function ingresar()
{
include_once("../Modelo/CRUDreserva.php");
$Obj1= new CRUDreserva($this->Idreserva,$this->Cliente,$this->Costo,$this->Parqueadero,$this->TipoVehiculo);
$Obj1->Conectarbd();
$this->R=$Obj1->ingresar();

	
}



public function __destruct()
{
	
$this->Idreserva;
$this->Cliente;
$this->Costo;
$this->Parqueadero;
$this->TipoVehiculo;
$this->R;
}


	
}


?>