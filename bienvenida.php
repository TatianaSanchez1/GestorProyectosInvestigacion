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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Proyectos de Investigacion</title>

    <link rel="stylesheet" href="CSS/styleBienvenida.css">

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
            <a href="#"><i class="fa-solid fa-circle-plus"></i><span>Ingresar Proyecto</span></a>
            <a href="#"><i class="fa-solid fa-pen-to-square"></i><span>Actualizar</span></a>
            <a href="#"><i class="fa-solid fa-ban"></i><span>Eliminar</span></a>
            <a href="#"><i class="fa-solid fa-list"></i><span>Ver lista</span></a>
            <a href="#"><i class="fa-solid fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fa-solid fa-sliders-h"></i><span>Settings</span></a>
        </div>
    </div>

    <div class="contenedor_general">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="info_perfil">
                <img src="img/perfil.jpg" alt="foto de perfil" class="profile-img">
                <h4>Administrador</h4>
            </div>
            <a href="#"><i class="fa-solid fa-circle-plus"></i><span>Ingresar Proyecto</span></a>
            <a href="#"><i class="fa-solid fa-pen-to-square"></i><span>Actualizar</span></a>
            <a href="#"><i class="fa-solid fa-ban"></i><span>Eliminar</span></a>
            <a href="#"><i class="fa-solid fa-list"></i><span>Ver lista</span></a>
            <a href="#"><i class="fa-solid fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fa-solid fa-sliders-h"></i><span>Settings</span></a>
        </div>

        <div class="contenido">

            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>

            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>

            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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