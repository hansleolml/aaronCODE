<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/css/pasajero.css">
        <title>Trabajadores</title>
    </head>
    <?php
        $host_db = "localhost";
        $user_db = "root";
        $pass_db = "";
        $db_name = "bdviajes";
        $tbl_name = "respuestas";


        $cn=mysqli_connect($host_db, $user_db, $pass_db, $db_name);
    ?>
    <body>
        <center>
            <table class="pasaje">
                <tr><th>TRABAJADORES DE INTER - PERÚ
                <tr><td>Listado de Choferes
            </table>
            <table>
            <div class="operacion">
                    <p>
                    <fieldset>
                        <legend>OPERACIONES - INGRESO</legend>
                        <p>INGRESO DE CHOFERES <a href="<?=base_url();?>Inicio/nuevochoferht">AÑADIR</a></p>
                        <p>SALIDA DE CHOFERES <a href="<?=base_url();?>Inicio/choferdform">ELIMINAR</a></p>
                        <p>
                    </fieldset>
            </div>
            </table>

            <table class="ver">
                <tr><th>Codigo<th>Nombre<th>Fecha de ingreso<th>Destino<th>Viajes realizados
                    <?php
                    $sql="select id, chonom, chofin,destino from chofer";
                    $res=  mysqli_query($cn,$sql)  or die('Error:'.mysqli_error());
                    while($f= mysqli_fetch_array($res)){  //lee fila pór fila
                    ?>
                <tr><td><?=$f[0]?><td><?=$f[1]?><td><?=$f[2]?><td><?=$f[3]?>

                    <!--<td><a href="verchoferr.php?cod=<?=$f[0]?>&x=<?=$f[1]?>"><input type="submit" value="--Ver--"></a>-->
                    <td><a href="<?=base_url();?>Inicio/verchoferr/<?=$f[0]?>/<?=$f[1]?><?=$f[2]?>/<?=$f[3]?>"><input type="submit" value="--Ver--"></a>
                    <?php
                    }
                    ?>
            </table>

        </center>

    </body>
</html>
