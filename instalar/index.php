<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Instalación de XJ-Board</title>
<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}
.oneColElsCtrHdr #container {
	width: 46em;  /* this width will create a container that will fit in an 800px browser window if text is left at browser default font sizes */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
}
.oneColElsCtrHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px 0 20px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.oneColElsCtrHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}
.oneColElsCtrHdr #mainContent {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	background: #FFFFFF;
}
.oneColElsCtrHdr #footer { 
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#DDDDDD;
} 
.oneColElsCtrHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}
.style3 {font-size: smaller}
a:link {
	color: #333333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #006699;
}
a:active {
	text-decoration: none;
	color: #333333;
}
-->
</style></head>

<body class="oneColElsCtrHdr">

<div id="container">
  <div id="header">
    <h1>Instalación de XJ-Board</h1>
    <!-- end #header --></div>
  <div id="mainContent">
    <h1> Pasos a seguir:</h1>
    <p>
    <br />
1- Configura el archivo &quot;config.php&quot; con los parámetros de tu servidor MySQL:<br />
      <span class="style3">
      <?php highlight_string('
	  <?php
		  $HOST    =  "localhost";
		  $USUARIO =  "tu usuario";
		  $PWD     =  "tu password";
		  $BDD	 =  "tu base de datos";
      ?>'); ?>
    </span>
      <br />
      <br />
    2- <a href="instalar.php">Instala el script haciendo click aquí</a>.<br />
    <br />
    3- Inserta este código HTML donde quieres que salga el tagboard:</p>
    <p>
      &lt;iframe src=&quot;xjboard&quot; frameborder=&quot;0&quot; style=&quot;height:505px; width:210px; margin:0; overflow:hidden;&quot;&gt;&lt;/iframe&gt;' <br />
      <br />
      4- Para más seguridad elimina la carpeta &quot;instalar&quot; una vez finalizado correctamente el paso 2.</p>
    <h2>Licencia </h2>
    <p>XJ-Board ha sido desarrollado bajo la licencia GNU, queda totalmente prohibido el uso comercial de esta aplicación y siempre habrá que dejar permanencia de los créditos de autor respectivamente en su sitio tal y como están adjuntas a la programación del mismo.</p>
	<!-- end #mainContent --></div>
  <div id="footer">
    <p><a href="http://www.xjboard.com" target="_blank">XJ-Board</a> ha sido desarrollado por <a href="http://www.x-jim.net" target="_blank">x-jim</a>.</p>
    <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
