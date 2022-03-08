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
    <link rel="stylesheet" href="CSS/styleLogin.css">
</head>

<body>

    <div class="contenedor_formulario">
        <i class="fa-solid fa-user logo"></i>
        <!-- Login -->
        <h2>Iniciar Sesion</h2>
        <form action="PHP/inicioSesionUsuario_BackEnd.php" method="POST" class="formulario_login">
            <label for="username">Usuario</label>
            <input type="text" placeholder="Usuario" name="usuario_inicioSesion">

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Contraseña" name="contrasena_inicioSesion">

            <button>Entrar</button>

            <a href="#">Has perdido tu contraseña?</a>
        </form>
    </div>
</body>

</html>