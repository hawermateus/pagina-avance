<?php 
require_once("./clases/class.php");
$tra=new Trabajo();
if(isset($_POST["usuario"]))
{
	$b1=$_POST["id_usuario"];
	$b2=$_POST["login_usu"];
	$b3=$_POST["pass_usu"];
    $b4=$_POST["fech_act"];
    $b5=$_POST["nro_identidad"];
	$val=$tra->adicion_usu($b1,$b2,$b3,$b4,$b5);
	
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
	 		<h2>Actualizar Datos</h2>

            <div class="user-box"><br/><br/>
	 		<input type="number"  class="controls" name="id_usuario" id="id_usuario" required="" placeholder="Ingrese su id_usuario">
			</div>

			<div class="user-box">
	 		<input type="Email"  class="controls" name="login_usu" required="" placeholder="Ingrese su Login_usu">
			</div>

			<div class="user-box">
			<input type="password" class="controls" name="pass_usu" required="" placeholder="Ingrese su pass_usu">
			</div>

			<div class="user-box">
	 		<input type="date" class="controls" name="fech_act" required="" placeholder="Ingrese su fech_act">
			</div>
	 		
			<div class="user-box">
			<input type="number" name="nro_identidad" class="controls" required="" placeholder="Ingrese su nro_identidad">
			
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

