<?php

include 'Conexion_BackEnd.php';

$id_proyecto = $_POST['id_proyecto'];
$nombre_proyecto = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$obj_generales = $_POST['objGenerales'];
$obj_especificos = $_POST['objEspecificos'];
$presupuesto = $_POST['presupuesto'];
$fecha_inicial = $_POST['fechaInicial'];
$fecha_final = $_POST['fechaFinal'];
$director = $_POST['director'];

#validacion de director para cambiar id por nombre

$query = "INSERT INTO proyectos(id_proyecto, nombre, descripcion, obj_generales, obj_especificos, presupuesto, fecha_inicial, fecha_final, director) VALUES ('$id_proyecto', '$nombre_proyecto', '$descripcion', '$obj_generales', '$obj_especificos', '$presupuesto', '$fecha_inicial', '$fecha_final', '$director')";


# Verificar que el id del proyecto no se repita
$verificar_idProyecto = mysqli_query($conexion, "SELECT * FROM proyectos WHERE id_proyecto = '$id_proyecto'");

if (mysqli_num_rows($verificar_idProyecto) > 0) {
    echo '
            <script>
                alert("Este codigo de proyecto ya está registrado.");
                window.location = "../bienvenida.php";
            </script>
        ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
                <script> 
                    alert("Proyecto almacenado correctamente");
                    window.location = "../bienvenida.php";
                </script>';
} else {
    echo '
                <script> 
                    alert("Intentalo de nuevo. Proyecto no almacenado");
                    window.location = "../bienvenida.php";
                </script>';
}

mysqli_close($conexion);
