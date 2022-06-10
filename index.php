<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RETO TÉCNICO</title>
<link rel="shortcut icon" type="image/x-icon" href="view/img/logo.ico">
<link type="text/css" href="view/style/style_index.css" rel="stylesheet" />
<script type="text/javascript" src="js/val.js"></script>
</head>

<body>
<div id="login">
<form name="ingreso" id="ingreso" method="post" onSubmit="return ValidaIndex(ingreso)" action="cont/Con_ingreso.php">
<table>
  <tr>
    <td colspan="2">ADIVINA LA CAPITAL</td>
    <td rowspan="6" id="logo">
      <h1 align="center">BIENVENIDO</h1>
      <h3 align="justify">&nbsp;</h3>
      <h3 align="justify">&nbsp;</h3>
      <h3 align="justify">&nbsp;</h3></td>
  </tr>
  <tr>
    <td>Nombre de Usuario:</td>
    <td><input type="text" name="logi" id="logi" autofocus="autofocus" required="required" maxlength="20" placeholder="Alias" /></td>
  </tr>
  <tr>
    <td>Contrase&ntilde;a:&nbsp;</td>
    <td><strong>
      <input type="password" name="password" id="password" required="required" maxlength="20" placeholder="Contraseña"/>
    </strong></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><input type="submit" value="Iniciar sesi&oacute;n" align="right" /></td>
  </tr>
 
</table>
</form>
</div>
</body>
</html>