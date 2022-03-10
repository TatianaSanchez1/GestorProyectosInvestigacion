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
                <div class="formulario">
                    <form action="">
                        <h2>Ingresar proyecto nuevo</h2>
                        <div class="input">
                            <label for="" class="form_label">Nombre del proyecto:
                            </label>
                            <input type="text" name="nombre" id="" class="form_input">
                        </div>

                        <div class="input">
                            <label for="" class="form_label">Descripcion</label>
                            <textarea name="descripcion" class="text_area" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input">
                            <label for="" class="form_label">Objetivos Generales</label>
                            <textarea name="descripcion" class="text_area" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input">
                            <label for="" class="form_label">Objetivos Especificos</label>
                            <textarea name="descripcion" class="text_area" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input">
                            <label for="" class="form_label">Presupuesto:</label>
                            <input type="number" min="0" name="presupuesto" id="" class="form_input">
                        </div>
                        <div class="input">
                            <label for="" class="form_label">Fecha inicial:</label>
                            <input type="date" name="fecha_inicial" id="" class="form_input fecha fecha_inicial">

                            <label for="" class="form_label">Fecha final:</label>
                            <input type="date" name="fecha_final" id="" class="form_input fecha">
                        </div>
                        <div class="input">
                            <label for="" class="form_label">Director del proyecto:</label>
                            <input type="text" name="director" id="" class="form_input">
                        </div>
                        <center>
                            <input type="button" value="Guardar" class="boton">
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