<?php 
session_start();
require_once("./clases/class.php");
$tra=new Trabajo();
if(isset($_POST["usuario_comp"]) and $_POST["usuario"]="si")
{
	$_SESSION['usuario_comp']=$_POST["usuario_comp"];
	//print_r($_SESSION);
		$nom=$_POST["usuario_comp"];
 		$pass=$_POST["identidad"];
 		$valo=$tra->traer_usu($nom,$pass);
 		if(count($valo)==1)
 		{
 			echo "<script type='text/javascript'>
			alert('Bienvenido al sistema de Administracion ');
			window.location='primero.php';
			</script>";
		}else
		{
			echo "<script type='text/javascript'>
			alert('Debe Identificarse Ante el Sistema... Gracias');
			</script>";
		}
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="./estilos/usuario.css">
 	<title>Validacion Usuario</title>
 </head>
 <body>
 	<div class="form-register">
 		<form action="" method="post">
	 		<h2>Formulario Validacion Usuario</h2>
			<div class="user-box"><br/><br/><br/>
	 		<input type="text" class="controls" name="usuario_comp" id="nombre" placeholder="Nombre Usuario" required="1">
			</div>
			<div class="user-box">
	 		<input type="password" class="controls" name="identidad" placeholder="Password" required=1>
			 <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
			</div>
			<input  class="button" type="Submit" name="enviar" value="Enviar" >
    		<input class="button" type="reset" name="borrar" value="Borrar">
	 		<input type="hidden" name="usuario" value="si">
			 <p><a href="#">¿Ya tengo cuenta?</a></p>
 		</form>
 	</div>
 	
 </body>
 </html>