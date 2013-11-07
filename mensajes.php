<?php 
# Mensajes
include('config.php');

# Seguridad
function seg ($seg) {
	 $seg = trim($seg);
	 $seg = stripslashes($seg);
	 $seg = str_replace('\\'," ",$seg);
	 $seg = str_replace('&#39;','',$seg);
	 $seg = str_replace("'",'&#39;',$seg);
	 $seg = str_replace("%",'',$seg);
	 $seg = strip_tags($seg);
	 $seg = str_replace("<",'',$seg);
	 $seg = mysql_real_escape_string($seg);
	 return $seg;
}

function url($url){
		$url = preg_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_+.~#?&//=]+)','<a href="\0" target="_blank">\0</a>', $url);
		$url = preg_replace('(((f|ht){1}tps://)[-a-zA-Z0-9@:%_+.~#?&//=]+)','<a href="\0" target="_blank">\0</a>', $url);
		//Cogemos las www mas el punto (.), luego cogemos todos los valores alfanumericos con simbolos - y _ luego buscamos el dominio y la extension de dominio por ejemplo(.com.es)
		$url =  preg_replace('/w{3}.[a-zA-Z0-9_-]*.[a-z]*.[a-z]*$/','\1<a href="http://\0" target="_blank">\0</a>', $url);
		$url = preg_replace('([_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.).[a-z]{2,3})','<a href="mailto:\0">\0</a>', $url);
        //$url = preg_replace('([_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3})','<a href="mailto:\0">\0</a>', $url);
        return $url;
} 

function muestra_mensajes($limite,$color1,$color2)
{
	# MOSTRAR
	$sql = "SELECT * FROM xjboard_mensajes ORDER BY id_mensaje DESC LIMIT 0,".$limite."";
	$consulta = mysql_query($sql) or exit ("MENSAJES.PHP: ".mysql_error());
	$contador = 0;
	while ($dato=mysql_fetch_assoc($consulta)) {
		//ultima fecha
		
		if ($contador % 2 == 0){
			$color = $color1;
		} else {
			$color = $color2;
		}
		echo "<div class=\"d".$contador."\" style=\"background:".$color."; padding:2px; word-wrap:break-word;\" ><b>".$dato['autor']."</b>: <br />".url($dato['mensaje'])."<br /><i style=\"font-size:11px;\">".$dato['fecha']."</i></div>";	
		$contador++;
		$fecha = $dato['fecha'];
	}
	@mysql_data_seek($consulta,0);
	$dato=mysql_fetch_assoc($consulta);
	echo '<script>
		 $("#fecha1").val("'.$dato['fecha'].'");
		 </script>';
}

# Accion :)
if(isset($_POST['xj_enviar'])) {
	# INSERT
	$sql = "INSERT INTO xjboard_mensajes (autor,mensaje,fecha,ip) VALUES ('".seg($_POST['autor'])."','".seg($_POST['mensaje'])."',now(),'".seg($_POST['ip'])."')";
	$consulta = mysql_query($sql) or exit ("MENSAJES.PHP: ".mysql_error());
	muestra_mensajes($limite,$color1,$color2);
} else {
	if (isset($_POST['updater'])){
		$sql = "SELECT * FROM xjboard_mensajes ORDER BY id_mensaje DESC LIMIT 0,1";
		$consulta = mysql_query($sql) or exit ("MENSAJES.PHP: ".mysql_error());
		$dato = mysql_fetch_assoc($consulta);
		echo $dato['fecha'];
	} else {
		muestra_mensajes($limite,$color1,$color2);
	}
}
?>