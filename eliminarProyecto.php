<?php
    include 'PHP/Conexion_BackEnd.php';

    $id = $_GET['id_proyecto'];

    $eliminar = "DELETE FROM proyectos WHERE id_proyecto = '$id'";

    $elimina = $conexion->query($eliminar);

    if ($elimina > 0) {
        echo '
                <script> 
                    alert("Proyecto eliminado correctamente");
                    window.location = "buscar_eliminarProyecto.php";
                </script>
            ';
    }

    $conexion->close();

?>