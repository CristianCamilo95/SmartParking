<?php
$method = $_SERVER['REQUEST_METHOD'];
// tendremos que tratar esta variable para obtener el recurso adecuado de nuestro modelo.
$resource = $_SERVER['REQUEST_URI'];
// Dependiendo del método de la petición ejecutaremos la acción correspondiente.
include_once("ClassControladora.php");

$Parametro="";
switch ($method) {
    case 'GET'://el get es para consulta	
		$arguments=$_GET;
		$Obj1=new controladora('','','','','');
	    $Obj1->Mostrar();
		$Registros=$Obj1->getR();
        $Filas=pg_numrows($Registros);
		// código para método GET 
		$M="";
		for($cont=0;$cont<$Filas;$cont++){
		 $response=array("Usuario"=>"".pg_result($Registros,$cont,0),
		                 "Clave1"=>"".pg_result($Registros,$cont,1),
						 "Clave2"=>"".pg_result($Registros,$cont,2),
						 "Correo"=>"".pg_result($Registros,$cont,3),
						 "TipoVehiculo"=>"".pg_result($Registros,$cont,4)	
						 );
		 $M[$cont]=$response;
		 }
		 $response=$M;
		break;
		
    case 'POST': 
	    $arguments = $_POST;	
		//parse_str(file_get_contents('php://input'), $arguments);	
		$Obj1=new controladora($arguments['Usuario'],$arguments['Clave1'],$arguments['Clave2'],$arguments['Correo'],$arguments['TipoVehiculo']);
        $Obj1->ingresar();		
		$Registros=$Obj1->getR();		
		$response=$Registros;
        break;
		
    case 'DELETE':
		$json = $_DELETE["json"];
		$json = urldecode($json);
		$json = str_replace("\\","",$json);
		$jsonencode = json_decode($json);	    
	    //$arguments = $_POST;	
		//parse_str(file_get_contents('php://input'), $arguments);	
		$Obj1=new controladora($jsonencode[0]->player1,$jsonencode[0]->player2);
		//$Obj1->setNjuego($jsonencode[0]->njuego);
        $Obj1->modificar();
		$Registros=$Obj1->getR();		
		$response=$Registros;
        // código para método PUT
        break;
	
    case 'PUT':
	    $json = $_PUT["json"];
		$json = urldecode($json);
		$json = str_replace("\\","",$json);
		$jsonencode = json_decode($json);	    
	    //$arguments = $_POST;	
		//parse_str(file_get_contents('php://input'), $arguments);	
		$Obj1=new controladora($jsonencode[0]->cedula,'','','','','','','','');
        $Obj1->Eliminar();
		$Registros=$Obj1->getR();		
		$response=$Registros;
        break;
}
echo json_encode($response,true); // $response será un array con los datos de nuestra respuesta.
?>