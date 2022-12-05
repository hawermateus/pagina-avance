<?php 
require_once("./clases/class.php");
$tra=new Trabajo();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Usuarios</title>
    <link rel="stylesheet" href="./estilos/style.css">
</head>
<body>
    <table width="98%" align="center" border="1">
        <thead>
            <tr bgcolor="#BAE9EC">
                <th colspan="5">UEFA CHAMPIONS LEAGUE</th>
                    <th><a href="./clases/consult_est.php?sw=1">
                        <img src="imgs\datos.png" alt="Guardar Datos" title="Guardar Datos" class="imagenn"></a>
                    </th>
                    <style>
                    .imagenn{
                        padding-top:10px;
                        padding-bottom:10px;
                        height: 80px;
                    }
                    </style>
                
                <tr bgcolor="white">
                    <th colspan="6">Listado General de Noticias del Dia</th>
                </tr>
            </tr>
            <tr bgcolor="white">
                <th>Id Noti</th><th>Titulo Not</th><th>Det. Noti</th><th>Fecha Autor</th><th>Descarga Not</th><th>Actividad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    if(isset($_GET["pos"]))
                    {
                        $inic=$_GET["pos"];
                    }else
                    {
                        $inic=0;
                    }
                        $todos=$tra->todas_not($inic);
                        
                        $cant=0;
                        for ($i=0;$i<sizeof($todos);$i++)
                        {
                            //print_r($todos);
                            //die();
                            $v1=$todos[$i]["id_usuario"];
                            $v2=$todos[$i]["login_usu"];
                            $v3=$todos[$i]["pass_usu"];
                            $v4=$todos[$i]["fech_act"];
                            $v5=$todos[$i]["nro_identidad"];
                            $nvapal=$tra->corta_palabras($v3,80);
                            $varia=($cant%2)==0 ? '<tr style="background-color: #C8F6F8" color="#9de5ec" font-weigth:bold' :
                            '<tr style="background-color:white" color="#9de5ec" font-weigth:bold';
                            $cant++;
                            ?>
                            <?php echo $varia;?>
                            <tr>
                                <th><?php echo $v1;?></th>
                                <th><?php echo $v2;?></th>
                                <th><?php echo $nvapal;?></th>
                                <th><?php echo $v4;?></th>
                                <th><?php echo $v5;?></th>
                                <th>
                                    <a href="adicion_usu.php?cod=<?php echo $v1;?>">
                                    <img src="imgs\OIP.jpg" alt="Editar Registros" title="Edicion de Registros" width="25" height="25">||</a>
                                    <a href="eliminar_usuario.php?cod=<?php echo $v1;?>">
                                    <img src="imgs\eliminar.png" alt="Eliminar Registros" title="Eliminacion de Registros" width="25" height="25">||</a>
                                    <a href="./clases/sube_img.php?cod=<?php echo $v1;?>">
                                    <img src="imgs\subir_imagen.jpg" alt="Editar Registros" title="Edicion de Registros" width="25" height="25"></a>     
                                </th>
                            </tr>
            </tr>

                <?php
                }
                ?>
                <tr>
                    <th colspan=6>
                    <?php 
                        if($inic==0)
                        {
                            ?>
                            Anteriores Registros
                            <?php
                        }else
                        {
                            $anteriores=$inic-10;
                            ?>
                            <a href="?pos=<?php echo $anteriores;?>" title="Anteriores Registros">Anteriores Registros</a>
                            <?php
                        }   
                    ?>
                    &nbsp;&nbsp;||&nbsp;&nbsp;
                    <?php 
                        if(count($todos)==10)
                        {
                            $proximo=$inic+10;
                            ?>
                            <a href="?pos=<?php echo $proximo;?>" title="Proximos Registros">Proximos Registros</a>
                            <?php

                        }else
                        {   
                            ?>
                            Siguientes Registros
                            <?php

                        }
                    ?>
                    </th>
                    
                </tr>
            
        </tbody>
    </table>    
</body>
</html>