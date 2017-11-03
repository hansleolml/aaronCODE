<?php
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "bdviajes";
    $tbl_name = "respuestas";


    $conexion=new mysqli($host_db, $user_db, $pass_db, $db_name);

    $codigo=$_POST['codigo'];

    $query = "DELETE FROM chofer WHERE id=$codigo";

    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }
    else{
        if ($conexion->query($query) === TRUE) {


        echo "datos borrados correctmente";
        }

        else {
        echo "Error al ingresar chofer";
       }
    }

?>
