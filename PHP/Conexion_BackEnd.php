<?php

    $conexion = mysqli_connect("localhost", "root", "", "ingreso_registro_db",3306);

    if ($conexion) {
        echo 'conectado exitosamente a la base de datos';
    } else {
        echo 'no se ha podido conectar a la base de datos';
    }

?>