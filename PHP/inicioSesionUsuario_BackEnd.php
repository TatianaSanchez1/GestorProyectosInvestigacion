<?php
    session_start();

    include 'Conexion_BackEnd.php';

    $usuario = $_POST['usuario_inicioSesion'];
    $contrasena = $_POST['contrasena_inicioSesion'];
    
    #$contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contrasena = '$contrasena' ");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $usuario;
        header("location: ../ingresarProyecto.php");
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