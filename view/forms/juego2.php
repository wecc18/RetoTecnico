<?php
@session_start();
include("../../class/Funciones.php");
include("../../class/Pregunta.php");
include("../menu/menuPrincipal.php");
	if($_SESSION["ok"]==false){
		mensaje("No hay sesi\xf3n activa");
		redireccionar("../index.php",false,0 );
	}else{	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADIVINA LA CAPITAL</title>
<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico">
<script type="text/javascript" src="../../js/tabla.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
</html>
<link type="text/css" href="../style/style1.css" rel="stylesheet" />
<link type="text/css" href="../style/menu.css" rel="stylesheet" />
</head>
<body alink="#0033CC" vlink="#993366">
	<section id="general">
    	<section id="top">
		  <div id="cabecera">

            <table width="100%">
                	<tr>
                    	<td><h3>ADIVINA LA CAPITAL</h3> </td>
                        <td align="right"><?php 
	$men=new MenuPrincipal();
    $men->cerrarRetirar(1);
	
?></td>
                  </tr>
                </table>
			</div>
        </section>
      <section id="cont_izq" style="width:">
        	<div id="menu">
            <?php 
	$men=new MenuPrincipal();
    $men->showmenu(1);
?> 	
 <table class="tabla1">
        <tr>
            <td><strong>&nbsp;Datos de Usuario</strong><br /><br/>
              <strong><?php echo $_SESSION['log'];?></strong><br/>
              Login<br/>
              <?php echo "",date("Y-m-d");?>
              <br/>
              </td>
      </tr>
    </table> 
    <p>&nbsp;</p>
            </div>         
</div>
      
      </section>
            <section id="cont_der">
            	<div id="work">
            		
                	<div id="workspace">
                    	<br />
                        <form name="nivel_dos" id="nivel_dos"  action="../../cont/Con_registrar_ronda2.php" method="post">
<table width="364" id="tabla_nivel2"><tr><td>2- Pregunta</td></tr></table>
</br>

<tr>
  <?php 
	$pre=new Pregunta();
    $resultado=$pre->mostrarPregunta2(2);
	if($resultado['result']=="data_found"){
		echo $resultado['html_result'];
	     
	}
	
?> 	
</tr>
</table>
</br>
<div class="results" id="div_result">        
                        </div>
                        </br>

<p>
  <input name="Enviar" type="submit" id="Enviar" value="Enviar" />
  
</form><br />
                	</div>
                </div>
            </section>
     
	</section>
  
</body>
</html>
<?
}
?>
