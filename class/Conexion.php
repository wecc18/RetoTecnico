<?php
require_once("config.php");
class Conexion{
    private static $instanciaConexion=NULL;
    
    public function __construct(){  	//---definir los parametros
    }
    public function __destruct(){
    }
    public static function crear_conexion(){
        if(self::$instanciaConexion==NULL){
            self::$instanciaConexion=new Conexion();
        }
        return self::$instanciaConexion;
    }
    
    /**
     * Este metodo permite conectarse a una BD retornando el recurso de conexion
     */
    public function getDbConexion(){
        try{
			$string_conect='mysql:host='.DB_HOST.';dbname='.DB_NAME; 
            $db = new PDO($string_conect, DB_USER, DB_PASSWORD);  
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE); 
			//echo "Conectado con exito";
        }catch(PDOException $ex){
            $db=FALSE;
            echo "Error En conexion a BD[".$ex->getMessage()."]<br>";
            echo $ex;
        }
        return $db;
	
    }
/**
     * Este metodo permite desconectarse a una BD 
     */
public function desconectar(){	 //	cierra la conexion 
		$db=NULL;
}

}


?>