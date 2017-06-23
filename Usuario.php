<?php
class Usuario
{
var $Usuario;
var $Clave1;
var $Clave2;
var $Correo;
var $TipoVehiculo;
	
public function __construct($Usuario,$Clave1,$Clave2,$Correo,$TipoVehiculo)
{
$this->Usuario=$Usuario;
$this->Clave1=$Clave1;
$this->Clave2=$Clave2;
$this->Correo=$Correo;
$this->TipoVehiculo=$TipoVehiculo;

}
//set  y get
public function getUsuario()
{
return($this->Usuario);	
}
public function getClave1()
{
return($this->Clave1);	
}
public function getClave2()
{
return($this->Clave2);	
}
public function getCorreo()
{
return($this->Correo);	
}
public function getTipoVehiculo()
{
return($this->TipoVehiculo);	
}



}


?>