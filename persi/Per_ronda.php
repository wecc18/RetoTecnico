<?php
@session_start();
require_once("../class/Conexion.php");
require_once("../class/Funciones.php");
require_once("../class/Ronda.php");

class Per_ronda{

public function __construct(){
}
public function __desctruct(){
}
 //------------------REGISTRA RONDA PERDIDA--------------------------------
public function Registrar_ron_per($pre, $ron, $idr, $ali){
    try{
		$db=Conexion::crear_conexion()->getDbConexion();
		if($db){//1 IF
               
						   $sentenciaF=$db->prepare("INSERT INTO pt_ronda(id_ronda, id_pregunta, acumulado_ronda, estado_ronda, alias_jug) VALUES (:idr,:id_pregunta,:acumulado_ronda,:estado_rond,:alias_jug)");
						  $sentenciaF->bindValue('idr',$idr,PDO::PARAM_INT);
						  $sentenciaF->bindValue('id_pregunta',$pre->getId_pregunta(),PDO::PARAM_INT);
						  $sentenciaF->bindValue('acumulado_ronda',$ron->getAcumulado_ronda(),PDO::PARAM_INT);
						  $sentenciaF->bindValue('estado_rond',$ron->getEstado_ronda(),PDO::PARAM_STR);
						  $sentenciaF->bindValue('alias_jug',$ali,PDO::PARAM_STR);
						  $sentenciaF->execute();
						}
					 mensaje("LA RESPUESTA NO ES CORRECTA, PERDISTE TODO LO GANADO");
					 redireccionar( "../index.php",false,0 );
				 
		}//FIN try
		catch(PDOExeption $ex){
        echo "Error[".$ex."]";
        }//Fin catch
		$db=NULL;
}

 //------------------REGISTRA RONDA GANADA--------------------------------
public function Registrar_ron_cor($pre, $ron, $idr, $ali){
    try{
		$db=Conexion::crear_conexion()->getDbConexion();
		if($db){//1 IF
               
						   $sentenciaF=$db->prepare("INSERT INTO pt_ronda(id_ronda, id_pregunta, acumulado_ronda, estado_ronda, alias_jug) VALUES (:idr,:id_pregunta,:acumulado_ronda,:estado_rond,:alias_jug)");
						  $sentenciaF->bindValue('idr',$idr,PDO::PARAM_INT);
						  $sentenciaF->bindValue('id_pregunta',$pre->getId_pregunta(),PDO::PARAM_INT);
						  $sentenciaF->bindValue('acumulado_ronda',$ron->getAcumulado_ronda(),PDO::PARAM_INT);
						  $sentenciaF->bindValue('estado_rond',$ron->getEstado_ronda(),PDO::PARAM_STR);
						  $sentenciaF->bindValue('alias_jug',$ali,PDO::PARAM_STR);
						  $sentenciaF->execute();
						}
					 mensaje("LA RESPUESTA ES CORRECTA, PASAS AL SIGUIENTE NIVEL");
					 //redireccionar( "../view/forms/juego2.php",false,0 );
				 
		}//FIN try
		catch(PDOExeption $ex){
        echo "Error[".$ex."]";
        }//Fin catch
		$db=NULL;	
}

 //------------------REGISTRA RONDA RETIRADA--------------------------------
public function Registrar_ron_ret($pre, $ron, $idr, $ali){ 
    try{
		$db=Conexion::crear_conexion()->getDbConexion();
		if($db){//1 IF
               
						   $sentenciaF=$db->prepare("INSERT INTO pt_ronda(id_ronda, id_pregunta, acumulado_ronda, estado_ronda, alias_jug) VALUES (:idr,:id_pregunta,:acumulado_ronda,:estado_rond,:alias_jug)");
						  $sentenciaF->bindValue('idr',$idr,PDO::PARAM_INT);
						  $sentenciaF->bindValue('id_pregunta',$pre->getId_pregunta(),PDO::PARAM_INT);
						  $sentenciaF->bindValue('acumulado_ronda',$ron->getAcumulado_ronda(),PDO::PARAM_INT);
						  $sentenciaF->bindValue('estado_rond',$ron->getEstado_ronda(),PDO::PARAM_STR);
						  $sentenciaF->bindValue('alias_jug',$ali,PDO::PARAM_STR);
						  $sentenciaF->execute();
						}
					 mensaje("LA RESPUESTA NO ES CORRECTA, PERDISTE TODO LO GANADO");
					 redireccionar( "../index.php",false,0 );
				 
		}//FIN try
		catch(PDOExeption $ex){
        echo "Error[".$ex."]";
        }//Fin catch
		$db=NULL;
}

//------------------REGISTRA RONDA GANADA FINAL--------------------------------
public function Registrar_ron_fin($pre, $ron, $idr, $ali){
    try{
		$db=Conexion::crear_conexion()->getDbConexion();
		if($db){//1 IF
               
						   $sentenciaF=$db->prepare("INSERT INTO pt_ronda(id_ronda, id_pregunta, acumulado_ronda, estado_ronda, alias_jug) VALUES (:idr,:id_pregunta,:acumulado_ronda,:estado_rond,:alias_jug)");
						  $sentenciaF->bindValue('idr',$idr,PDO::PARAM_INT);
						  $sentenciaF->bindValue('id_pregunta',$pre->getId_pregunta(),PDO::PARAM_INT);
						  $sentenciaF->bindValue('acumulado_ronda',$ron->getAcumulado_ronda(),PDO::PARAM_INT);
						  $sentenciaF->bindValue('estado_rond',$ron->getEstado_ronda(),PDO::PARAM_STR);
						  $sentenciaF->bindValue('alias_jug',$ali,PDO::PARAM_STR);
						  $sentenciaF->execute();
						}
					 mensaje("ACABAS DE GANAR EL ACUMULADO DE $5432100, DISFRITALOS!!");
					 redireccionar( "../index.php",false,0 );
				 
		}//FIN try
		catch(PDOExeption $ex){
        echo "Error[".$ex."]";
        }//Fin catch
		$db=NULL;	
}

}
?>