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
    $coda=$elsaludo;
    $nom=$elsaludos;

    $cn=mysqli_connect($host_db, $user_db, $pass_db, $db_name);
    ?>
    <body>
        <center>
            <table class="pasaje">
                <tr><th>TRABAJADORES DE INTER - PERÚ
                <tr><td>Hoja de ruta del chofer <?=$nom?>
            </table>

            <table class="ver">
                <tr><th>Viaje<th>Fecha<th>Ruta<th>Pago
                    <?php
                    $sql="select VIANRO, VIAFCH, VIAHRS, COSVIA from viaje";
                    // . ", ruta n where c.rutcod=n.rutcod and idcod='$coda' ";
                    $res= mysqli_query($cn,$sql)  or die('Error:'.mysqli_error());
                    $sum=0;
                    while($f=mysqli_fetch_array($res)){
                    $sum=$sum+$f[3];
                    ?>
                    <tr><td><?=$f[0]?><td><?=$f[1]?><td><?=$f[2]?><td><?=$f[3]?>
                    <?php
                        }
                    ?>
                    <tr><td colspan="3">Total pago<td><?=$sum?>
            </table>
        </center>
    </body>
</html>
