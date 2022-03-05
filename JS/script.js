document.getElementById("btn_registrar").addEventListener("click", registro);
document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchoPagina);

//Declaracion de variables
var contenedor_login_registro = document.querySelector(".contenedor_login-registro");
var formulario_login = document.querySelector(".formulario_login");
var formulario_registro = document.querySelector(".formulario_registro");
var caja_fondo_login = document.querySelector(".caja_fondo-login");
var caja_fondo_registro = document.querySelector(".caja_fondo-registro");

function anchoPagina() {
    if (window.innerWidth > 850) {
        caja_fondo_login.style.display = "block";
        caja_fondo_registro.style.display = "block";
    } else {
        caja_fondo_registro.style.display = "block";
        caja_fondo_registro.style.opacity = "1";
        caja_fondo_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
    }
}

anchoPagina();

function iniciarSesion() {
    if (window.innerWidth > 850) {
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_fondo_registro.style.opacity = "1";
        caja_fondo_login.style.opacity = "0";
    } else {
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "block";
        caja_fondo_registro.style.display = "block";
        caja_fondo_login.style.display = "none";
    }

}

function registro() {
    if (window.innerWidth > 850) {
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_fondo_registro.style.opacity = "0";
        caja_fondo_login.style.opacity = "1";
    } else {
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "none";
        caja_fondo_registro.style.display = "none";
        caja_fondo_login.style.display = "block";
        caja_fondo_login.style.opacity = "1";
    }

}