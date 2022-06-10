<?php
@session_start();
include("../class/Funciones.php");
include("menu/menuPrincipal.php");
	if($_SESSION["ok"]==false){
		mensaje("No hay sesi\xf3n activa");
		redireccionar("../index.php",false,0 );
	}else{	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CONCURSO DE PREGUNTAS
Y RESPUESTAS</title>
<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico">
<script type="text/javascript" src="../js/tabla.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
    
</html>
<link type="text/css" href="style/style1.css" rel="stylesheet" />
<link type="text/css" href="style/menu.css" rel="stylesheet" />
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
		<td>
        	<strong>&nbsp;Datos de Usuario</strong><br /><br/>
            <strong><?php echo $_SESSION['log'];?></strong><br/>
              Login<br/>
            <?php echo "",date("Y-m-d");?><br/>
         </td> 
      </tr>
 </table> 
    <p>&nbsp;</p>
            </div>         
</div>
      
      </section>
            <section id="cont_der">
            	<div id="work">
            		
                	<div id="workspace" align="center">
                    <table border="1" style="border:1px #000099 solid"><th colspan="4">Los 5 niveles del juego</th><tr><td>#</td><td>Dificultad</td><td>Nombre de Capitales</td><td>Premio</td></tr>
                    <tr><td>1-</td><td>Acero</td>
                    <td>Capitales De Colombia</td>
                    <td>$1000</td></tr>
                    <tr><td>2-</td><td>Bronce</td>
                    <td>Capitales De Sur America</td>
                    <td>$20000</td></tr>
                    <tr><td>3-</td><td>Plata</td>
                    <td>Capitales De Resto De America</td>
                    <td>$300000</td></tr>
                    <tr><td>4-</td><td>Oro</td>
                    <td>Capitales De Europa</td>
                    <td>$4000000</td></tr>
                    <tr><td>5-</td><td>Platino</td>
                    <td>Capitales De Resto Del Mundo</td>
                    <td>$50000000</td></tr>
                    </table>
                    	<br /><br />
                	</div>
                </div>
            </section>
     
	</section>
    
</body>
</html>
<?
}
?>
