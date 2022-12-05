<?php 
require_once("./clases/class.php");
$tra=new Trabajo();
if(isset($_POST["usuario"]))
{
	$b1=$_POST["id_comentario"];
	$b2=$_POST["nombre_lector"];
	$b3=$_POST["correo_lector"];
    $b4=$_POST["wed_lector"];
    $b5=$_POST["texto_not"];
    $b6=$_POST["fecha_com"];
	$val=$tra->comentarios($b1,$b2,$b3,$b4,$b5,$b6);
	
}
?>	
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Actualizar Album</title>
	 <link rel="stylesheet" href="./estilos/usuario.css">
 </head>
 <body>
 	<section class="form-register">
 		<form action="" method="post">
	 		<h2>Comentarios</h2>

            <div class="user-box"><br/><br/>
	 		<input type="number"  class="controls" name="id_comentario" id="id_comentario" required="" placeholder="Ingrese su id_comentario">
			</div>

			<div class="user-box">
	 		<input type="text"  class="controls" name="nombre_lector" required="" placeholder="Ingrese su nombre_lector">
			</div>

			<div class="user-box">
			<input type="Email" class="controls" name="correo_lector" required="" placeholder="Ingrese su correo_lector">
			</div>

			<div class="user-box">
	 		<input type="text" class="controls" name="wed_lector" required="" placeholder="Ingrese su wed_lector">
			</div>
	 		
			<div class="user-box">
			<input type="text" name="texto_not" class="controls" required="" placeholder="Ingrese su texto_not">
			</div>

            <div class="user-box">
			<input type="date" name="fecha_com" class="controls" required="" placeholder="Ingrese su fecha_com">
			<p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
            </div>

			<div class="ref">
			
			<input  class="button" type="Submit" name="enviar" value="Enviar" >
    		<input class="button" type="reset" name="borrar" value="Borrar">
	 		<input type="hidden" name="usuario" value="si">
			 <p><a href="#">¿Ya tengo cuenta?</a></p>
			</div>
 		</form>
 	</section>
 	
 </body>
 </html>

