<?php
    session_start();

    include 'Conexion_BackEnd.php';

    $correo = $_POST['correo_inicioSesion'];
    $contrasena = $_POST['contrasena_inicioSesion'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' ");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("location: ../bienvenida.php");
        exit();
    } else {
        echo '
            <script>
                alert("Usuario no existe. Por favor verifique los datos ingresados");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

?>