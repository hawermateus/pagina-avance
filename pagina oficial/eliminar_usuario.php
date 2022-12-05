<?php
require_once("./clases/class.php");
$tra=new Trabajo();
if(isset($_POST["usuario"]))
{
    $b3=$_POST["nrodocu"];
    $val=$tra->eliminar_usu($b3);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/usuario.css">
    <title>Eliminar usuario</title>
</head>
<body>
    <div class="form-register">
        <form action="" method="post">
            <h2>Eliminacion de Usuario</h2>
            <div class="user-box"><br/><br/><br/>
            <input type="text" name="nrodocu" class="controls" placeholder="Nro Documento">
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