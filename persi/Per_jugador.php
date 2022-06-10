<?php
@session_start();
session_cache_limiter('nocache');
date_default_timezone_set("America/Bogota");
require_once("../class/Conexion.php");
require_once("../class/Funciones.php");
require_once("../class/Jugador.php");
require_once("../class/Sesion.php");

class Per_jugador{

public function __construct(){
}
public function __desctruct(){
}
 //------------------VALIDA JUGADOR--------------------------------
public function validarJugador($usu){//validar ingreso de jugador 
    try{
		$db=Conexion::crear_conexion()->getDbConexion();
		if($db){
   		$var_id=$usu->getAlias();
		$var_nom=$usu->getPassword();
		//$lo=$_SESSION['log'];
		$fechaAu=date("Y-m-d H:i:s");
		$stmt=$db->prepare("SELECT * FROM pt_jugador WHERE alias_jug = :param_id AND clave_jug = :param_nom");
		$stmt->bindValue('param_id',$var_id,PDO::PARAM_STR);
        $stmt->bindValue('param_nom',$var_nom,PDO::PARAM_STR);
        $stmt->execute();
        $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$affected_rows=$stmt->rowCount();
        if($affected_rows==1){
			$userSession=new Per_sesion();
			$userSession->session($usu);
			//Empieza la insercion Auditoria
		$cadena="Inicia Sesion el Jugador $var_id";
	    //$cadena=var_dump(implode((array)$stmt));
		/*$sentenciaAU=$db->prepare("INSERT INTO [Zeus®Auditoria] (consulta_audi, fecha_audi, usuario) VALUES (:consulta_audi, :fecha_audi, :usuario)");
						  $sentenciaAU->bindValue('consulta_audi',$cadena,PDO::PARAM_STR);
						  $sentenciaAU->bindValue('fecha_audi',$fechaAu,PDO::PARAM_STR);
						  $sentenciaAU->bindValue('usuario',$var_id,PDO::PARAM_STR);
						  $sentenciaAU->execute();*/
		//Fin la insercion Auditoria
			redireccionar( "../view/principal.php",false,0 );
	        }else{
			mensaje("Datos invalidos, favor verificar");
			redireccionar( "../index.php",false,0 );
				}
		      }
		}
		catch(PDOExeption $ex){
        echo "Error[".$ex."]";
        }
		$db=NULL;
 	
}


}
?>