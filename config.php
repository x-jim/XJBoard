<?php 
##################################
### 	 v1.5 - XJ-Board       ###
##################################
###       Autor: x-jim		   ###
### diablonegro700@hotmail.com ###
###      www.x-jim.net		   ###
##################################
/*
    <XJ-Board - Mini Tagboard en ajax>
    Copyright (C) <2008>  <x-jim>

    Este programa es software libre: usted puede redistribuirlo y/o modificarlo 
    bajo los términos de la Licencia Pública General GNU publicada 
    por la Fundación para el Software Libre, ya sea la versión 3 
    de la Licencia, o (a su elección) cualquier versión posterior.

    Este programa se distribuye con la esperanza de que sea útil, pero 
    SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita 
    MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO. 
    Consulte los detalles de la Licencia Pública General GNU para obtener 
    una información más detallada. 

    Debería haber recibido una copia de la Licencia Pública General GNU 
    junto a este programa. 
    En caso contrario, consulte <http://www.gnu.org/licenses/>.
	
*/

/* BASE DE DATOS LOCAL */
$host_cfg = "localhost"; 		//HOST
$usuario_cfg = "usuario"; 		//Usuario de la base de datos
$password_cfg = "contrasena";	//Contraseña del a base de datos
$base_cfg = "nombredb";			//Nombre de la base de datos

$color1 = "#DCF2D5";	# Establece el primer color
$color2 = "#C7E0BE";    # Establece el segundo color
$limite = 10; 			# Establece el número de mensajes visibles en el tablero.


define('VER',"v1.5");
define('APP',"Mensajero <a href=\"http://www.xjboard.com\" target=\"_blank\">XJ-Board</a> ".VER."");
function conex ($h,$u,$p,$db){
	mysql_connect($h,$u,$p) or die ("Conexion: config.php |  ".mysql_error());
	mysql_select_db($db) or die ("Conexion Select DB: config.php |  ".mysql_error());
}

conex($host_cfg,$usuario_cfg,$password_cfg,$base_cfg);
?>