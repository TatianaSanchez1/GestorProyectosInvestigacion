<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Proyectos de Investigació</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <main>
        <div class="contenedor_general">
            <div class="caja_fondo">
                <div class="caja_fondo-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia Sesion para entrar al sistema</p>
                    <button id="btn_iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja_fondo-registro">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para iniciar sesion</p>
                    <button id="btn_registrar">Registarse</button>
                </div>
            </div>

            <!-- Formulario de login y registro -->
            <div class="contenedor_login-registro">
                <!-- Login -->
                <form class="formulario_login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electrónico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <!-- Registro -->
                <form class="formulario_registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo">
                    <input type="text" placeholder="Correo Electrónico">
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="JS/script.js"></script>
</body>

</html>