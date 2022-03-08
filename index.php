<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: bienvenida.php");
    }
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Proyectos de Investigació</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/styleLogin.css">
</head>

<body>

    <div class="contenedor_formulario">
        <div class="logo"><i class="fa-solid fa-user"></i></div>

        <h2>Iniciar Sesion</h2>
        <!-- Login -->

        <form action="PHP/inicioSesionUsuario_BackEnd.php" method="POST" class="formulario">

            <label for="username">Usuario</label>
            <input class="usuario-input" type="text" placeholder="Usuario" name="usuario_inicioSesion" required>

            <label for="password">Contraseña</label>
            <input class="usuario-input" type="password" placeholder="Contraseña" name="contrasena_inicioSesion" required>

            <input type="submit" value="Entrar">

            <a href="#">Has perdido tu contraseña?</a>
        </form>
    </div>
</body>

</html>