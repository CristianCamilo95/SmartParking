
<?php

include_once("conexion.php");


class CRUDusuario extends Cconexion
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
		
		$this->Sql="insert into registros values('".$this->Usuario."' ,'".$this->Clave1."','".$this->Clave2."','".$this->Correo."','".$this->TipoVehiculo."');";
	$exito=pg_exec($this->conexion,$this->Sql);
	return("Exito al Ingresar");
		
		 
	}
	public function Conectarbd()
	{
	parent::conectar();
	}




}












/*include_once("conexion.php");

class CrudUsuario extends Cconexion
{
	
var $Sql;
	
public function __construct($Usuario,$Clave1,$Clave2,$Correo,$Sexo,$Fecha,$Ciudad,$Pais,$Foto)
{
$this->Usuario=$Usuario;
$this->Clave1=$Clave1;
$this->Clave2=$Clave2;
$this->Correo=$Correo;
$this->Sexo=$Sexo;
$this->Fecha=$Fecha;
$this->Ciudad=$Ciudad;
$this->Pais=$Pais;
$this->Foto=$Foto;
$this->Sql="";
}	

public function getregistros()
	  {
		return($this->registros);  
		}	
		
public function consultar()
{
if($this->Usuario!="")	
$this->Sql="select * from registros where usuario= '".$this->Usuario."';";


//$Registros=pg_exec($this->Conexion,$this->Sql);
//return($Registros);
$Registros=pg_exec($this->Conex,$this->Sql);
return($Registros);

}
	
public function ingresar()
	{
	$this->Sql="insert into registros values('".$this->Usuario."' ,'".$this->Clave1."','".$this->Clave2."','".$this->Correo."','".$this->Sexo."','".$this->Fecha."','".$this->Ciudad."','".$this->Pais."','".$this->Foto."');";
	$exito=pg_exec($this->conexion,$this->Sql);
	return("Exito al Ingresar");
		 
	}
	
public function Eliminar()
	{
	$Sql="delete from registros where cedula='".$this->Ced."'";
	pg_exec($this->conexion,$Sql);
	return("Exito al Eliminar");
	}	
	
public function Conectarbd()
	{
	parent::conectar();
	}

public function __destruct()
	{
		$this->Ced;
		$this->Nom;
		$this->Apell;
		$this->Edad;
		$this->NumGoles;
		$this->Velocidad;
		$this->Asistencias;
		$this->Posicion;
		$this->Sueldo;
	}				
	
	
}
*/
