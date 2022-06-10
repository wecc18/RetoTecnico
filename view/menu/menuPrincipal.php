
<?php
@session_start();
//require_once("../class/Funciones.php");
class MenuPrincipal{
	public function __construct(){
		}
	public function __destruct(){
		}
//-------------DECIDE EL MENU QUE SE VA A MOSTRAR----------------
public function showmenu($opc){
	$m=new MenuPrincipal();
	if($opc==1){
		$m->menu();
	}else{
		$m->menu2();
		}

}
//-----------------EL MENU PARA RETIRARSE-----------------------

public function cerrarRetirar($opc){
	if($opc==1){
echo'<ul id="bot"><li> <a href="../../cont/Con_cerrar_retirar.php"><center>RETIRARSE</center></a></li>
</ul>';
	}
	}

//--------------MUESTRA EL MENU PRINCIPAL ---------

public function menu(){
echo '<ul id="nav">
                <li><a href="forms/juego1.php" class="ini"> INICIAR JUEGO </a></li>
                </ul>';
         
         } 



}
?>