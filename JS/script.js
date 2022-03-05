document.getElementById("btn_registrar").addEventListener("click", registro);
document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciarSesion);

//Declaracion de variables
var contenedor_login_registro = document.querySelector(".contenedor_login-registro");
var formulario_login = document.querySelector(".formulario_login");
var formulario_registro = document.querySelector(".formulario_registro");
var caja_fondo_login = document.querySelector(".caja_fondo-login");
var caja_fondo_registro = document.querySelector(".caja_fondo-registro");

function iniciarSesion() {
    formulario_registro.style.display = "none";
    contenedor_login_registro.style.left = "10px";
    formulario_login.style.display = "block";
    caja_fondo_registro.style.opacity = "1";
    caja_fondo_login.style.opacity = "0";
}

function registro() {
    formulario_registro.style.display = "block";
    contenedor_login_registro.style.left = "410px";
    formulario_login.style.display = "none";
    caja_fondo_registro.style.opacity = "0";
    caja_fondo_login.style.opacity = "1";
}