<?php


class Controladora
{
	
		
var $Usuario;
var $Clave1;
var $Clave2;
var $Correo;
var $TipoVehiculo;
var $R;

public function __construct($Usuario,$Clave1,$Clave2,$Correo,$TipoVehiculo)
{
$this->Usuario= $Usuario;
$this->Clave1=$Clave1;
$this->Clave2=$Clave2;
$this->Correo=$Correo;
$this->TipoVehiculo=$TipoVehiculo;
$this->R="";

}

public function getR()
{
return($this->R);	
}	


public function Mostrar()
{
include_once("../Modelo/CRUDusuario.php");
$Obj1= new CRUDusuario('','','','','');
$Obj1->Conectarbd();
$Obj1->Consultardatos();
$this->R=$Obj1->getregistros();
	
}

public function ingresar()
{
include_once("../Modelo/CRUDusuario.php");
$Obj1= new CRUDusuario($this->Usuario,$this->Clave1,$this->Clave2,$this->Correo,$this->TipoVehiculo);
$Obj1->Conectarbd();
$this->R=$Obj1->ingresar();

	
}

public function __destruct()
{
	
$this->Usuario;
$this->Clave1;
$this->Clave2;
$this->Correo;
$this->TipoVehiculo;
$this->R;
}


	
}


?>