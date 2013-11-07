<?php include ('config.php'); ?>
<script src="js/jquery-1.4.min.js"></script>
<script src="js/jquery.validate.js"></script>
<!----------------------------- 
    XJ-BOARD
    http://www.xjboard.com
    Por x-jim
    http://www.x-jim.net
------------------------------>
<style type="text/css">
body, html{
	padding:0;
	margin:0;	
}
#xjboard_box { 
	width:200px;
	min-height:340px; 
	background:#F0F0F0;
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;
}
#xjboard_box a{ 
	color:#333;
}
#xjboard_box a:hover{ 
	color: #98C402;
}
#xjboard_box_titulo {
	background:#9C6;
	text-align:center;
}
#xjboard_controles {
	width:100%;
	text-align:center;
}
#xjboard_autor {
	width:100%;
}
#xjboard_mensaje {
	width:100%;
}
#xjboard_box_mensajes {
	background: #D3F0C8;
	height:300px;
	overflow:auto;
}
#cargando {
	display:none;
}
#xjboard_box input, textarea{
	border:1px solid gray;
}
#xjboard_box input:focus, textarea:focus{
	border:1px solid #99cc66;
}
#xj_enviar {
	width:100%;
	margin-top:5px;
}
</style>
<div id="xjboard_box">
	<div id="xjboard_box_titulo"><?php echo APP; ?></div>
    
	<div id="xjboard_box_mensajes"></div>
    
    <div id="cargando">Espere...</div>
    <div id="xjboard_controles">
    <form id="xjboard_frm">
    Nick:<br /> 
    <input name="autor" type="text" id="xjboard_autor" class="required" minlength="2" maxlength="20"/><br />
    
    Mensaje:<br /> 
    <textarea name="mensaje" id="xjboard_mensaje" rows="2" class="required" minlength="2"></textarea><br />
    <input type="hidden" name="xj_enviar" value="1" />
    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'];?>" />
    
    <input type="hidden" name="fecha1" id="fecha1" />
    <input type="hidden" name="fecha2" id="fecha2" />
    
    <input name="enviar" type="button" id="xj_enviar" value="Comentar"/>
    </form>
    </div>
</div>
<iframe src="http://www.xjboard.com/stats.php" frameborder="0"></iframe>
<script>
// Actualizamos 10 segs (actualizamos la fecha más actual)
var refreshId = setInterval(function()
{
	
	$.ajax({
			type: "POST",
			url: "mensajes.php",
			data: "updater=1",
			cache: false,
			success: function(msg)
			{
				// Después de enviar
				//alert("nueva fecha: "+msg);
				$("#fecha2").val(msg);
			}
		})
	
}, 5000);

// Miramos si la última fecha es diferente de la nueva, si lo es debemos actualizar
var refreshId = setInterval(function()
{
	if ($("#fecha1").val()!=$("#fecha2").val()){
		$.ajax({
			url: "mensajes.php",
			cache: false,
			success: function(data){
			  $("#xjboard_box_mensajes").fadeOut("slow").html(data).fadeIn("slow");
			}
		});
	}
}, 5000);

$(document).ready(function() {
	// Cargamos el contenido nada mas entrar
	$.ajax({
		url: "mensajes.php",
		cache: false,
		success: function(data){
		  $("#xjboard_box_mensajes").html(data);
		}
	});
	
	// Funcion de XJ-Board para enviar el mensaje.
	$("#xj_enviar").click(function() {
		if ($("#xjboard_frm").validate().form()){
			$("#xjboard_controles").hide();
			$.ajax({
				type: "POST",
				url: "mensajes.php",
				cache: false,
				data: $("#xjboard_frm").serialize(),
				beforeSend: function(msg)
				{
					// Antes de enviar
					$("#cargando").show("Enviando...");
					$("#xjboard_mensaje").val("");
				},
				success: function(msg)
				{
					// Después de enviar
					$("#cargando").hide("");
					$("#xjboard_controles").show();
					$("#xjboard_box_mensajes").html(msg);
				}
			})
		}
	});
});
</script>