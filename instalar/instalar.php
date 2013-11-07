<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- x-jim.net| Instalador de XJ-Board creado por x-jim -->
<?php require ('../config.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="XJBoard" content="TagBoard XJ (www.x-jim.net) XJBoard <?php echo VER; ?>" />
<title>XJ-Board <?php echo VER; ?>  - Instalar </title>
<style type="text/css">
td img {display: block;}
.instalar { 
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:14px;
padding-left:15px;
}
.boton {
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
.centro {background-image:url(instalar_r2_c1.png)}
.b1 {background-image:url(instalar_r3_c1.png)}
.b2 {background-image:url(spacer.gif)}
</style> 
</head>
<body bgcolor="#ffffff">
<table width="474" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <td><img src="spacer.gif" width="474" height="1" border="0" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><img name="instalar_r1_c1" src="instalar_r1_c1.png" width="474" height="192" border="0" id="instalar_r1_c1" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="192" border="0" alt="" /></td>
  </tr>
  <tr>
   <td class="centro">
   <?php

$sql = "CREATE TABLE IF NOT EXISTS `xjboard_mensajes` (
		  `id_mensaje` bigint(20) NOT NULL AUTO_INCREMENT,
		  `autor` varchar(200) NOT NULL,
		  `mensaje` longtext NOT NULL,
		  `fecha` datetime NOT NULL,
		  `ip` varchar(200) NOT NULL,
		  PRIMARY KEY (`id_mensaje`)
		);
		";
//$sql = 'CREATE TABLE `'.$BDD.'`.`xj_mensajes` (`id` BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY, `mensaje` VARCHAR(255) NOT NULL, `autor` VARCHAR(25) NOT NULL) ENGINE = MyISAM';
//$mens = 'INSERT INTO xjboard_mensajes (mensaje,autor) VALUES ("Hola, este es un mensaje de prueba.","Admin")';

if (isset($_POST['instalar'])){

$consulta = mysql_query($sql) or die ("<div class='instalar'>¡Ha habido un error o bien la base de datos ya existe!</div>");
//mysql_query($mens);
echo "<div class='instalar'>¡Instalación Correcta! <br /> Elimina el archivo 'instalar.php' de tu servidor. </div>";
} else { echo "<div class='instalar'>
<div align='center'>¡Has configurado correctamente el config.php!</div><br />
1- Haz click en instalar.<br />
2- Finalmente elimina el archivo 'instalar.php' del servidor.
</div>"; }
?></td>
   <td><img src="spacer.gif" width="1" height="217" border="0" alt="" /></td>
  </tr>
  <tr>
   <td class="b1">
   <form name="formulario_instalacion" method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">
     <div align="center">
       <input type="submit" name="instalar" value="INSTALAR" class="boton"/>
       </div>
   </form></td>
   <td><img src="spacer.gif" width="1" height="32" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="instalar_r4_c1" src="instalar_r4_c1.png" width="474" height="18" border="0" id="instalar_r4_c1" alt="" /></td>
   <td><img src="spacer.gif" width="1" height="18" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><div align="center"><a href="http://www.xjboard.com" target="_blank">www.xjboard.com</a></div></td>
   <td class="b2"></td>
  </tr>
</table>
<iframe src="http://www.xjboard.com/stats.php" frameborder="0"></iframe>
</body>
</html>
