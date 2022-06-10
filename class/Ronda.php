<?php
@session_start();
 class Ronda{ 
 private $id_ronda;
 private $acumulado_ronda;
 private $estado_ronda;

public function __construct(){
	 }
public function __destruct(){
	}
	
public function getId_ronda(){
return $this->id_ronda;
}

public function getAcumulado_ronda(){
return $this->acumulado_ronda;
}

public function getEstado_ronda(){
return $this->estado_ronda;
}

public function setId_ronda($id_ronda){
$this->id_ronda=$id_ronda;	
}

public function setAcumulado_ronda($acumulado_ronda){
$this->acumulado_ronda=$acumulado_ronda;	
}

public function setEstado_ronda($estado_ronda){
$this->estado_ronda=$estado_ronda;	
}


public function obtenerIdRonda(){
	require_once "Conexion.php";
	 try{
		$db=Conexion::crear_conexion()->getDbConexion();
		if($db){
		$stmt=$db->prepare("SELECT max(id_ronda) AS id FROM pt_ronda");

        $stmt->execute();
		$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
           
			$idRon= $row['id']+1;
			return $idRon;

		      }
		}
		catch(PDOExeption $ex){
        echo "Error[".$ex."]";
        }
		$db=NULL;
	}

 
 }

?>