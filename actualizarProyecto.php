<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor inicia sesion");
                window.location = "index.php";
            </script>
        ';
    session_destroy();
    die();
}

# Consulta para seleccion del director

include 'PHP/Conexion_BackEnd.php';

$directores = "SELECT * FROM directores";
$guardar = $conexion->query($directores);

# Consulta para extraer los datos

$id = $_GET['id_proyecto'];
$modificar = "SELECT * FROM proyectos WHERE id_proyecto = $id";

$consulta = $conexion->query($modificar);
$dato = $consulta->fetch_array();

if (isset($_POST['actualizar'])) {
    $id = $_POST['id_proyecto'];
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);
    $obj_generales = $conexion->real_escape_string($_POST['objGenerales']);
    $obj_especificos = $conexion->real_escape_string($_POST['objEspecificos']);
    $presupuesto = $conexion->real_escape_string($_POST['presupuesto']);
    $fecha_inicial = $conexion->real_escape_string($_POST['fechaInicial']);
    $fecha_final = $conexion->real_escape_string($_POST['fechaFinal']);
    $director = $conexion->real_escape_string($_POST['director']);

    //realizar consulta para actualizar los datos

    $actualiza = "UPDATE proyectos SET nombre = '$nombre', descripcion = '$descripcion', obj_generales = '$obj_generales', obj_especificos = '$obj_especificos', presupuesto = '$presupuesto', fecha_inicial = '$fecha_final', fecha_final = '$fecha_final', director = '$director' WHERE id_proyecto = '$id'";

    $actualizaDatos = $conexion->query($actualiza);

    if ($actualizaDatos > 0) {
        echo '
                <script> 
                    alert("Proyecto almacenado correctamente");
                    window.location = "buscar_actualizarProyecto.php";
                </script>
            ';
    }
}

$conexion->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Proyectos de Investigación</title>

    <link rel="stylesheet" href="CSS/stylePlantillaBienvenida.css">
    <link rel="stylesheet" href="CSS/styleIngresarProyecto.css">

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
            <a href="listarProyectos.php"><i class="fa-solid fa-list"></i><span>Ver lista</span></a>
            <a href="#"><i class="fa-solid fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fa-solid fa-sliders-h"></i><span>Settings</span></a>
        </div>
    </div>

    <div class="contenedor_general">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="info_perfil">
                <img src="img/perfil.jpg" alt="foto de perfil" class="profile-img">
            </div>
            <a href="ingresarProyecto.php"><i class="fa-solid fa-circle-plus"></i><span>Ingresar Proyecto</span></a>
            <a href="buscar_actualizarProyecto.php" id="selected"><i class="fa-solid fa-pen-to-square"></i><span>Actualizar</span></a>
            <a href="buscar_eliminarProyecto.php"><i class="fa-solid fa-ban"></i><span>Eliminar</span></a>
            <a href="listarProyectos.php"><i class="fa-solid fa-list"></i><span>Ver lista</span></a>
            <a href="#"><i class="fa-solid fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fa-solid fa-sliders-h"></i><span>Settings</span></a>
        </div>

        <div class="contenido">
            <div class="formulario">
                <form action="" method="POST">
                    <h2>Actualizar Proyecto</h2>
                    <div class="input">
                        <label for="" class="form_label">Id:</label>
                        <input type="text" name="id_proyecto" value="<?php echo $dato['id_proyecto'] ?>" id="" class="form_input datos id_proyecto">

                        <label for="" class="form_label">Nombre del proyecto:</label>
                        <input type="text" name="nombre" value="<?php echo $dato['nombre'] ?>" id="" class="form_input datos">
                    </div>

                    <div class="input">
                        <label for="" class="form_label">Descripcion</label>
                        <textarea name="descripcion" class="text_area" id="" cols="30" rows="10"><?php echo $dato['descripcion'] ?></textarea>
                    </div>
                    <div class="input">
                        <label for="" class="form_label">Objetivos Generales</label>
                        <textarea name="objGenerales" class="text_area" id="" cols="30" rows="10"><?php echo $dato['obj_generales'] ?></textarea>
                    </div>
                    <div class="input">
                        <label for="" class="form_label">Objetivos Especificos</label>
                        <textarea name="objEspecificos" class="text_area" id="" cols="30" rows="10"><?php echo $dato['obj_especificos'] ?></textarea>
                    </div>
                    <div class="input">
                        <label for="" class="form_label">Presupuesto:</label>
                        <input type="number" min="0" name="presupuesto" value="<?php echo $dato['presupuesto'] ?>" id="" class="form_input">
                    </div>
                    <div class="input">
                        <label for="" class="form_label">Fecha inicial:</label>
                        <input type="date" name="fechaInicial" value="<?php echo $dato['fecha_inicial'] ?>" id="" class="form_input fecha fecha_inicial">

                        <label for="" class="form_label">Fecha final:</label>
                        <input type="date" name="fechaFinal" value="<?php echo $dato['fecha_final'] ?>" id="" class="form_input fecha">
                    </div>

                    <div class="input">
                        <label for="" class="form_label">Director del proyecto:</label>

                        <select name="director" id="" class="form_input">
                            <option value="">Selecciona un director</option>
                            <!-- Ciclo para seleccionar el director -->
                            <?php while ($row = $guardar->fetch_assoc()) { ?>
                                <option value="<?php echo $row['id_director']; ?>"><?php echo $row['nombre_director']; ?></option>
                            <?php } ?>

                        </select>

                    </div>
                    <center>
                        <input type="submit" value="Guardar" class="boton" name="actualizar">
                    </center>
                </form>
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