
<?php

include_once("conexion.php");


class CRUDreserva extends Cconexion
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

public function getregistros()
	  {
		return($this->registros);  
		}	
		
		
public function Consultardatos()
	{
	if($this->Usuario !="")	{
	$Sql="select * from registros where usuario='".$this->Usuario."';";
	}else	{
	$Sql="select * from registros";
	}
	$this->registros=pg_exec($this->conexion,$Sql);
	}


public function ingresar()
	{
		
		$this->Sql="insert into reservas values('".$this->Cliente."','".$this->Costo."','".$this->Parqueadero."','".$this->TipoVehiculo."');";
	$exito=pg_exec($this->conexion,$this->Sql);
	return("Exito al Reservar");
		
		 
	}
	public function Conectarbd()
	{
	parent::conectar();
	}




}

?>



