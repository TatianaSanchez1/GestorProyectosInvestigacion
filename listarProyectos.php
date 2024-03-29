<?php

include 'PHP/Conexion_BackEnd.php';

#Consulta

$consulta = "SELECT * FROM proyectos";
$guardar = $conexion->query($consulta);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Proyectos de Investigación</title>

    <link rel="stylesheet" href="CSS/stylePlantillaBienvenida.css">
    <link rel="stylesheet" href="CSS/styleTablaProyectos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <input type="checkbox" id="check">

    <!-- Header -->
    <header>
        <label for="check">
            <i class="fa-solid fa-bars" id="sidebar_btn"></i>
        </label>

        <div class="izquierda">
            <h3>Bienvenido <span>a tu proyecto</span></h3>
        </div>

        <div class="derecha">
            <a href="PHP/cerrarSesionUsuario_BackEnd.php" class="btn_cerrarSesion">Cerrar Sesión</a>
        </div>
    </header>

    <!-- Barra de Navegacion Responsive -->
    <div class="responsive_nav">
        <div class="barra_nav">
            <img src="img/perfil.jpg" alt="foto de perfil" class="mobile_profile_image">
            <i class="fa-solid fa-bars nav_btn"></i>
        </div>


        <div class="responsive_nav_items">
            <a href="ingresarProyecto.php"><i class="fa-solid fa-circle-plus"></i><span>Ingresar Proyecto</span></a>
            <a href="buscar_actualizarProyecto.php"><i class="fa-solid fa-pen-to-square"></i><span>Actualizar</span></a>
            <a href="buscar_eliminarProyecto.php"><i class="fa-solid fa-ban"></i><span>Eliminar</span></a>
            <a href="listarProyectos.php" id="selected"><i class="fa-solid fa-list"></i><span>Ver lista</span></a>

        </div>
    </div>

    <div class="contenedor_general">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="info_perfil">
                <img src="img/perfil.jpg" alt="foto de perfil" class="profile-img">
            </div>
            <a href="ingresarProyecto.php"><i class="fa-solid fa-circle-plus"></i><span>Ingresar Proyecto</span></a>
            <a href="buscar_actualizarProyecto.php"><i class="fa-solid fa-pen-to-square"></i><span>Actualizar</span></a>
            <a href="buscar_eliminarProyecto.php"><i class="fa-solid fa-ban"></i><span>Eliminar</span></a>
            <a href="listarProyectos.html" id="selected"><i class="fa-solid fa-list"></i><span>Ver lista</span></a>

        </div>

        <div class="contenido">
            <div class="tabla-listarProyectos">
                <div class="titulo-tabla">
                    <h2>Tabla de proyectos</h2>
                </div>

                <div class="tabla-responsive table-hover" id="tabla-consulta">
                    <table class="table">
                        <thead class="table-head">
                            <th class="table-text" data-label="id">Id</th>
                            <th class="table-text" data-label="nombre">Nombre</th>
                            <th class="table-text" data-label="presupuesto">Presupuesto</th>
                            <th class="table-text" data-label="fecha_inicial">Fecha Inicial</th>
                            <th class="table-text" data-label="fecha_final">Fecha Final</th>
                            <th class="table-text" data-label="director">Director</th>
                            <th class="table-text">Opciones</th>
                        </thead>

                        <tbody class="table-body">
                            <!-- Ciclo para traer datos de la bd a la tabla -->
                            <?php while ($row = $guardar->fetch_assoc()) { ?>

                                <tr>
                                    <td class="table-content" data-label="id"><?php echo $row['id_proyecto'] ?></td>
                                    <td class="table-content" data-label="nombre"><?php echo $row['nombre'] ?></td>
                                    <td class="table-content" data-label="presupuesto"><?php echo $row['presupuesto'] ?></td>
                                    <td class="table-content" data-label="fecha_inicial"><?php echo $row['fecha_inicial'] ?></td>
                                    <td class="table-content" data-label="fecha_final"><?php echo $row['fecha_final'] ?></td>
                                    <td class="table-content" data-label="director">
                                        <?php
                                        $idDirector = $row['director'];
                                        if (!empty($idDirector)) {
                                            $queryDirector = "SELECT nombre_director FROM directores WHERE id_director = $idDirector";
                                            $nombreDirector = $conexion->query($queryDirector);
                                            $nombreDirectorBD = $nombreDirector->fetch_assoc();
                                            echo $nombreDirectorBD['nombre_director'];
                                        }
                                        ?>
                                    </td>
                                    <td class="table-content"> <a href="actualizarProyecto.php?id_proyecto=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-pencil"></i>Editar</a> - <a href="eliminarProyecto.php?id_proyecto=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-delete-left"></i>Eliminar</a></td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>




            <script type="text/javascript">
                $(document).ready(function() {
                    $(".nav_btn").click(function() {
                        $(".responsive_nav_items").toggleClass("active");
                    });
                });
            </script>
        </div>
    </div>

</body>

</html>